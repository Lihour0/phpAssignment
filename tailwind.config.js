/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            Monsterrat: ["Montserrat", "sans-serif"],
        },
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
