import React from 'react';
import { FlatList, StyleSheet, View } from 'react-native';
// 1. Imported useNavigation hook to fix the navigation crash

import HeaderTop from '@/src/shared/components/songs/header-top';
import SongCard from '@/src/shared/components/songs/song-card';
import { useCusBottomSheet } from '@/src/shared/providers/cus-bottom-sheet-provider';
import { router } from 'expo-router';

const dummySongs = [
    { id: '1', title: 'Pink + White', artist: 'Frank Ocean' },
    { id: '2', title: 'Blinding Lights', artist: 'The Weeknd' },
    { id: '3', title: 'Starboy', artist: 'The Weeknd' },
    { id: '4', title: 'Pink + White', artist: 'Frank Ocean' },
    { id: '5', title: 'Blinding Lights', artist: 'The Weeknd' },
    { id: '6', title: 'Starboy', artist: 'The Weeknd' },
    { id: '7', title: 'Pink + White', artist: 'Frank Ocean' },
    { id: '8', title: 'Blinding Lights', artist: 'The Weeknd' },
    { id: '9', title: 'Starboy', artist: 'The Weeknd' },
];

const PlaylistSect = () => {
    const { openBottomSheet } = useCusBottomSheet(); // 2. Using the custom bottom sheet context to manage snap actions

    return (
        // 3. Changed layout to use structural flex styles below
        <View style={styles.container}>

            <HeaderTop
                title="Popular Songs"
                onPressSeeAll={() => router.push("/oppa")}
            />

            <FlatList
                data={dummySongs}
                showsVerticalScrollIndicator={false}
                keyExtractor={(item) => item.id}
                contentContainerStyle={styles.listContent}
                renderItem={({ item }) => (
                    <SongCard
                        title={item.title}
                        artist={item.artist}
                        onCardPress={() => router.push("/music")}
                        onMenuPress={() => {
                            openBottomSheet(["Add to Playlist", "Share", "View Artist"]); // Opens the bottom sheet with options
                        }}
                    />
                )}
            />

        </View>
    );
};

const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    listContent: {
        paddingBottom: 100, // Leaves empty safe scrolling padding space above the closed sheet
    },
});

export default PlaylistSect;
