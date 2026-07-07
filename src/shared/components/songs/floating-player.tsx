import React, {
  forwardRef,
  useCallback,
  useEffect,
  useImperativeHandle,
  useRef
} from 'react';
import { BackHandler, Dimensions, StyleSheet, Text, TouchableOpacity } from 'react-native';
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
export const MAX_TRANSLATE_Y = -SCREEN_HEIGHT;

type BottomSheetProps = {};

export type BottomSheetRefProps = {
  scrollTo: (destination: number) => void;
  isActive: () => boolean;
};

const FloatingPlayer = forwardRef<BottomSheetRefProps, BottomSheetProps>(
  (_, ref) => {
    const translateY = useSharedValue(0);
    const context = useSharedValue({ y: 0 });

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


    useEffect(() => {
      const onBackPress = () => {
        if (activeRef.current) {
          scrollTo(0); // close sheet
          return true; // prevent default behavior
        }
        return false; // let system handle it
      };

      const subscription = BackHandler.addEventListener(
        'hardwareBackPress',
        onBackPress
      );

      return () => subscription.remove();
    }, [scrollTo]);

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
          scrollTo(0);
        } else if (event.velocityY < -1000) {
          scrollTo(MAX_TRANSLATE_Y);
        } else {
          if (translateY.value > halfway) {
            scrollTo(0);
          } else {
            scrollTo(MAX_TRANSLATE_Y);
          }
        }
      });

    // Bottom sheet animation
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

    // Blue player animation
    const playerStyle = useAnimatedStyle(() => {
      const height = interpolate(
        translateY.value,
        [0, MAX_TRANSLATE_Y],
        [80, SCREEN_HEIGHT + 80],
        Extrapolate.CLAMP
      );

      const radius = interpolate(
        translateY.value,
        [0, MAX_TRANSLATE_Y],
        [16, 0],
        Extrapolate.CLAMP
      );

      return {
        height,
        borderRadius: radius,
      };
    });

    return (
      <GestureDetector gesture={gesture}>
        <Animated.View
          style={[styles.bottomSheetContainer, animatedStyle]}
        >
          <Animated.View
            style={[
              styles.player,
              playerStyle,
            ]}
          >
            <Text>Texting</Text>

            <TouchableOpacity onPress={() => scrollTo(0)} style={{ marginTop : 100}}>
              <Text>Back</Text>
            </TouchableOpacity>
          </Animated.View>
        </Animated.View>
      </GestureDetector>
    );
  }
);

const styles = StyleSheet.create({
  bottomSheetContainer: {
    position: 'absolute',
    top: SCREEN_HEIGHT - 50,
    width: '100%',
    height: SCREEN_HEIGHT + 100,
    backgroundColor: 'white',
  },

  player: {
    width: '100%',
    backgroundColor: 'dodgerblue',
  },
});

export default FloatingPlayer;