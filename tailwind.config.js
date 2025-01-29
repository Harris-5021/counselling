import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'copper': '#B87333',
                'copper-light': '#D4976A',
                'copper-dark': '#8B4513',
                'sage': {
                    50: '#F5F7F5',
                    100: '#E6EAE6',
                    200: '#C2CFC2',
                    300: '#9EB59E',
                    400: '#7A9B7A',
                    500: '#568256',
                    600: '#446844',
                    700: '#324E32',
                    800: '#203420',
                    900: '#0E1A0E',
                }
            },
            height: {
                'hero': '80vh',
            },
            backgroundImage: {
                'hero-pattern': "url('/images/hero.jpg')",
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};