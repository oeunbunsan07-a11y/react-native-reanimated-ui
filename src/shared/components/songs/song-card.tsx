import Entypo from '@expo/vector-icons/Entypo';
import React from 'react';
import { Pressable, StyleSheet, Text, View } from 'react-native';
import Ripple from 'react-native-material-ripple';

// 1. Define flexible props for the song data and actions
interface SongCardProps {
  title: string;
  artist: string;
  imageUrl?: string; // Optional: for when you add remote network images later
  onCardPress: () => void;
  onMenuPress: () => void;
}

const SongCard = ({ title, artist, imageUrl, onCardPress, onMenuPress }: SongCardProps) => {
  return (
    // 2. Fixed: Changed main View to Pressable so the whole row is clickable
    <Ripple rippleFades={true} onPress={onCardPress} style={styles.cardContainer}>
      
      {/* Thumbnail Placeholder */}
      <View style={styles.thumbnail} />

      {/* Metadata Container */}
      <View style={styles.textContainer}>
        <Text numberOfLines={1} style={styles.titleText}>{title}</Text>
        <Text numberOfLines={1} style={styles.artistText}>{artist}</Text>
      </View>

      {/* Options Menu Icon */}
      <Pressable 
        onPress={(e) => {
          e.stopPropagation(); // Prevents the main card press from triggering
          onMenuPress();
        }}
        hitSlop={12} // Makes the small icon easier to tap
        style={styles.menuButton}
      >
        <Entypo name="dots-three-horizontal" size={20} color="#666" />
      </Pressable>

    </Ripple>
  );
};

const styles = StyleSheet.create({
  cardContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    paddingVertical: 10,
    paddingHorizontal: 16,
    backgroundColor: '#fff',
  },
  thumbnail: {
    width: 52,
    height: 52,
    backgroundColor: '#E0E0E0',
    borderRadius: 8, // Standard UI design uses smaller rounding for thumbnails
  },
  textContainer: {
    flex: 1, // Takes up remaining horizontal space
    marginLeft: 14,
    justifyContent: 'center',
    marginRight: 10,
  },
  titleText: {
    fontSize: 16,
    fontWeight: '600',
    color: '#111',
    marginBottom: 4,
  },
  artistText: {
    fontSize: 14,
    color: '#666',
  },
  menuButton: {
    padding: 4,
    position : 'relative',
  },
});

export default SongCard;
