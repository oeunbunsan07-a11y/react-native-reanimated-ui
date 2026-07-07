import { useVideoPlayer, VideoView } from 'expo-video';
import React from 'react';
import { StyleSheet, useWindowDimensions } from 'react-native';
import { Gesture, GestureDetector, GestureHandlerRootView } from 'react-native-gesture-handler';
import Animated, {
    Extrapolation,
    interpolate,
    useAnimatedStyle,
    useSharedValue
} from 'react-native-reanimated';

// Sample video source url
const videoUrl = "https://res.cloudinary.com/dwclqc9ao/video/upload/v1780393583/videos/su1hyb2hjwetb4auu4z8.mp4";

const LearnAnimated = () => {
  const { width } = useWindowDimensions();
  const scale = useSharedValue(1);

  // 1. Initialize the Video Player instance
  const player = useVideoPlayer(videoUrl, (playerInstance) => {
    playerInstance.loop = true;
    playerInstance.play();
  });

  // 2. Configure the modern Pinch gesture definition
  const pinchGesture = Gesture.Pinch()
    .onUpdate((event) => {
      scale.value = interpolate(
        event.scale,
        [0.5, 4],
        [0.8, 3],
        Extrapolation.CLAMP
      );
    })
    .onEnd(() => {
    //   scale.value = withTiming(1);
    });

  // 3. Drive the transform array matrix reactively
  const animatedStyle = useAnimatedStyle(() => ({
    transform: [{ scale: scale.value }]
  }));

  return (
    <GestureHandlerRootView style={styles.container}>
      <GestureDetector gesture={pinchGesture}>
        {/* 4. Wrap VideoView inside Animated.View to map shared values */}
        <Animated.View style={[{ width, aspectRatio: 16/9 }, animatedStyle]}>
          <VideoView 
            style={StyleSheet.absoluteFillObject} 
            player={player} 
            allowsFullscreen={false}
            allowsPictureInPicture={false}
            nativeControls={false}
          />
        </Animated.View>
      </GestureDetector>
    </GestureHandlerRootView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#000',
    justifyContent: 'center',
    alignItems: 'center',
  },
});

export default LearnAnimated;
