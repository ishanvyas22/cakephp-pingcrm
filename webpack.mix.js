const mix = require('laravel-mix');
const path = require('path');

mix.setPublicPath('./webroot')
    .js('resources/js/app.js', 'webroot/js')
    .sass('resources/sass/app.scss', 'webroot/css')
    .webpackConfig({
        output: { chunkFilename: 'js/[name].js?id=[chunkhash]' },
            resolve: {
            alias: {
                vue$: 'vue/dist/vue.runtime.esm.js',
                '@': path.resolve('resources/js'),
            },
        },
    })
    .version()
    .sourceMaps();
