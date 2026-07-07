import Entypo from "@expo/vector-icons/Entypo";
import FontAwesome from "@expo/vector-icons/FontAwesome";
import React from "react";
import { PanResponder, Text, TouchableOpacity } from "react-native";

import Animated, {
  interpolate,
  useAnimatedStyle,
  useSharedValue,
  withTiming,
} from "react-native-reanimated";

import { Dimensions } from "react-native";

const { height: SCREEN_HEIGHT } = Dimensions.get("window");

const FloatingPlayer = ({
  imageUrl,
  title,
  subtitle,
  isPlaying,
  onPlayPause,
  onNext,
  onPrevious,
}: any) => {
  const [expanded, setExpanded] = React.useState(false);

  // animation driver
  const progress = useSharedValue(0);

  // ✅ ADDED: drag tracking
  const dragY = useSharedValue(0);

  // sync state → animation
  React.useEffect(() => {
    progress.value = withTiming(expanded ? 1 : 0, { duration: 300 });
  }, [expanded]);

  // swipe + drag gesture handler
  const panResponder = React.useRef(
    PanResponder.create({
      onMoveShouldSetPanResponder: (_, gesture) => {
        return Math.abs(gesture.dy) > 10;
      },

      // ✅ ADDED
      onPanResponderGrant: () => {
        dragY.value = 0;
      },

      // ✅ ADDED: live drag update
      onPanResponderMove: (_, gesture) => {
        const newProgress = Math.max(
          0,
          Math.min(
            1,
            expanded
              ? 1 - gesture.dy / SCREEN_HEIGHT
              : -gesture.dy / SCREEN_HEIGHT
          )
        );

        dragY.value = gesture.dy;
        progress.value = newProgress;
      },

      onPanResponderRelease: (_, gesture) => {
        if (gesture.dy < -50) {
          setExpanded(true);
        }
        if (gesture.dy > 50) {
          setExpanded(false);
        }

        // ✅ improved snap behavior
        const shouldExpand = gesture.dy < -100 || (expanded && gesture.dy > -100);
        setExpanded(shouldExpand);
      },

      // ✅ ADDED safety fallback
      onPanResponderTerminate: () => {
        progress.value = withTiming(expanded ? 1 : 0, { duration: 200 });
      },
    })
  ).current;

  // animated container
  const containerStyle = useAnimatedStyle(() => {
    return {
      position: "absolute",
      left: interpolate(progress.value, [0, 1], [8, 0]),
      right: interpolate(progress.value, [0, 1], [8, 0]),

      bottom: 0,

      height: interpolate(progress.value, [0, 1], [72, SCREEN_HEIGHT]),

      borderRadius: interpolate(progress.value, [0, 1], [18, 0]),

      backgroundColor: "#58617e",

      flexDirection: "row",
      alignItems: "center",

      paddingHorizontal: 16,
      paddingTop: interpolate(progress.value, [0, 1], [0, 60]),

      shadowColor: "#000",
      shadowOffset: { width: 0, height: 8 },
      shadowOpacity: interpolate(progress.value, [0, 1], [0.25, 0]),
      shadowRadius: 12,
      elevation: interpolate(progress.value, [0, 1], [10, 0]),
    };
  });

  // animated image
  const imageStyle = useAnimatedStyle(() => {
    const size = interpolate(progress.value, [0, 1], [52, 180]);

    return {
      width: size,
      height: size,
      borderRadius: 12,
      marginBottom: interpolate(progress.value, [0, 1], [0, 20]),
    };
  });

  return (
    <Animated.View {...panResponder.panHandlers} style={containerStyle}>
      {/* Album Cover */}
      <Animated.Image source={{ uri: imageUrl }} style={imageStyle} />

      {/* Song Info */}
      <Animated.View
        style={{
          flex: 1,
          marginHorizontal: 12,
        }}
      >
        <Text numberOfLines={1} style={{ color: "#FFF", fontSize: 15, fontWeight: "600" }}>
          {title}
        </Text>

        <Text numberOfLines={1} style={{ color: "#B0B0B0", fontSize: 12, marginTop: 4 }}>
          {subtitle}
        </Text>
      </Animated.View>

      {/* Controls */}
      <Animated.View
        style={{
          flexDirection: "row",
          alignItems: "center",
          gap: 16,
        }}
      >
        <TouchableOpacity onPress={onPrevious}>
          <FontAwesome name="step-backward" size={20} color="#FFF" />
        </TouchableOpacity>

        <TouchableOpacity
          onPress={onPlayPause}
          style={{
            width: 44,
            height: 44,
            borderRadius: 22,
            backgroundColor: "#FF4D6D",
            justifyContent: "center",
            alignItems: "center",
          }}
        >
          <Entypo
            name={isPlaying ? "controller-paus" : "controller-play"}
            size={22}
            color="#FFF"
          />
        </TouchableOpacity>

        <TouchableOpacity onPress={onNext}>
          <FontAwesome name="step-forward" size={20} color="#FFF" />
        </TouchableOpacity>
      </Animated.View>
    </Animated.View>
  );
};

export default FloatingPlayer;