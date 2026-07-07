import React from "react";
import { Dimensions, StyleSheet } from "react-native";
import { Gesture, GestureDetector } from "react-native-gesture-handler";
import Animated, {
    Extrapolation,
    interpolate,
    useAnimatedStyle,
    useSharedValue,
    withSpring,
} from "react-native-reanimated";
import { SafeAreaView } from "react-native-safe-area-context";

import ExpandedPlayer from "./expanded-player";
import MiniPlayer from "./mini-player";

const { height: SCREEN_HEIGHT } = Dimensions.get("window");

const MINI_HEIGHT = 76;

const SPRING = {
  damping: 20,
  stiffness: 180,
};

export default function Player() {
  const translateY = useSharedValue(SCREEN_HEIGHT - MINI_HEIGHT);
  const startY = useSharedValue(0);

  const pan = Gesture.Pan()
    .onBegin(() => {
      startY.value = translateY.value;
    })
    .onUpdate((e) => {
      const next = startY.value + e.translationY;

      translateY.value = Math.min(
        SCREEN_HEIGHT - MINI_HEIGHT,
        Math.max(0, next)
      );
    })
    .onEnd(() => {
      const shouldExpand =
        translateY.value < (SCREEN_HEIGHT - MINI_HEIGHT) * 0.55;

      translateY.value = withSpring(
        shouldExpand ? 0 : SCREEN_HEIGHT - MINI_HEIGHT,
        SPRING
      );
    });

  const containerStyle = useAnimatedStyle(() => {
    const radius = interpolate(
      translateY.value,
      [0, SCREEN_HEIGHT - MINI_HEIGHT],
      [0, 22],
      Extrapolation.CLAMP
    );

    return {
      transform: [{ translateY: translateY.value }],
      borderTopLeftRadius: radius,
      borderTopRightRadius: radius,
    };
  });

  const miniStyle = useAnimatedStyle(() => ({
    opacity: interpolate(
      translateY.value,
      [0, 150, SCREEN_HEIGHT - MINI_HEIGHT],
      [0, 0, 1],
      Extrapolation.CLAMP
    ),
  }));

  const expandedStyle = useAnimatedStyle(() => ({
    opacity: interpolate(
      translateY.value,
      [0, 250],
      [1, 0],
      Extrapolation.CLAMP
    ),
  }));

  return (
    <GestureDetector gesture={pan}>
      <Animated.View style={[styles.container, containerStyle]}>
        <SafeAreaView style={{ flex: 1 }}>
          <ExpandedPlayer
            style={expandedStyle}
            translateY={translateY}
          />

          <MiniPlayer
            style={miniStyle}
            translateY={translateY}
          />
        </SafeAreaView>
      </Animated.View>
    </GestureDetector>
  );
}

const styles = StyleSheet.create({
  container: {
    position: "absolute",
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    backgroundColor: "#111",
    overflow: "hidden",
  },
});