/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/wireui/wireui/resources/**/*.blade.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php",
    ],
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
    theme: {
        fontFamily: {
            'serif': ['Noto Serif', 'Georgia'],
        },
        fill: theme => ({
            'gray': theme('colors.gray.400'),
            'red': theme('colors.red.500'),
            'green': theme('colors.green.500'),
            'blue': theme('colors.blue.500'),
            'yellow': theme('colors.yellow.500'),
            'primary' : theme('colors.primary.500'),
        })
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
    variants: {
        extend: {
            display: ['group-focus']
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/typography"),
        function ({ addComponents }) {
            addComponents({
                ".card": {
                    padding: "0.5rem 1rem",
                    display: "block",
                    width: "160px",
                    borderRadius: "10px",
                    boxShadow: "2px 2px 10px 5px rgb(0, 0, 0, 0.025)",
                    backgroundColor: "#FFFF",
                    "@screen md": {
                        width: "310px",
                        padding: "1rem 1.5rem",
                    },
                },
                ".card-header": {
                    textAlign: "left",
                },
                ".card-body": {
                    backgroundColor: "#F0F0F0",
                },
                // ".image-container": {
                //     width: "128px",
                //     height: "128px",
                //     display: "flex",
                //     "@screen md": {
                //         width: "262px",
                //         height: "262px",
                //     },
                // },
                // ".image-card": {
                //     width: "64px",
                //     height: "64px",
                //     "@screen md": {
                //         width: "128px",
                //         height: "128px",
                //     },
                // },
                ".btn": {
                    padding: "0.5rem 4rem",
                    textAlign: "center",
                    width: "fit-content",
                    fontSize: "18px",
                    borderRadius: "50px",
                    backgroundColor: "@screen md",
                },
            });
        },
    ],
};
