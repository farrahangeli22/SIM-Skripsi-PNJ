import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "primary": "#52AFBA",
                "hover": "#4997A1",
                "header": "#00A1A1",
                "footer": "#DAD8D8",
                "card": "#F8F8F8",
                "cardData": "#D9D9D9",
                "font": "#286D75",
                "submitButton": "#4997A1"
            },

            fontSize: {
                "h3": "36px"
            }
        },
    },

    plugins: [forms],
};
