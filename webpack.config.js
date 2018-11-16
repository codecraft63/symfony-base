const Encore = require("@symfony/webpack-encore");
const PluginPriorities = require('@symfony/webpack-encore/lib/plugins/plugin-priorities.js');
const CompressionPlugin = require('compression-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    .copyFiles({
            from: './assets/images',
            // optional target path, relative to the output dir
            //to: 'images/[path][name].[ext]',

            // only copy files matching this pattern
            //pattern: /\.(png|jpg|jpeg)$/
    })

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if you JavaScript imports CSS.
     */
    .addEntry('app', './assets/javascript/app.js')
    .addStyleEntry('global', './assets/stylesheets/application.scss')

    .createSharedEntry('vendor', [
        'jquery',
        'what-input',
        'foundation-sites'
    ])

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()


    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you're having problems with a jQuery plugin
    .autoProvidejQuery()

    // enables PostCSS support
    .enablePostCssLoader()

    // enables VueJS loader
    .enableVueLoader()

    .addPlugin(new CompressionPlugin({
        asset: "[path].gz[query]",
        algorithm: "gzip",
        test: /\.(css|js)$/,
        threshold: 10240,
        minRatio: 0.8
    }), PluginPriorities.DefinePlugin)

    .addPlugin(new ImageminPlugin({
        test: /\.(jpe?g|png|gif|svg)$/i
    }), PluginPriorities.DefinePlugin)
;

// export the final configuration
module.exports = Encore.getWebpackConfig();
