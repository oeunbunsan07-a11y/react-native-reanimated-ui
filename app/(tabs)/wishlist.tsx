import { BottomSheetRefProps } from '@/src/shared/components/my-bottom-sheet';
import FloatingPlayer from '@/src/shared/components/songs/floating-player';
import React, { useCallback, useRef } from 'react';
import { Button, Text, View } from 'react-native';

const WishList = () => {
  const ref : any = useRef<BottomSheetRefProps>(null);
  const onPress = useCallback(() => {
    if (ref.current?.isActive()) {
      ref.current.scrollTo(0); // close
    } else {
      ref.current.scrollTo(-200); // open
    }
  }, []);
  return (
    <View style={{ marginTop: 50 }}>
      <Text>WishList</Text>

      <Button onPress={onPress} title='Open Bottom Sheet'></Button>

      <FloatingPlayer ref={ref} />
    </View>
  )
}

export default WishList