/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js, php}"],
  theme: {
    extend: {
      colors: {
        'primary': '#D09456',
        'secondary': '#E6372F',
        'neutral': '#EAB538',
      },
      fontFamily: {
        'stack': ['Arbotek', 'sans-serif'],
      },
      fontSize: {
        'sm': '0.8rem',
        'base': '1rem',
        'xl': '1.25rem',
        '2xl': ['1.5rem', {
          lineHeight: '2rem',
          letterSpacing: '-0.01em',
          fontWeight: '500',
        }],
        '3xl': ['1.875rem', {
          lineHeight: '2.25rem',
          letterSpacing: '-0.02em',
          fontWeight: '700',
        }],
      }
    },
  },
  plugins: [],
}