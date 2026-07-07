import React from 'react';
import { Dimensions, View } from 'react-native';
import { Gesture, GestureDetector } from 'react-native-gesture-handler';
import Animated, {
    Extrapolate,
    interpolate,
    useAnimatedStyle,
    useSharedValue,
    withSpring
} from 'react-native-reanimated';

import FloatingPlayer from '@/src/features/home/components/floating-player';

const { height: SCREEN_HEIGHT } = Dimensions.get('window');

const HEADER_HEIGHT = 80;

// Same bounds used for BOTH the drag clamp and the height interpolation.
// This is what removes the "dead zone" you were hitting on swipe down.
const CLOSED_Y = 0;
const OPEN_Y = -(SCREEN_HEIGHT - HEADER_HEIGHT);

// How far (as a fraction of the open distance) you must drag before
// releasing decides "open" vs "close" when the swipe is slow.
const SNAP_THRESHOLD = 0.4;

// A quick flick past this speed (px/s) overrides position-based snapping.
const VELOCITY_THRESHOLD = 800;

const clamp = (value: number, min: number, max: number) => {
    'worklet';
    return Math.min(Math.max(value, min), max);
};

const Music = () => {
    const translateY = useSharedValue(CLOSED_Y);
    const context = useSharedValue({ y: 0 });

    const gesture = Gesture.Pan()
        .onStart(() => {
            context.value = { y: translateY.value };
        })
        .onUpdate((event) => {
            // Clamp during the drag itself so the value never overshoots
            // past fully-open or fully-closed — no more catch-up dead zone.
            translateY.value = clamp(
                event.translationY + context.value.y,
                OPEN_Y,
                CLOSED_Y
            );
        })
        .onEnd((event) => {
            const distanceOpened = (CLOSED_Y - translateY.value) / (CLOSED_Y - OPEN_Y);

            const shouldOpen =
                event.velocityY < -VELOCITY_THRESHOLD ||
                (event.velocityY <= VELOCITY_THRESHOLD && distanceOpened > SNAP_THRESHOLD);

            if (shouldOpen) {
                translateY.value = withSpring(OPEN_Y, {
                    damping: 100,
                    stiffness: 200,
                    velocity: event.velocityY,
                });
            } else {
                translateY.value = withSpring(CLOSED_Y, {
                    damping: 100,
                    stiffness: 200,
                    velocity: event.velocityY,
                });
            }
        });

    const animatedStyle = useAnimatedStyle(() => {
        const height = interpolate(
            translateY.value,
            [CLOSED_Y, OPEN_Y],
            [HEADER_HEIGHT, SCREEN_HEIGHT],
            Extrapolate.CLAMP
        );

        return { height };
    });

    return (
        // NOTE: no GestureDetector here anymore — this yellow View is just
        // a plain layout container now, so touches on it are never captured
        // by the pan gesture.
        <View style={{ height : 80, position: 'absolute', bottom : 4, left : 0, right : 0}}>
            <GestureDetector gesture={gesture}>
                <Animated.View
                    style={[
                        {
                            width: '100%',
                            backgroundColor: '#006fc9',
                            borderRadius: 16,
                            position: 'absolute',
                            bottom: 0,
                            height: HEADER_HEIGHT,
                        },
                        animatedStyle,
                    ]}
                >
                    <View style={{ height: '100%', alignItems: 'center', justifyContent: 'center' }}>
                        <FloatingPlayer
                            imageUrl="https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg"
                            title="Midnight Dreams"
                            subtitle="Album: Starlight"
                            artist="Aurora Waves"
                            isPlaying={true}
                            onNext={() => console.log('Next')}
                            onPrevious={() => console.log('Previous')}
                            duration="4:32"
                            progress={0.45}
                        />
                    </View>
                </Animated.View>
            </GestureDetector>
        </View>
    );
};

export default Music;