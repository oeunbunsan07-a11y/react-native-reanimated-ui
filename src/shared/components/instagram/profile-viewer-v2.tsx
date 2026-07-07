import React from "react";
import { Image, StyleSheet, Text, View } from "react-native";
import {
    Gesture,
    GestureDetector,
} from "react-native-gesture-handler";
import Animated, {
    useAnimatedStyle,
    useSharedValue,
    withSpring,
    withTiming,
} from "react-native-reanimated";

const imageUrl =
    "https://cdnb.artstation.com/p/assets/images/images/100/531/233/large/yeonji-rhee-lebanon-yeonjirhee-final.jpg?1783209105";

const ProfileViewerV2 = () => {
    const scale = useSharedValue(1);
    const translateX = useSharedValue(0);
    const translateY = useSharedValue(0);
    const actionsOpacity = useSharedValue(1);

    const pan = Gesture.Pan()
        .onStart(() => {
            "worklet";
            actionsOpacity.value = withTiming(0, { duration: 200 });
        })
        .onUpdate((event) => {
            "worklet";
            translateX.value = event.translationX;
            translateY.value = event.translationY;
        })  
        .onEnd(() => {
            "worklet";
            translateX.value = withSpring(0);
            translateY.value = withSpring(0);
            actionsOpacity.value = withTiming(1, { duration: 200 });
        });

    const pinch = Gesture.Pinch()
        .onStart(() => {
            "worklet";
            actionsOpacity.value = withTiming(0, { duration: 200 });
        })
        .onUpdate((event) => {
            "worklet";
            scale.value = event.scale;
        })
        .onEnd(() => {
            "worklet";
            scale.value = withSpring(1);
            actionsOpacity.value = withTiming(1, { duration: 200 });
        });

    const gesture = Gesture.Simultaneous(pan, pinch);

    const circleStyle = useAnimatedStyle(() => {
        return {
            transform: [
                { translateX: translateX.value },
                { translateY: translateY.value },
                { scale: scale.value },
            ],
        };
    });

    const actionsStyle = useAnimatedStyle(() => {
        return {
            opacity: actionsOpacity.value,
        };
    });

    return (
        <View style={styles.container}>
            <GestureDetector gesture={gesture}>
                <Animated.View style={[styles.circle, circleStyle]}>
                    <Image
                        source={{ uri: imageUrl }}
                        style={styles.image}
                        resizeMode="cover"
                    />
                </Animated.View>
            </GestureDetector>

            <Animated.View style={[styles.actions, actionsStyle]}>
                <Text style={styles.actionText}>Follow</Text>
                <Text style={styles.actionText}>Share Profile</Text>
                <Text style={styles.actionText}>Copy Link</Text>
                <Text style={styles.actionText}>QR Code</Text>
            </Animated.View>
        </View>
    );
};

export default ProfileViewerV2;

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: "dodgerblue",
        justifyContent: "center",
        alignItems: "center",
    },
    circle: {
        width: 300,
        height: 300,
        borderRadius: 150,
        overflow: "hidden",
        backgroundColor: "#1976D2",
    },
    image: {
        width: "100%",
        height: "100%",
    },
    actions: {
        flexDirection: "row",
        gap: 16,
        marginTop: 50,
        alignItems: "center",
    },
    actionText: {
        color: "#fff",
        fontWeight: "600",
    },
});