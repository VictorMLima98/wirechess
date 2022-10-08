/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        'text-black',
        'text-white',
        'bg-black',
        'bg-white',
        'hover:bg-black/50',
        'hover:bg-white/50'
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
