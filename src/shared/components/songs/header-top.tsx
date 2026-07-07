import React from 'react';
import { StyleSheet, Text, TouchableOpacity, View } from 'react-native';

// Define the props for the HeaderTop component;
interface HeaderTopProps {
    title: string;
    onPressSeeAll: () => void;
    showSeeAll?: boolean;
};

const HeaderTop = ({ title, onPressSeeAll, showSeeAll = true }: HeaderTopProps) => {
    return (
        <View style={styles.container}>
            <Text style={styles.title}>{title}</Text>

            {showSeeAll && (
                <TouchableOpacity onPress={onPressSeeAll} activeOpacity={0.7}>
                    <Text style={styles.seeAllText}>See All</Text>
                </TouchableOpacity>
            )}
        </View>
    )
};

const styles = StyleSheet.create({
    container: {
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
        paddingHorizontal: 16,
        paddingVertical: 12,
    },
    title: {
        fontSize: 18,
        fontWeight: 'bold',
        color: '#000000',
    },
    seeAllText: {
        fontSize: 14,
        color: '#007AFF', // Standard iOS blue link color
    },
})

export default HeaderTop;