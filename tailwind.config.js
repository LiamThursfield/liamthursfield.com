/*
** TailwindCSS Configuration File
**
** Docs: https://tailwindcss.com/docs/configuration
** Default: https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
*/

// load default theme settings
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.html',
        './resources/**/*.vue',
    ],
    theme: {
        fontFamily: {
            'sans': ['Poppins', ...defaultTheme.fontFamily.sans],
            'serif': ['Merriweather', ...defaultTheme.fontFamily.serif]
        },
        extend: {
            boxShadow: {
                'outline-white': '0 0 0 3px rgba(255, 255, 255, 0.5)',
            },
            borderRadius: {
                'xl':  '1rem',
                '2xl':  '2rem',
            },
            colors: {
                mono: {
                    100: '#E5E5E5',
                    200: '#CCCCCC',
                    300: '#B2B2B2',
                    400: '#999999',
                    500: '#807F7F',
                    600: '#666666',
                    700: '#4D4D4D',
                    800: '#333333',
                    900: '#1A1A1A',
                },
                'lilac': {
                    '100': '#C5C8DD',
                    '200': '#979DC3',
                    '300': '#6A71A9',
                    '400': '#4A5182',
                    '500': '#303554',
                    '600': '#2D314E',
                    '700': '#292C47',
                    '800': '#252841',
                    '900': '#22243A'
                },
                gray: {
                    ...defaultTheme.colors.gray,
                    '850': '#222938'
                },
            },
            margin: {
                'px': '1px'
            },
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
            transitionProperty: {
                'height': 'height',
                'spacing': 'margin, padding',
            }
        },
    },
    variants: {
        alignContent: ['responsive'],
        alignItems: ['responsive'],
        alignSelf: ['responsive'],
        appearance: ['responsive'],
        backgroundAttachment: ['responsive'],
        backgroundColor: ['responsive', 'hover', 'focus'],
        backgroundPosition: ['responsive'],
        backgroundRepeat: ['responsive'],
        backgroundSize: ['responsive'],
        borderCollapse: ['responsive'],
        borderColor: ['responsive', 'hover', 'focus', 'focus-within'],
        borderRadius: ['responsive', 'hover'],
        borderStyle: ['responsive'],
        borderWidth: ['responsive', 'hover'],
        boxShadow: ['responsive', 'hover', 'focus'],
        cursor: ['responsive'],
        display: ['responsive'],
        fill: ['responsive'],
        flex: ['responsive'],
        flexDirection: ['responsive'],
        flexGrow: ['responsive'],
        flexShrink: ['responsive'],
        flexWrap: ['responsive'],
        float: ['responsive'],
        fontFamily: ['responsive'],
        fontSize: ['responsive'],
        fontSmoothing: ['responsive'],
        fontStyle: ['responsive'],
        fontWeight: ['responsive', 'hover', 'focus'],
        height: ['responsive'],
        inset: ['responsive'],
        justifyContent: ['responsive'],
        letterSpacing: ['responsive'],
        lineHeight: ['responsive'],
        listStylePosition: ['responsive'],
        listStyleType: ['responsive'],
        margin: ['responsive', 'hover'],
        maxHeight: ['responsive'],
        maxWidth: ['responsive'],
        minHeight: ['responsive'],
        minWidth: ['responsive'],
        objectFit: ['responsive'],
        objectPosition: ['responsive'],
        opacity: ['responsive', 'hover', 'focus'],
        order: ['responsive'],
        outline: ['responsive', 'focus'],
        overflow: ['responsive'],
        padding: ['responsive', 'hover'],
        pointerEvents: ['responsive'],
        position: ['responsive'],
        resize: ['responsive'],
        stroke: ['responsive'],
        tableLayout: ['responsive'],
        textAlign: ['responsive'],
        textColor: ['responsive', 'hover', 'focus', 'focus-within'],
        textDecoration: ['responsive', 'hover', 'focus'],
        textTransform: ['responsive'],
        userSelect: ['responsive'],
        verticalAlign: ['responsive'],
        visibility: ['responsive'],
        whitespace: ['responsive'],
        width: ['responsive'],
        wordBreak: ['responsive'],
        zIndex: ['responsive'],
    },
    plugins: []
};
