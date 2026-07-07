import React, {
    forwardRef,
    useCallback,
    useImperativeHandle,
    useRef,
} from 'react';
import { Dimensions, StyleSheet, Text } from 'react-native';
import { Gesture, GestureDetector } from 'react-native-gesture-handler';
import Animated, {
    Extrapolate,
    interpolate,
    runOnJS,
    useAnimatedStyle,
    useSharedValue,
    withSpring,
} from 'react-native-reanimated';

const { height: SCREEN_HEIGHT } = Dimensions.get('window');
export const MAX_TRANSLATE_Y = -SCREEN_HEIGHT + 50;

type BottomSheetProps = {};

export type BottomSheetRefProps = {
    scrollTo: (destination: number) => void;
    isActive: () => boolean;
};

const MyBottomSheet = forwardRef<BottomSheetRefProps, BottomSheetProps>(
    (_, ref) => {
        const translateY = useSharedValue(0);
        const context = useSharedValue({ y: 0 });

        // React ref to track active state
        const activeRef = useRef(false);

        const setActive = (value: boolean) => {
            activeRef.current = value;
        };

        const scrollTo = useCallback((destination: number) => {
            'worklet';

            translateY.value = withSpring(destination, {
                damping: 80,
            });

            runOnJS(setActive)(destination !== 0);
        }, []);

        const isActive = useCallback(() => {
            return activeRef.current;
        }, []);

        useImperativeHandle(
            ref,
            () => ({
                scrollTo,
                isActive,
            }),
            [scrollTo, isActive]
        );

        const gesture = Gesture.Pan()
            .onStart(() => {
                context.value = {
                    y: translateY.value,
                };
            })
            .onUpdate((event) => {
                translateY.value = event.translationY + context.value.y;
                translateY.value = Math.max(
                    translateY.value,
                    MAX_TRANSLATE_Y
                );
            })
            .onEnd((event) => {
                const halfway = MAX_TRANSLATE_Y / 2;

                if (event.velocityY > 1000) {
                    // Fast swipe down
                    scrollTo(0);
                } else if (event.velocityY < -1000) {
                    // Fast swipe up
                    scrollTo(MAX_TRANSLATE_Y);
                } else {
                    // Slow drag
                    if (translateY.value > halfway) {
                        scrollTo(0);
                    } else {
                        scrollTo(MAX_TRANSLATE_Y);
                    }
                }
            });

        const animatedStyle = useAnimatedStyle(() => {
            const borderRadius = interpolate(
                translateY.value,
                [MAX_TRANSLATE_Y + 50, MAX_TRANSLATE_Y],
                [25, 4],
                Extrapolate.CLAMP
            );

            return {
                borderRadius,
                transform: [
                    {
                        translateY: translateY.value,
                    },
                ],
            };
        });

        return (
            <GestureDetector gesture={gesture}>
                <Animated.View
                    style={[styles.bottomSheetContainer, animatedStyle]}
                >
                    <Text>Wishlist</Text>
                    <Text>This is the new text for you guys</Text>
                </Animated.View>
            </GestureDetector>
        );
    }
);

const styles = StyleSheet.create({
    bottomSheetContainer: {
        position: 'absolute',
        top: SCREEN_HEIGHT,
        width: '100%',
        height: SCREEN_HEIGHT,
        backgroundColor: 'dodgerblue',
        borderTopLeftRadius: 16,
        borderTopRightRadius: 16,
        padding: 16,
    },
});

export default MyBottomSheet;