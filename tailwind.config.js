import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/welcome.blade.php",
        "./resources/views/auth/*.blade.php",
    ],

    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#FBFFCF",

                    secondary: "#f000b8",

                    accent: "#22c55e",

                    neutral: "#2b3440",

                    "base-100": "#ffffff",

                    info: "#3abff8",

                    success: "#36d399",

                    warning: "#B8AE52",

                    error: "#f87272",
                },
            },
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        typography,
        require("daisyui"),
        require("flowbite/plugin"),
    ],
};
