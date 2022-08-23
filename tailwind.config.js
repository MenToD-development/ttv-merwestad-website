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
      }
    },
	},
	plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
  ],
}
