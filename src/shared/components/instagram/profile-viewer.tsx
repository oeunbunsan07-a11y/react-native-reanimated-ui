import React from "react";
import { Image, StyleSheet, Text, View } from "react-native";
import {
    Gesture,
    GestureDetector,
} from "react-native-gesture-handler";
import Animated, {
    useAnimatedStyle,
    useSharedValue,
    withTiming,
} from "react-native-reanimated";

const imageUrl = "https://cdnb.artstation.com/p/assets/images/images/100/531/233/large/yeonji-rhee-lebanon-yeonjirhee-final.jpg?1783209105"

const Profile = () => {
  const scale = useSharedValue(1);
  const actionsOpacity = useSharedValue(1);

  const pinch = Gesture.Pinch()
    .onStart(() => {
      actionsOpacity.value = withTiming(0, { duration: 200 });
    })
    .onUpdate((e) => {
      scale.value = e.scale;
    })
    .onEnd(() => {
      scale.value = withTiming(1, { duration: 250 });
      actionsOpacity.value = withTiming(1, { duration: 250 });
    });

  const circleStyle = useAnimatedStyle(() => {
    return {
      transform: [{ scale: scale.value }],
    };
  });

  const actionsStyle = useAnimatedStyle(() => {
    return {
      opacity: actionsOpacity.value,
    };
  });

  return (
    <View style={styles.container}>
      <GestureDetector gesture={pinch}>
        <Animated.View style={[styles.circle, circleStyle]}>
          <Image style={{ flex : 1 }} source={{ uri : imageUrl }} />
        </Animated.View>
      </GestureDetector>

      <Animated.View style={[styles.actions, actionsStyle]}>
        <Text>Follow</Text>
        <Text>Share Profile</Text>
        <Text>Copy Link</Text>
        <Text>QR code</Text>
      </Animated.View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: "dodgerblue",
  },
  circle: {
    width: 300,
    height: 300,
    borderRadius: 150, // React Native uses a number, not "100%"
    backgroundColor: "blue",
    overflow : "hidden"
  },
  actions: {
    flexDirection: "row",
    gap: 16,
    alignItems: "center",
    marginTop: 50, // React Native uses marginTop instead of marginBlockStart
  },
});

export default Profile;