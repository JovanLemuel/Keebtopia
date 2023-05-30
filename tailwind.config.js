import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        container: {
            center: true,
            padding: "16px",
          },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins'],
            },
            colors: {
                primary: "#0F1729",
                background: "#F9F7F7",
                dark: "#0f172a",
                beige: "#E6E6D9",
                beige2: "#C1C1AB",
                beige3: "#A0A080",
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
