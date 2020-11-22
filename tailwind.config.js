module.exports = {
    prefix: 'tw-',
    purge: {
        enabled: process.env.NODE_ENV === 'production',
        content: [
            'resources/views/**',
            'resources/js/**'
        ]
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
