import React from "react";
import { Dimensions, StyleSheet } from "react-native";
import { Gesture, GestureDetector } from "react-native-gesture-handler";
import Animated, {
    runOnJS,
    useAnimatedStyle,
    useSharedValue,
    withSpring,
    withTiming,
} from "react-native-reanimated";

const { width: SCREEN_WIDTH } = Dimensions.get("window");

type Props = {
  onDelete: () => void;
};

const DELETE_THRESHOLD = SCREEN_WIDTH * 0.35;

const SwipeDelete = ({ onDelete }: Props) => {
  const translateX = useSharedValue(0);
  const startX = useSharedValue(0);

  const gesture = Gesture.Pan()
    .onStart(() => {
      startX.value = translateX.value;
    })
    .onUpdate((event) => {
      // Only allow swiping left
      translateX.value = Math.min(0, startX.value + event.translationX);
    })
    .onEnd(() => {
      if (Math.abs(translateX.value) > DELETE_THRESHOLD) {
        // Swipe item off screen
        translateX.value = withTiming(-SCREEN_WIDTH, {}, (finished) => {
          if (finished) {
            runOnJS(onDelete)();
          }
        });
      } else {
        // Return to original position
        translateX.value = withSpring(0);
      }
    });

  const animatedStyle = useAnimatedStyle(() => ({
    transform: [{ translateX: translateX.value }],
  }));

  return (
    <GestureDetector gesture={gesture}>
      <Animated.View style={[styles.container, animatedStyle]} />
    </GestureDetector>
  );
};

const styles = StyleSheet.create({
  container: {
    width: SCREEN_WIDTH,
    height: 100,
    backgroundColor: "red",
  },
});

export default SwipeDelete;