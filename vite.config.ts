// @ts-ignore
import autoprefixer from 'autoprefixer'
import { defineConfig } from 'vite'
import laravel from 'vite-plugin-laravel'
import vuePlugin from "@vitejs/plugin-vue";

export default defineConfig({
	plugins: [
		laravel(),
        vuePlugin(),
	],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
})
