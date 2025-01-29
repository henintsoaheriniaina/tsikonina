/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                baseWhite: "#fefefe",
                baseOrange: {
                    dark: "#c13d00",
                    light: "#f05423",
                },
                baseBlack: "#121212",
                baseGray: {
                    dark: "#adadad",
                    light: "#f1f1f1",
                },
            },
            fontFamily: {
                sand: ["Quicksand", "sans-serif"],
                "opens-sans": ["OpenSans", "sans-serif"],
            },
            backgroundImage: {
                hero: "url('../../public/images/heroBg2.png')",
            },
            extend: {
                backgroundColor: ["active"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
