// providers/onboarding-provider.tsx
import React, {
  createContext,
  useCallback,
  useContext,
  useEffect,
  useMemo,
  useState,
} from "react";
import { OnboardingStorage } from "../storage/index";

type OnboardingContextType = {
  loading: boolean;
  hasSeen: boolean;
  completeOnboarding: () => Promise<void>;
  resetOnboarding: () => Promise<void>;
  refresh: () => Promise<void>;
};

const OnboardingContext = createContext<OnboardingContextType | null>(null);

export function OnboardingProvider({
  children,
}: {
  children: React.ReactNode;
}) {
  const [loading, setLoading] = useState(true);
  const [hasSeen, setHasSeen] = useState(false);

  const refresh = useCallback(async () => {
    setLoading(true);

    try {
      const value = await OnboardingStorage.hasSeen();
      setHasSeen(value);
    } finally {
      setLoading(false);
    }
  }, []);

  useEffect(() => {
    refresh();
  }, [refresh]);

  const completeOnboarding = useCallback(async () => {
    await OnboardingStorage.markAsSeen();
    setHasSeen(true);
  }, []);

  const resetOnboarding = useCallback(async () => {
    await OnboardingStorage.reset();
    setHasSeen(false);
  }, []);

  const value = useMemo(
    () => ({
      loading,
      hasSeen,
      completeOnboarding,
      resetOnboarding,
      refresh,
    }),
    [loading, hasSeen, completeOnboarding, resetOnboarding, refresh]
  );

  return (
    <OnboardingContext.Provider value={value}>
      {children}
    </OnboardingContext.Provider>
  );
}

export function useOnboarding() {
  const context = useContext(OnboardingContext);

  if (!context) {
    throw new Error(
      "useOnboarding must be used inside an OnboardingProvider."
    );
  }

  return context;
}