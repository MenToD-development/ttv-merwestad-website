module.exports = {
	content: [
		'./resources/**/*.blade.php',
		'./resources/**/*.ts',
		'./resources/**/*.vue',
	],
	theme: {
		extend: {
      "colors": {
        "primary": "#3185FC",
      },
      "fontFamily": {
        "serif": ["Roboto Slab", "serif"]
      },
      fontSize: {
        xs: '0.7rem',
      }
    },
	},
	plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
  ],
}
