import Entypo from "@expo/vector-icons/Entypo";
import FontAwesome from "@expo/vector-icons/FontAwesome";
import { Image, StyleSheet, Text, TouchableOpacity, View } from "react-native";
import Animated from "react-native-reanimated";

const image =
  "https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg?1782911641";

export default function MiniPlayer({ style }: any) {
  return (
    <Animated.View style={[styles.container, style]}>
      <Image
        source={{ uri: image }}
        resizeMode="cover"
        style={styles.cover}
      />

      <View style={styles.info}>
        <Text numberOfLines={1} style={styles.title}>
          Live The Night
        </Text>

        <Text numberOfLines={1} style={styles.artist}>
          DJ SAN
        </Text>
      </View>

      <TouchableOpacity style={styles.icon}>
        <Entypo
          name="controller-play"
          size={28}
          color="#fff"
        />
      </TouchableOpacity>

      <TouchableOpacity style={styles.icon}>
        <FontAwesome
          name="step-forward"
          size={22}
          color="#fff"
        />
      </TouchableOpacity>
    </Animated.View>
  );
}

const styles = StyleSheet.create({
  container: {
    position: "absolute",
    left: 0,
    right: 0,
    bottom: 0,
    height: 80,

    backgroundColor: "#E53935",

    flexDirection: "row",
    alignItems: "center",

    paddingHorizontal: 16,

    zIndex: 1000,
  },

  cover: {
    width: 56,
    height: 56,
    borderRadius: 28,
    backgroundColor: "#444",
  },

  info: {
    flex: 1,
    marginHorizontal: 14,
    justifyContent: "center",
  },

  title: {
    color: "#fff",
    fontSize: 15,
    fontWeight: "700",
  },

  artist: {
    color: "#eee",
    fontSize: 12,
    marginTop: 2,
  },

  icon: {
    marginLeft: 18,
  },
});