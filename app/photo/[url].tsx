import { ImageZoom } from '@likashefqet/react-native-image-zoom';
import { router, useLocalSearchParams } from 'expo-router';
import React, { useState } from 'react';
import { ActivityIndicator, Alert, StyleSheet, Text, TouchableOpacity, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';

// Modern SDK 54+ Object-Oriented Filesystem Imports
import { File, Paths } from 'expo-file-system';
import * as Sharing from 'expo-sharing';

export default function PhotoDetails() {
    const { url } = useLocalSearchParams<{ url: string }>();
    const decodedImageUri = decodeURIComponent(url || '');

    // UI tracking state for the download loader indicator
    const [isSharing, setIsSharing] = useState(false);

    // Modern download and file sharing handler with proper target overwrite/uniqueness resolution
    const handleShareProfileImage = async () => {
        if (!decodedImageUri) {
            Alert.alert("Error", "No image link found to share.");
            return;
        }

        const isSharingAvailable = await Sharing.isAvailableAsync();
        if (!isSharingAvailable) {
            Alert.alert("Error", "Sharing raw files is not supported on this platform.");
            return;
        }

        try {
            setIsSharing(true);

            // 1. Extract file extension (.jpg, .png) or default to png
            const fileExtension = decodedImageUri.split('.').pop()?.split('?')[0] || 'png';

            // 2. Formulate a unique dynamic filename string
            const uniqueFileName = `shared_image_${Date.now()}.${fileExtension}`;

            // 3. FIX: Create an explicit, completely unique local target File instance object.
            // Passing a specific target File path directly overrides the URL auto-inference.
            const targetFile = new File(Paths.cache, uniqueFileName);

            // 4. Download the asset using the explicit destination target File instance
            const downloadedFile = await File.downloadFileAsync(decodedImageUri, targetFile);

            // 5. Pass the unique local file URI path to the share dialog sheet
            await Sharing.shareAsync(downloadedFile.uri, {
                dialogTitle: 'Share Raw Photo File',
                mimeType: `image/${fileExtension === 'jpg' ? 'jpeg' : fileExtension}`,
            });

        } catch (error: any) {
            Alert.alert("Sharing Failed", "Could not download and share the media file.");
            console.error(error);
        } finally {
            setIsSharing(false);
        }
    };

    return (
        <View style={styles.container}>
            <SafeAreaView style={styles.headerContainer}>
                <View style={styles.headerRow}>
                    {/* Close Button */}
                    <TouchableOpacity
                        style={styles.actionButton}
                        onPress={() => router.dismiss()}
                        activeOpacity={0.7}
                        disabled={isSharing}
                    >
                        <Text style={styles.actionText}>Close</Text>
                    </TouchableOpacity>

                    {/* Share Action Trigger Button */}
                    <TouchableOpacity
                        style={styles.actionButton}
                        onPress={handleShareProfileImage}
                        activeOpacity={0.7}
                        disabled={isSharing}
                    >
                        {isSharing ? (
                            <ActivityIndicator size="small" color="#fff" />
                        ) : (
                            <Text style={styles.actionText}>Share</Text>
                        )}
                    </TouchableOpacity>
                </View>
            </SafeAreaView>

            {decodedImageUri ? (
                <ImageZoom
                    source={{ uri: decodedImageUri }}
                    style={styles.fullImage}
                    resizeMode="contain"
                />
            ) : (
                <Text style={styles.errorText}>No Image Found</Text>
            )}
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#000000', // Pure black immersive layout matching media viewers
    },
    headerContainer: {
        position: 'absolute',
        top: 0,
        left: 0,
        right: 0,
        zIndex: 10,
    },
    headerRow: {
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
        paddingHorizontal: 16,
        marginTop: 10,
    },
    actionButton: {
        paddingHorizontal: 16,
        paddingVertical: 10,
        backgroundColor: 'rgba(255, 255, 255, 0.2)',
        borderRadius: 20,
        minWidth: 80,
        alignItems: 'center',
    },
    actionText: {
        color: '#fff',
        fontWeight: '600',
        fontSize: 15,
    },
    fullImage: {
        flex: 1,
        width: '100%',
    },
    errorText: {
        color: '#fff',
        textAlign: 'center',
        marginTop: 100,
    }
});
