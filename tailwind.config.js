/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/**/*.{html,js,css,php}"],
  theme: {
    extend: {
      colors: {
        'primary': '#A1C741',
        'secondary': '#87BD25',
        'primary-light': '#D0DECA',
        'white': '#FFFFFF',
        'gray': '#F2F4F3',
        'dark-gray': '#282828',
      },
      heights: {
        '120': '30rem',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography', '@tailwindcss/forms')
  ],
}
