import FloatingPlayer from "@/src/features/home/components/floating-player";
import { forwardRef } from 'react';
import { Dimensions, Image, StyleSheet, View } from 'react-native';
import { Gesture, GestureDetector } from 'react-native-gesture-handler';
import Animated, {
    Extrapolate,
    interpolate,
    useAnimatedStyle,
    useSharedValue,
    withSpring,
} from 'react-native-reanimated';

const { height: SCREEN_HEIGHT } = Dimensions.get('window');

const MIN_HEIGHT = 80; // mini player
const MAX_HEIGHT = SCREEN_HEIGHT; // full screen

const LearnBottom = forwardRef((_, ref) => {
    const height = useSharedValue(MIN_HEIGHT);
    const context = useSharedValue({ height: MIN_HEIGHT });

    // -------------------------
    // Gesture (drag up/down)
    // -------------------------
    const gesture = Gesture.Pan()
        .onStart(() => {
            context.value = { height: height.value };
        })
        .onUpdate((event) => {
            const next = context.value.height - event.translationY;

            // clamp between mini and full
            height.value = Math.max(MIN_HEIGHT, Math.min(next, MAX_HEIGHT));
        })
        .onEnd(() => {
            const shouldExpand = height.value > SCREEN_HEIGHT * 0.5;

            height.value = withSpring(
                shouldExpand ? MAX_HEIGHT : MIN_HEIGHT,
                { damping: 100 }
            );
        });

    // -------------------------
    // Container animation
    // -------------------------
    const containerStyle = useAnimatedStyle(() => {
        return {
            height: height.value,
            borderTopLeftRadius: interpolate(
                height.value,
                [MIN_HEIGHT, MAX_HEIGHT],
                [50, 0],
                Extrapolate.CLAMP
            ),
            borderTopRightRadius: interpolate(
                height.value,
                [MIN_HEIGHT, MAX_HEIGHT],
                [50, 0],
                Extrapolate.CLAMP
            ),
        };
    });

    // -------------------------
    // Header fade + collapse
    // -------------------------
    const headerStyle = useAnimatedStyle(() => {
        const opacity = interpolate(
            height.value,
            [MIN_HEIGHT, MIN_HEIGHT + 200],
            [1, 0],
            Extrapolate.CLAMP
        );

        const scale = interpolate(
            height.value,
            [MIN_HEIGHT, MIN_HEIGHT + 200],
            [1, 0.8],
            Extrapolate.CLAMP
        );

        return {
            opacity,
            transform: [{ scale }],
        };
    });

    // -------------------------
    // UI
    // -------------------------
    return (
        <GestureDetector gesture={gesture}>
            <Animated.View style={[styles.container, containerStyle]}>

                {/* Mini Player Header (Spotify bar) */}
                <Animated.View style={[styles.header, headerStyle]}>
                    {/* <Text style={{ color: 'white' }}>🎵 Mini Player</Text> */}
                    <FloatingPlayer
                        imageUrl="https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg"
                        title="Midnight Dreams"
                        subtitle="Album: Starlight"
                        artist="Aurora Waves"
                        isPlaying={true}
                        onNext={() => console.log('Next')}
                        onPrevious={() => console.log('Previous')}
                        duration="4:32"
                        progress={0.45}
                    />
                </Animated.View>

                {/* Full content */}
                <View style={styles.content}>
                    <View style={{ width : 150, height : 150, backgroundColor : "red", borderRadius : 100, overflow : "hidden"}}>
                        <Image style={{ flex : 1 }} source={{ uri : "https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg"}} />
                    </View>
                </View>

            </Animated.View>
        </GestureDetector>
    );
});

const styles = StyleSheet.create({
    container: {
        position: 'absolute',
        bottom: 0,
        width: '100%',
        backgroundColor: '#00ddff9f', // Spotify green
        overflow: 'hidden',
    },

    header: {
        height: 80,
        width: '100%',
        justifyContent: 'center',
        alignItems: 'center',
    },

    content: {
        flexDirection : "row",
        justifyContent : "center",
    },
});

export default LearnBottom;