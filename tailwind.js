const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: false,
  theme: {
    fontFamily: {
      serif: ['Bree Serif', 'serif'],
      sans: ['Open Sans', 'sans-serif']
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
      secondary: {
        normal: '#f4f8fe',
        hover: '#cad2de'
      }
    },
    extend: {

    },
  },
  variants: {},
  plugins: [],
}
