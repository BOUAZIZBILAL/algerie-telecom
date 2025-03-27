import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
tefaaaaaa7777777
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
