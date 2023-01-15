let mix = require('laravel-mix');
require('laravel-mix-svg-sprite')

mix.js('resources/js/main.js', 'js').sass('resources/scss/main.scss', 'css').svgSprite(
   'resources/svg',
   'public/spritemap.svg'
).setPublicPath('public');