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
    screen: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1440px',
      // => @media (min-width: 1440px) { ... }
    },
    extend: {

    },
  },
  variants: {},
  plugins: [],
}
