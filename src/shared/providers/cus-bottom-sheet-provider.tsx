import {
  BottomSheetBackdrop,
  BottomSheetBackdropProps,
  BottomSheetModal,
  BottomSheetModalProvider,
  BottomSheetVirtualizedList
} from '@gorhom/bottom-sheet';
import React, { createContext, useCallback, useContext, useEffect, useMemo, useRef, useState } from 'react';
import { BackHandler, StyleSheet, Text, View } from 'react-native'; // 1. Imported BackHandler

interface BottomSheetContextType {
  openBottomSheet: (data: string[]) => void;
  closeBottomSheet: () => void;
}

const BottomSheetContext = createContext<BottomSheetContextType | undefined>(undefined);

export const CusBottomSheetProvider = ({ children }: { children: React.ReactNode }) => {
  const sheetRef = useRef<BottomSheetModal>(null);
  const [sheetData, setSheetData] = useState<string[]>([]);

  // 2. State to track sheet visibility specifically for the hardware listener
  const [isModalVisible, setIsModalVisible] = useState(false);

  const snapPoints = useMemo(() => ["25%", "50%", "90%"], []);

  const openBottomSheet = useCallback((data: string[]) => {
    setSheetData(data);
    sheetRef.current?.present();
    setIsModalVisible(true);
  }, []);

  const closeBottomSheet = useCallback(() => {
    sheetRef.current?.dismiss();
    setIsModalVisible(false);
  }, []);

  // 3. Hardware Back Press Hook integration
  useEffect(() => {
    const handleBackButton = () => {
      if (isModalVisible) {
        closeBottomSheet(); // Dismisses modal cleanly
        return true;       // Intercepts the back action (prevents app from closing)
      }
      return false;        // Standard back action for screen navigation
    };

    const subscription = BackHandler.addEventListener("hardwareBackPress", handleBackButton);

    return () => {
      subscription.remove(); // Clean up listener safely using standard modern API
    };
  }, [isModalVisible, closeBottomSheet]);

  // 4. Callback to update state if users close via swipe down or backdrop tap
  const handleModalChange = useCallback((index: number) => {
    if (index === -1) {
      setIsModalVisible(false);
    }
  }, []);

  const renderBackdrop = useCallback(
    (props: BottomSheetBackdropProps) => (
      <BottomSheetBackdrop
        {...props}
        appearsOnIndex={0}
        disappearsOnIndex={-1}
        pressBehavior="close"
        opacity={0.5}
      />
    ),
    []
  );

  const renderItem = useCallback(
    ({ item }: { item: string }) => (
      <View style={styles.itemContainer}>
        <Text style={styles.itemText}>{item}</Text>
      </View>
    ),
    []
  );

  return (
    <BottomSheetContext.Provider value={{ openBottomSheet, closeBottomSheet }}>
      <BottomSheetModalProvider>
        {children}

        <BottomSheetModal
          ref={sheetRef}
          snapPoints={snapPoints}
          enableDynamicSizing={false}
          onChange={handleModalChange} // 5. Added tracking connection here
          backdropComponent={renderBackdrop}
          enablePanDownToClose={true}
        >
          <BottomSheetVirtualizedList
            data={sheetData}
            keyExtractor={(item) => item}
            getItemCount={(items) => items.length}
            getItem={(items, index) => items[index]}
            renderItem={renderItem}
            contentContainerStyle={styles.contentContainer}
          />
        </BottomSheetModal>
      </BottomSheetModalProvider>
    </BottomSheetContext.Provider>
  );
};

export const useCusBottomSheet = () => {
  const context = useContext(BottomSheetContext);
  if (!context) {
    throw new Error('useCusBottomSheet must be used within a CusBottomSheetProvider');
  }
  return context;
};

const styles = StyleSheet.create({
  contentContainer: {
    backgroundColor: "white",
  },
  itemContainer: {
    padding: 12,
    marginHorizontal: 16,
    marginVertical: 6,
    backgroundColor: "#f5f5f5",
    borderRadius: 8,
  },
  itemText: {
    fontSize: 16,
  }
});
