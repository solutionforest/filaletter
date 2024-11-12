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
                primary: {
                    50: 'rgba(var(--primary-50), <alpha-value>)',
                    100: 'rgba(var(--primary-100), <alpha-value>)',
                    200: 'rgba(var(--primary-200), <alpha-value>)',
                    300: 'rgba(var(--primary-300), <alpha-value>)',
                    400: 'rgba(var(--primary-400), <alpha-value>)',
                    500: 'rgba(var(--primary-500), <alpha-value>)',
                    600: 'rgba(var(--primary-600), <alpha-value>)',
                    700: 'rgba(var(--primary-700), <alpha-value>)',
                    800: 'rgba(var(--primary-800), <alpha-value>)',
                    900: 'rgba(var(--primary-900), <alpha-value>)',
                    950: 'rgba(var(--primary-950), <alpha-value>)',
                },
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
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
};