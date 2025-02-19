const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    darkMode: 'class',
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        fontFamily: {
            'body': ["gabii", "sans-serif"],
            'heading': ["gabii", "sans-serif"],
            'nioicon': ["Nioicon"]
          },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),//1024
            'xl': tailpress.theme('settings.layout.wideSize', theme),//1280
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
