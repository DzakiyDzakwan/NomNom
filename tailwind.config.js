/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    theme: {
        // extend: {
        //     colors: {
        //         primary: colors.indigo,
        //         secondary: colors.gray,
        //         positive: colors.emerald,
        //         negative: colors.red,
        //         warning: colors.amber,
        //         info: colors.blue
        //     },
        // },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
    ],
}

