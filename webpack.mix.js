import mix from 'laravel-mix';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
       postCss: [tailwindcss(), autoprefixer()],
   });