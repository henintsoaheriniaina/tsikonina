import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (/\.(woff|woff2|ttf|eot|svg)$/.test(assetInfo.name)) {
                        return "assets/fonts/[name][extname]";
                    }
                    return "assets/[name][extname]";
                },
            },
        },
    },
});
