/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
const path = require('path');
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            backgroundImage: {
                'background': 'url(' + path.resolve(__dirname, 'public/images/Background.jpg') + ')',
                'home-hero': 'url(' + path.resolve(__dirname, 'public/images/Hero/Hero.svg') + ')',
            },
            colors: {
                custom: {
                    dark_raspberry: '#892C55',
                    rich_black: '#060004',
                    ube: '#8C79C9',
                    sunny: '#F8F27C',
                    terra_cotta: '#E17F57',
                    licorice: '#170015',
                    eerie_black: '#18092B19',
                    cadmium_violet: '#913E97',
                    bright_lavender: '#B990EA',
                    shampoo: '#FFCDFF',
                    american_purple: '#57184A',
                    dark_purple: '#3F1536'
                }
            },
            fontFamily: {
                magic: ['Magic', 'serif'],
                magical_neverland: ['Magical_Neverland', 'serif'],
                metal_mania: ['Metal_Mania', 'serif'],
                wonder_magic: ['Wonder_Magic', 'serif'],
            },
            listStyleImage: {
                guidance_silabus: 'url("/public/images/Guidance/Guidance Silabus List.svg")',
            },
        },
    },
    plugins: [
        forms, typography,
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
