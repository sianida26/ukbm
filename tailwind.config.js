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
        coolGray: colors.coolGray,
        emerald: colors.emerald,
        fuchsia: colors.fuchsia,
        orange: colors.orange,
        teal: colors.teal,
        trueGray: colors.trueGray,
        sky: colors.sky,
        rose: colors.rose,
        warmGray: colors.warmGray,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
  prefix: 'tw-',
}
