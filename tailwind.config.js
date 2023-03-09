/** @type { import('tailwindcss').Config } */
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
      width: {
        '544': '34rem',
        '333': '20.8rem',
      },
      // fonts: {
      //   'main': 'montserrat',
      // },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
