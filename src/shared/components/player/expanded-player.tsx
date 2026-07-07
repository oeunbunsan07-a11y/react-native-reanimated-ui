import React from "react";
import { Image, StyleSheet, Text, View } from "react-native";
import Animated from "react-native-reanimated";

const image =
  "https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg?1782911641";

export default function ExpandedPlayer({
  style,
}: {
  style?: any;
}) {
  return (
    <Animated.View style={[styles.container, style]}>
      {/* Drag Handle */}
      <View style={styles.handle} />

      {/* Album Art */}
      <Image
        source={{ uri: image }}
        resizeMode="cover"
        style={styles.artwork}
      />

      {/* Song Info */}
      <View style={styles.info}>
        <Text numberOfLines={1} style={styles.title}>
          Live The Night
        </Text>

        <Text numberOfLines={1} style={styles.artist}>
          DJ SAN
        </Text>
      </View>

      {/* Progress */}
      <View style={styles.progressTrack}>
        <View style={styles.progress} />
      </View>

      {/* Time */}
      <View style={styles.timeRow}>
        <Text style={styles.time}>1:12</Text>
        <Text style={styles.time}>3:46</Text>
      </View>

      {/* Controls */}
      <View style={styles.controls}>
        <Text style={styles.control}>⏮</Text>
        <Text style={styles.play}>▶</Text>
        <Text style={styles.control}>⏭</Text>
      </View>
    </Animated.View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    paddingTop: 60,
    paddingHorizontal: 24,
    alignItems: "center",
    backgroundColor: "#111",
  },

  handle: {
    width: 44,
    height: 5,
    borderRadius: 3,
    backgroundColor: "#666",
    marginBottom: 32,
  },

  artwork: {
    width: 300,
    height: 300,
    borderRadius: 20,
    backgroundColor: "#333",
  },

  info: {
    width: "100%",
    marginTop: 32,
  },

  title: {
    color: "#FFF",
    fontSize: 28,
    fontWeight: "700",
  },

  artist: {
    color: "#9E9E9E",
    fontSize: 18,
    marginTop: 6,
  },

  progressTrack: {
    width: "100%",
    height: 4,
    backgroundColor: "#444",
    borderRadius: 2,
    marginTop: 40,
  },

  progress: {
    width: "35%",
    height: 4,
    borderRadius: 2,
    backgroundColor: "#FFF",
  },

  timeRow: {
    width: "100%",
    flexDirection: "row",
    justifyContent: "space-between",
    marginTop: 8,
  },

  time: {
    color: "#AAA",
    fontSize: 12,
  },

  controls: {
    width: "100%",
    marginTop: 40,
    flexDirection: "row",
    justifyContent: "space-evenly",
    alignItems: "center",
  },

  control: {
    fontSize: 34,
    color: "#FFF",
  },

  play: {
    fontSize: 54,
    color: "#FFF",
  },
});