import { router } from "expo-router";
import { useEffect } from "react";
import { OnboardingStorage } from "../storage";

const OnboardingGuard = ({ children }: any) => {
    useEffect(() => {
        const load = async () => {
            const seen = await OnboardingStorage.hasSeen();

            if (!seen) {
                router.replace("/onboarding")
            }
        };

        load();
    }, []);
    return children;
}

export default OnboardingGuard