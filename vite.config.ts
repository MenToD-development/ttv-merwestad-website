import { defineConfig } from 'vite'
// @ts-ignore
import autoprefixer from 'autoprefixer'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
	plugins: [
		laravel(),
	],
})
