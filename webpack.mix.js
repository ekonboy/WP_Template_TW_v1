const mix = require('laravel-mix');
const path = require('path');
const tailwindcss = require('tailwindcss');

mix.setResourceRoot('../');
mix.setPublicPath(path.resolve('./'));

mix.sass('resources/scss/main.scss', 'public/css')
   .options({
     processCssUrls: false,
     postCss: [tailwindcss('./tailwind.config.js')]
   });

mix.webpackConfig({
  watchOptions: {
    ignored: [
      path.posix.resolve(__dirname, './node_modules'),
      path.posix.resolve(__dirname, './css'),
      path.posix.resolve(__dirname, './js')
    ]
  }
});



// Configuración de producción
if (mix.inProduction()) {
  mix.version().sourceMaps();
} else {
  mix.webpackConfig({ devtool: 'inline-source-map' });
}
