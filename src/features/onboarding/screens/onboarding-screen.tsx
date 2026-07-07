import { router } from "expo-router";
import React, { useRef, useState } from "react";
import {
    Animated,
    Dimensions,
    Platform,
    StatusBar,
    StyleSheet,
    Text,
    TouchableOpacity,
    View,
} from "react-native";
import { useOnboarding } from "../providers/onboarding-provider";
import { One, Three, Two } from "../sections";

const { width, height } = Dimensions.get("window");

const OnboardingData = [
    {
        id: 1,
        image:
            "https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=1200",
        content: <One />,
    },
    {
        id: 2,
        image:
            "https://images.unsplash.com/photo-1493246318656-5bfd4cfb29b8?w=1200",
        content: <Two />,
    },
    {
        id: 3,
        image:
            "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1200",
        content: <Three />,
    },
];

const OnboardingScreen = () => {

    const { completeOnboarding } = useOnboarding();

    const scrollX = useRef(new Animated.Value(0)).current;
    const flatListRef: any = useRef(null);


    const [currentIndex, setCurrentIndex] = useState(0);

    const onViewableItemsChanged = useRef(({ viewableItems }: any) => {
        if (viewableItems.length > 0) {
            setCurrentIndex(viewableItems[0].index);
        }
    }).current;

    const viewabilityConfig = useRef({
        viewAreaCoveragePercentThreshold: 50,
    }).current;

    const handleNext = async () => {
        if (currentIndex < OnboardingData.length - 1) {
            flatListRef.current?.scrollToIndex({
                index: currentIndex + 1,
                animated: true,
            });

            // for web
            if (Platform.OS === "web") {
                setCurrentIndex(currentIndex + 1);
            }
        } else {
            console.log("Navigate to Home");
            await completeOnboarding();
            router.replace("/(tabs)/home")
        }
    };

    return (
        <View style={styles.container}>
            <StatusBar
                translucent
                backgroundColor="transparent"
                barStyle="light-content"
            />

            {/* Animated Background */}
            {OnboardingData.map((item, index) => {
                const opacity = scrollX.interpolate({
                    inputRange: [
                        (index - 1) * width,
                        index * width,
                        (index + 1) * width,
                    ],
                    outputRange: [0, 1, 0],
                    extrapolate: "clamp",
                });

                return (
                    <Animated.Image
                        key={item.id}
                        source={{ uri: item.image }}
                        resizeMode="cover"
                        blurRadius={25}
                        style={[
                            StyleSheet.absoluteFillObject,
                            {
                                opacity,
                            },
                        ]}
                    />
                );
            })}

            {/* Dark Overlay */}
            <View style={styles.overlay} />

            {/* Pages */}
            <Animated.FlatList
                ref={flatListRef}
                data={OnboardingData}
                horizontal
                pagingEnabled
                showsHorizontalScrollIndicator={false}
                keyExtractor={(item) => item.id.toString()}
                renderItem={({ item }) => (
                    <View style={styles.page}>{item.content}</View>
                )}
                onScroll={Animated.event(
                    [{ nativeEvent: { contentOffset: { x: scrollX } } }],
                    { useNativeDriver: false }
                )}
                scrollEventThrottle={16}
                onViewableItemsChanged={onViewableItemsChanged}
                viewabilityConfig={viewabilityConfig}
            />

            {/* Bottom Controls */}
            <View style={styles.bottomContainer}>
                {/* Pagination */}
                <View style={styles.pagination}>
                    {OnboardingData.map((_, index) => {
                        const widthAnimation = scrollX.interpolate({
                            inputRange: [
                                (index - 1) * width,
                                index * width,
                                (index + 1) * width,
                            ],
                            outputRange: [8, 24, 8],
                            extrapolate: "clamp",
                        });

                        const opacity = scrollX.interpolate({
                            inputRange: [
                                (index - 1) * width,
                                index * width,
                                (index + 1) * width,
                            ],
                            outputRange: [0.4, 1, 0.4],
                            extrapolate: "clamp",
                        });

                        return (
                            <Animated.View
                                key={index}
                                style={[
                                    styles.dot,
                                    {
                                        width: widthAnimation,
                                        opacity,
                                    },
                                ]}
                            />
                        );
                    })}
                </View>

                <TouchableOpacity style={styles.button} onPress={handleNext}>
                    <Text style={styles.buttonText}>
                        {currentIndex === OnboardingData.length - 1
                            ? "Get Started"
                            : "Next"}
                    </Text>
                </TouchableOpacity>
            </View>
        </View>
    );
};

export default OnboardingScreen;

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: "#000",
        overflow: "hidden",
    },

    overlay: {
        ...StyleSheet.absoluteFillObject,
        backgroundColor: "rgba(0,0,0,0.35)",
    },

    page: {
        width,
        height,
        justifyContent: "center",
        alignItems: "center",
    },

    bottomContainer: {
        position: "absolute",
        bottom: 50,
        left: 20,
        right: 20,
    },

    pagination: {
        flexDirection: "row",
        justifyContent: "center",
        marginBottom: 30,
    },

    dot: {
        height: 8,
        borderRadius: 4,
        backgroundColor: "#fff",
        marginHorizontal: 4,
    },

    button: {
        alignSelf: "center",
        backgroundColor: "#fff",
        paddingHorizontal: 35,
        paddingVertical: 14,
        borderRadius: 30,
    },

    buttonText: {
        color: "#000",
        fontWeight: "600",
        fontSize: 16,
    },
});