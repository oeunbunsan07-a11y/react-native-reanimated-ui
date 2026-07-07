import React from 'react'
import { SafeAreaView } from 'react-native-safe-area-context'

const SafeAreaContainer = ({ children }: any) => {
    return <SafeAreaView style={{ flex: 1 }} edges={['top']}>
        {children}
    </SafeAreaView>
}

export default SafeAreaContainer