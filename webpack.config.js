var Encore = require("@symfony/webpack-encore");
var CompressionPlugin = require('compression-webpack-plugin');

Encore
    .setOutputPath('public/assets/')
    .setPublicPath('/assets')

    .cleanupOutputBeforeBuild()

    .addEntry('app', './assets/javascript/app.js')
    .addStyleEntry('global', './assets/stylesheets/application.scss')

    .createSharedEntry('vendor', [
        'jquery',
        'what-input',
        'foundation-sites'
    ])

    .enableSassLoader()
    .enablePostCssLoader()
    .autoProvidejQuery()
    .enableVueLoader()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())

    .addPlugin(new CompressionPlugin({
        asset: "[path].gz[query]",
        algorithm: "gzip",
        test: /\.(css|js)$/,
        threshold: 10240,
        minRatio: 0.8
    }))
;

// export the final configuration
module.exports = Encore.getWebpackConfig();
