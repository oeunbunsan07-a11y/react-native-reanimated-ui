import PaddingContainer from '@/src/shared/layouts/padding-container';
import SafeAreaContainer from '@/src/shared/layouts/safe-area-container';
import { TouchableWithoutFeedback } from '@gorhom/bottom-sheet';
import { router } from 'expo-router';
import React from 'react';
import { Image, Text, TouchableOpacity, View } from 'react-native';

const imageUri = "https://res.cloudinary.com/dwclqc9ao/image/upload/fl_preserve_transparency/v1779776614/production_uploads/bwijozuydbgdegxqlfnr.jpg?_s=public-apps"


const ProfileScreen = () => {
    const handlePhotoPress = () => {
        // Encodes slashes and colons so it transmits cleanly through the router context
        const encodedImageUri = encodeURIComponent(imageUri);
        // @ts-ignore
        router.push(`/photo/${encodedImageUri}`);
    };
    return (
        <SafeAreaContainer>
            <PaddingContainer>
                <View style={{ flex: 1 }}>
                    <Text>Settings</Text>

                    <View style={{ flexDirection: "row", justifyContent: "space-between", alignItems: "center" }}>
                        <View style={{ flexDirection : "row", alignItems : "center", gap : 16}}>
                            <TouchableOpacity onPress={handlePhotoPress} style={{ width: 50, height: 50, borderRadius: 100, overflow: "hidden" }}>
                                <Image style={{ flex: 1 }} source={{ uri: imageUri }} resizeMode='contain' />
                            </TouchableOpacity>

                            <View>
                                <Text>Welcome</Text>
                                <Text>Bunsan Oeun</Text>
                            </View>
                        </View>

                        <TouchableWithoutFeedback>
                            <Text>Out</Text>
                        </TouchableWithoutFeedback>
                    </View>
                </View>
            </PaddingContainer>
        </SafeAreaContainer>
    )
}

export default ProfileScreen