import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
                quicksand: ["Quicksand", "sans-serif"],
                nunito: ["Nunito", "sans-serif"],
                ubuntu: ["Lobster Two", "sans-serif"],
                manrop: ["Manrope", "sans-serif"],
            },
            backgroundColor: {
                Abu1: "#D5E4E6",
                Abu2: "#F5F9F9",
                Oldgreen: "#47878E",
                darkbg: "#016A70",
            },
            colors: {
                Oldgreen: "#47878E",
                bluebg: "#F5F7FF",
                navi: "#0B2447",
                darkbg: "#016A70",
            },
            animation: {
                fadeIn: "fadeIn 0.8s ease-out",
                bounce2: "bounce2 1s infinite",
            },
            keyframes: {
                fadeIn: {
                    "0%": {
                        opacity: "0.3",
                        transform: "translateY(20px)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
                bounce2: {
                    "0%": {
                        transform: "translateY(-50px)",
                    },
                    "50%": {
                        transform: "translateY(0px)",
                    },
                    "100%": {
                        transform: "translateY(-50px)",
                    },
                },
            },
            boxShadow: {
                relap: "16px 16px 48px 0px rgba(0, 0, 0, 0.1)",
                relap2: "16px 16px 48px 0px rgba(0, 0, 0, 0.4)",
            },
        },
    },

    plugins: [require("daisyui"), forms],
};
