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
    fontFamily: {
        'sans': ['Pontano Sans', 'sans-serif'],
        'serif': ['ui-serif', 'Georgia'],
        'mono': ['ui-monospace', 'SFMono-Regular'],
    },
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
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
                ".image-container": {
                    width: "128px",
                    height: "128px",
                    display: "flex",
                    "@screen md": {
                        width: "262px",
                        height: "262px",
                    },
                },
                ".image-card": {
                    width: "64px",
                    height: "64px",
                    "@screen md": {
                        width: "128px",
                        height: "128px",
                    },
                },
                ".btn": {
                    padding: "1rem 8rem",
                    textAlign: "center",
                    width: "fit-content",
                    fontSize: "18px",
                    fontWeigth: "semibold",
                    borderRadius: "50px",
                    backgroundColor: "#FFB03E",
                    "@screen md": {},
                },
                ".modal-container": {
                    width: "100%",
                    height: "100%",
                    border: "1px solid",
                    backgroundColor: "rgb(240,240,240,50%)",
                    position: "fixed",
                    top: 0,
                    left: 0,
                    zIndex: 10,
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                },
                ".modal": {
                    padding: "0.5rem",
                    backgroundColor: "#FFFF",
                    boxShadow: "2px 2px 10px 5px rgb(0, 0, 0, 0.025)",
                },
            });
        },
    ],
};
