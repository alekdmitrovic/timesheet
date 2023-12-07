import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'public/build',
        assetsDir: '',
        manifest: true,
    },
    plugins: [
        laravel({
            input: ['resources/scss/style.scss',
                    'resources/js/app.js',
                    'resources/js/bootstrap.js',
                    'resources/js/global.js',
                    'resources/dist/global.js',
                    'resources/dist/style.css'
            ],
            refresh: true,
        }),
    ],
});
