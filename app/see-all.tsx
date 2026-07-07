import React, { useCallback, useRef } from 'react';
import { Button } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';

import FloatingPlayer, {
  BottomSheetRefProps,
} from "@/src/shared/components/songs/floating-player";

const HomeScreen = () => {
  const playerRef : any = useRef<BottomSheetRefProps>(null);

  const onTogglePlayer = useCallback(() => {
    if (playerRef.current?.isActive()) {
      playerRef.current.scrollTo(0); // Hide
    } else {
      playerRef.current.scrollTo(0); // Show
    }
  }, []);

  return (
    <SafeAreaView style={{ flex: 1 }}>
      <Button
        title="Toggle Player"
        onPress={onTogglePlayer}
      />

      <FloatingPlayer ref={playerRef} />
    </SafeAreaView>
  );
};

export default HomeScreen;