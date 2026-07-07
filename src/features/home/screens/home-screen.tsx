import PaddingContainer from '@/src/shared/layouts/padding-container'
import React from 'react'
import { Image, StatusBar, View } from 'react-native'
import PlaylistSect from '../sections/playlist-sect'
import PopularSongSect from '../sections/popular-song-sect'

const imageUrl = "https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg?1782911641"

const HomeScreen = () => {

    return (
        <>
            <StatusBar barStyle={"light-content"} backgroundColor={"transparent"} translucent={true} />
            <View style={{ width: '100%', height: 200, backgroundColor: "red" }}>

                <Image style={{ flex: 1, objectFit: "cover" }} source={{ uri: imageUrl }} />
            </View>
            <View style={{ flex: 1, backgroundColor: "#fff" }}>
                <PaddingContainer>
                    <PopularSongSect />
                    <PlaylistSect />
                </PaddingContainer>
            </View>
        </>
    )
}

export default HomeScreen