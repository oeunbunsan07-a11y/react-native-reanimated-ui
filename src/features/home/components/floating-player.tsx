import Entypo from "@expo/vector-icons/Entypo";
import FontAwesome from "@expo/vector-icons/FontAwesome";
import React from "react";
import { PanResponder, Text, TouchableOpacity } from "react-native";

import Animated, {
  useAnimatedStyle,
  useSharedValue,
  withTiming
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

  // sync state → animation
  React.useEffect(() => {
    progress.value = withTiming(expanded ? 1 : 0, { duration: 300 });
  }, [expanded]);

  // swipe gesture handler (UNCHANGED LOGIC)
  const panResponder = React.useRef(
    PanResponder.create({
      onMoveShouldSetPanResponder: (_, gesture) => {
        return Math.abs(gesture.dy) > 10;
      },
      onPanResponderRelease: (_, gesture) => {
        if (gesture.dy < -50) {
          setExpanded(true);
        }
        if (gesture.dy > 50) {
          setExpanded(false);
        }
      },
    })
  ).current;

  // animated container
  const containerStyle = useAnimatedStyle(() => {
    return {
      flexDirection: "row",
      alignItems: "center",
      paddingInline : 16,
    };
  });


  return (
    <Animated.View {...panResponder.panHandlers} style={containerStyle}>
      {/* Album Cover */}
      <Animated.Image source={{ uri: imageUrl }} style={{ width : 50, height : 50, borderRadius : 100}} />

      {/* Song Info */}
      <Animated.View
        style={{
          flex: 1,
          marginHorizontal: 12,
        }}
      >
        <Text
          numberOfLines={1}
          style={{
            color: "#FFF",
            fontSize: 15,
            fontWeight: "600",
          }}
        >
          {title}
        </Text>

        <Text
          numberOfLines={1}
          style={{
            color: "#B0B0B0",
            fontSize: 12,
            marginTop: 4,
          }}
        >
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