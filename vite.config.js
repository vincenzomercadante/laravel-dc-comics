const path = require("path");

import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/style.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // alias for resources path
            "~resources": "/resources/",
            // alias for bootstrap path
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
