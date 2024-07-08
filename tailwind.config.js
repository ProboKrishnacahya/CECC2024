/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
const path = require('path');

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            backgroundImage: {
                'home-hero': 'url(' + path.resolve(__dirname, 'public/images/home/Hero.svg') + ')',
            },
            colors: {
                custom: {
                    dark_raspberry: '#892C55',
                    rich_black: '#060004',
                    sunny: '#F8F27C',
                    terra_cotta: '#E17F57',
                }
            },
            fontFamily: {
                magic: ['Magic', 'serif'],
                magical_neverland: ['Magical_Neverland', 'serif'],
                metal_mania: ['Metal_Mania', 'serif'],
                wonder_magic: ['Wonder_Magic', 'serif'],
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        plugin(function ({ addBase }) {
            addBase({
                '@font-face': [
                    {
                        fontFamily: 'Magic',
                        src: 'url(/public/fonts/Magic.otf)',
                    },
                    {
                        fontFamily: 'Magical_Neverland',
                        src: 'url(/public/fonts/Magical_Neverland.ttf)',
                    },
                    {
                        fontFamily: 'Metal_Mania',
                        src: 'url(/public/fonts/Metal_Mania.ttf)',
                    },
                    {
                        fontFamily: 'Wonder_Magic',
                        src: 'url(/public/fonts/Wonder_Magic.ttf)',
                    },
                ],
            });
        }),
    ],
}
