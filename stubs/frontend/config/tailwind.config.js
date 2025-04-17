const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/css/app.css",

        "./vendor/4geo35/tailwindcss-theme/src/resources/views/**/*.blade.php",
        "./vendor/4geo35/tailwindcss-theme/src/config/tailwindcss-theme.php",
    ],
    theme: {
        colors: {
            black: colors.black,
            white: colors.white,
            inherit: colors.inherit,
            current: colors.current,
            transparent: colors.transparent,

            body: 'rgba(var(--color-body), <alpha-value>)',
            "body-bg": 'rgba(var(--color-body-bg), <alpha-value>)',
            stroke: 'rgba(var(--color-stroke), <alpha-value>)',
            // theme colors
            light: {
                DEFAULT: 'rgba(var(--color-light), <alpha-value>)',
                hover: 'rgba(var(--color-light-hover), <alpha-value>)'
            },
            dark: {
                DEFAULT: 'rgba(var(--color-dark), <alpha-value>)',
                hover: 'rgba(var(--color-dark-hover), <alpha-value>)'
            },
            success: {
                DEFAULT: 'rgba(var(--color-success), <alpha-value>)',
                hover: 'rgba(var(--color-success-hover), <alpha-value>)'
            },
            danger: {
                DEFAULT: 'rgba(var(--color-danger), <alpha-value>)',
                hover: 'rgba(var(--color-danger-hover), <alpha-value>)'
            },
            warning: {
                DEFAULT: 'rgba(var(--color-warning), <alpha-value>)',
                hover: 'rgba(var(--color-warning-hover), <alpha-value>)'
            },
            info: {
                DEFAULT: 'rgba(var(--color-info), <alpha-value>)',
                hover: 'rgba(var(--color-info-hover), <alpha-value>)'
            },
            primary: {
                DEFAULT: 'rgba(var(--color-primary), <alpha-value>)',
                hover: 'rgba(var(--color-primary-hover), <alpha-value>)'
            },
            secondary: {
                DEFAULT: 'rgba(var(--color-secondary), <alpha-value>)',
                hover: 'rgba(var(--color-secondary-hover), <alpha-value>)'
            },
        },

        themeColors: {
            light: 'dark',
            dark: 'light',
            success: 'light',
            danger: 'light',
            warning: 'dark',
            info: 'dark',
            primary: 'light',
            secondary: 'light'
        },

        extend: {
            fontFamily: {
                'sans': ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                "btn-ico-text": 'var(--btn-ico-text-space)',
                "btn-x-ico": 'var(--btn-padding-x-ico)',
                "btn-x": 'var(--btn-padding-x)',

                'indent-xs': 'var(--indent-xs)',
                'indent-sm': 'var(--indent-sm)',
                'indent': 'var(--indent-width)',
                'indent-lg': 'var(--indent-lg)',
                'indent-half': 'var(--indent-half)',
                'indent-double': 'var(--indent-double)',

                'spacer': 'var(--indent-spacer)',
                'modal-aside': 'var(--modal-aside-width)',
            },
            zIndex: {
                'dropdown': 'var(--z-dropdown)',
                'sticky': 'var(--z-sticky)',
                'fixed': 'var(--z-sticky)',
                'modal-backdrop': 'var(--z-modal-backdrop)',
                'modal': 'var(--z-modal)',
            },
            flex: {
                '0': '0 0 auto',
            }
        },
    },
    plugins: [
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/gridExpand"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/btnStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/formControlStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/formSelectStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/formCheckStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/cardStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/tableStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/beautifyScrollbar"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/dropdownStyle"),
        require("./vendor/4geo35/tailwindcss-theme/src/resources/tailwind-plugins/modalStyle"),
    ],
}

