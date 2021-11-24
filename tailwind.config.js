//import tailwind colors
const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        orange: colors.orange,
        sky: colors.sky,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
  prefix: 'tw-',
}
