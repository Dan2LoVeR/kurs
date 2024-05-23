/** @type {import('tailwindcss').Config} */
export default {
    content: {
        files: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
            "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
            "./src/*.{html,js}",
        ],
        relative: true,
        transform: (content) => content.replace(/taos:/g, ""),
    },

    theme: {
        extend: {},
    },
    plugins: [require("taos/plugin")],

    safelist: [
        "!duration-0",
        "!delay-0",
        'html.js :where([class*="taos:"]:not(.taos-init))',
    ],
};
