let mix = require('laravel-mix')


mix.js('resources/assets/js/**/*.js', 'public/js')
    .sourceMaps()
    .sass('resources/assets/sass/app.scss', 'public/css')
    .browserSync({
        proxy: {
            target: 'localhost:8000',
            reqHeaders: function () {
                return {
                    host: "localhost:3000"
                };
            }
        },
        browser: [
            'firefox',
            'google chrome'
        ],
        files: [
            'resources/views/**/*.php',
            'public/**/*.html',
            'public/**/*.php',
            'public/js/**/*.js',
            '!public/css/**/*.css'
        ],
    });


