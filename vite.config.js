import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/pages/dashboard_con.js",
                "resources/js/pages/basicinfo_con.js",
                "resources/js/pages/envinfo_con.js",
                "resources/js/pages/reg_con.js",
                "resources/js/pages/user_con.js",
                "resources/js/pages/pop_con.js",
                "resources/js/pages/gh_con.js",
            ],
            refresh: true,
        }),
    ],
});
