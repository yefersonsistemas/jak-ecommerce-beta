const mix = require("laravel-mix");

mix.webpackConfig({
    resolve: {
        extensions: [".js", ".vue"],
        alias: {
            "@shipit": __dirname + "/resources/js/shipit template",
            "@panel": __dirname + "/resources/js/panel js"
        }
    }
});

mix.js("resources/js/shipit template/main.js", "public/js").js(
    "resources/js/panel js/main_panel.js",
    "public/js"
);
