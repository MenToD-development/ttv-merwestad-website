const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: false,
  theme: {
    fontFamily: {
      serif: ['PT Serif', 'sans-serif'],
      sans: ['Helvetica', 'sans-serif']
    },
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      yellow: colors.yellow,
      green: colors.green,
      blue: colors.blue,
      indigo: colors.indigo,
      purple: colors.purple,
      primary: {
        normal: '#267DF4',
        hover: '#0B5AC6'
      },

    },
    extend: {

    },
  },
  variants: {},
  plugins: [],
}
