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
            // fontFamily: {
            //     sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            // },
            colors: {
                'lake-green': '#20B2AA', 
              },
              keyframes: {
                ping: {
                    '75%, 100%': {
                        transform: 'scale(1.5)',
                        opacity: 0,
                    },
                    '0%': {
                        transform: 'scale(0.95)',
                        opacity: 0
                    },
                    '20%': {
                        transform: 'scale(1)',
                        opacity: 0.3
                    }

                },
            },
        },
        animation: {
            ping: 'ping 1s ease infinite',
        },
    },
    plugins: [],
};
