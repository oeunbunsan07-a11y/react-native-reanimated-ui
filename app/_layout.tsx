import { OnboardingProvider, useOnboarding } from "@/src/features/onboarding/providers/onboarding-provider";
import { CusBottomSheetProvider } from "@/src/shared/providers/cus-bottom-sheet-provider";
import { Stack } from "expo-router";
import { GestureHandlerRootView } from "react-native-gesture-handler";

const App = () => {
  const { hasSeen, loading } = useOnboarding();

  if (loading) {
    return null; // or your splash screen
  }

  return (
    <>
      <Stack screenOptions={{ headerShown: false }}>
        <Stack.Protected guard={!hasSeen}>
          <Stack.Screen name="onboarding" />
        </Stack.Protected>

        <Stack.Protected guard={hasSeen}>
          <Stack.Screen name="(tabs)" />
        </Stack.Protected>
      </Stack>
    </>
  )

}

export default function RootLayout() {
  return <>
    <GestureHandlerRootView style={{ flex: 1 }}>
      <CusBottomSheetProvider>
        <OnboardingProvider>
          <App />
          {/* <FloatingPlayer
            imageUrl="https://cdna.artstation.com/p/assets/images/images/100/439/826/large/tai-le-1.jpg"
            title="Midnight Dreams"
            subtitle="Album: Starlight"
            artist="Aurora Waves"
            isPlaying={true}
            onNext={() => console.log('Next')}
            onPrevious={() => console.log('Previous')}
            duration="4:32"
            progress={0.45}
          /> */}
        </OnboardingProvider>
      </CusBottomSheetProvider>
    </GestureHandlerRootView>
  </>
}
