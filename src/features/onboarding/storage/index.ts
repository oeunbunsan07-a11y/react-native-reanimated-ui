import * as SecureStore from "expo-secure-store";
import { Platform } from "react-native";

const KEY = "hasSeenOnboarding";

export const OnboardingStorage = {
    async hasSeen() {
        try {
            if (Platform.OS === "web") {
                return localStorage.getItem(KEY) === "true";
            }

            const value = await SecureStore.getItemAsync(KEY);
            return value === "true";
        } catch {
            return false;
        }
    },

    async markAsSeen() {
        try {
            if (Platform.OS === "web") {
                localStorage.setItem(KEY, "true");
                return;
            }

            await SecureStore.setItemAsync(KEY, "true");
        } catch (error) {
            console.log(error);
        }
    },

    async reset() {
        try {
            if (Platform.OS === "web") {
                localStorage.removeItem(KEY);
                return;
            }

            await SecureStore.deleteItemAsync(KEY);
        } catch (error) {
            console.log(error);
        }
    },
};


// import * as SecureStore from "expo-secure-store";
// import { Platform } from "react-native";

// const KEY = "hasSeenOnboarding";

// export const onBoardingStorage = {
//     async setHasSeen(value: string) {
//         if (Platform.OS === "web") {
//             localStorage.setItem(KEY, value);
//             return;
//         }

//         await SecureStore.setItemAsync(KEY, value);
//     },

//     async getHasSeen() {
//         try {
//             if (Platform.OS === "web") {
//                 return localStorage.getItem(KEY) === "true";
//             }

//             const value = await SecureStore.getItemAsync(KEY);
//             return value === "true";
//         } catch {
//             return false;
//         }
//     },

//     async reset() {
//         if (Platform.OS === "web") {
//             localStorage.removeItem(KEY);
//             return;
//         }

//         await SecureStore.deleteItemAsync(KEY);
//     }
// }