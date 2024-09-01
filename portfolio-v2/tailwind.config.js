/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            textShadow: {
                sm: "1px 1px 2px rgba(0, 0, 0, 0.25)",
                md: "2px 2px 4px rgba(0, 0, 0, 0.25)",
                lg: "4px 4px 8px rgba(255, 255, 255, 0.25)",
                lg2: "4px 4px 8px rgba(56, 189, 248, 0.25)",
                lg3: "4px 4px 8px rgba(251, 191, 36, 0.25)",
                xl: "6px 6px 12px rgba(0, 0, 0, 0.25)",
            },
            keyframes: {
                colorChange: {
                    "0%, 100%": { color: "#7dd3fc !important" },
                    "33%": { color: "#fde047 !important" },
                    "66%": { color: "#ffffff !important" },
                },
                marquee: {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
            animation: {
                marquee: "marquee 15s linear infinite",
                "bounce-slow": "bounce 5s linear infinite",
                "bounce-mid": "bounce 3s linear infinite",
            },
            fontFamily: {
                primary: ["Archivo Black"],
            },
            grayscale: {
                0: "0%",
                10: "10%",
                20: "20%",
                30: "30%",
                50: "50%",
                100: "100%",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
        require("tailgrids/plugin"),
        require("daisyui"),
        require("tailwindcss-textshadow"),
        function ({ addUtilities }) {
            addUtilities({
                ".text-shadow-sm": {
                    textShadow: "1px 1px 2px rgba(0, 0, 0, 0.25)",
                },
                ".text-shadow-md": {
                    textShadow: "2px 2px 4px rgba(0, 0, 0, 0.25)",
                },
                ".text-shadow-lg-yellow": {
                    textShadow: "4px 4px 8px rgba(251, 191, 36, 0.25)",
                },
                ".text-shadow-lg-white": {
                    textShadow: "4px 4px 8px rgba(255, 255, 255, 0.25)",
                },
                ".text-shadow-lg-sky": {
                    textShadow: "4px 4px 8px rgba(56, 189, 248, 0.25)",
                },
                ".text-shadow-xl": {
                    textShadow: "6px 6px 12px rgba(0, 0, 0, 0.25)",
                },
                ".text-shadow-none": {
                    textShadow: "none",
                },
            });
        },
    ],
};
