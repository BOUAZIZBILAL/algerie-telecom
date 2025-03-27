import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
delaa3333333333
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
