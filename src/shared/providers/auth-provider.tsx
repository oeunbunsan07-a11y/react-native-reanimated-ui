import * as SecureStore from "expo-secure-store";
import React, { createContext, useContext, useEffect, useState } from 'react';



// 2. Create the Context Reference Hook
const AuthContext = createContext<undefined>(undefined);

export function AppSettingsProvider({ children }: { children: React.ReactNode }) {
    const [settings, setSettings] = useState<AppSettings>(defaultSettings);
    const [isLoadingSettings, setIsLoadingSettings] = useState<boolean>(true);

    // Load preferences from flash storage on mount
    useEffect(() => {
        async function loadSettings() {
            try {
                const storedData = await SecureStore.getItem(STORAGE_KEY);
                if (storedData) {
                    setSettings(JSON.parse(storedData));
                }
            } catch (error) {
                console.error('Failed to load player configurations from storage:', error);
            } finally {
                setIsLoadingSettings(false);
            }
        }
        loadSettings();
    }, []);

    // Helper method to update state slice and persist to storage atomized
    const saveSettingsUpdate = async (updatedFields: Partial<AppSettings>) => {
        try {
            const newSettings = { ...settings, ...updatedFields };
            setSettings(newSettings);
            await SecureStore.setItem(STORAGE_KEY, JSON.stringify(newSettings));
        } catch (error) {
            console.error('Failed to save settings chunk updates:', error);
        }
    };

    // 3. Define Controller Actions
    const updateTheme = async (theme: ThemeMode) => {
        await saveSettingsUpdate({ theme });
    };

    const updateAudioQuality = async (audioQuality: AudioQuality) => {
        await saveSettingsUpdate({ audioQuality });
    };

    const toggleDownloadOverWifi = async () => {
        await saveSettingsUpdate({ downloadOverWifiOnly: !settings.downloadOverWifiOnly });
    };

    const toggleDataSaver = async () => {
        // If turning on data saver, drop quality settings dynamically to optimize network payload
        const nextDataSaverState = !settings.dataSaverMode;
        await saveSettingsUpdate({
            dataSaverMode: nextDataSaverState,
            audioQuality: nextDataSaverState ? 'low' : 'high',
        });
    };

    return (
        <AppSettingsContext.Provider
            value={{
                ...settings,
                updateTheme,
                updateAudioQuality,
                toggleDownloadOverWifi,
                toggleDataSaver,
                isLoadingSettings,
            }}
        >
            {children}
        </AppSettingsContext.Provider>
    );
}

// 4. Create a Clean Execution Hook
export function useAppSettings() {
    const context = useContext(AppSettingsContext);
    if (!context) {
        throw new Error('useAppSettings must be wrapped completely inside an <AppSettingsProvider />');
    }
    return context;
}
