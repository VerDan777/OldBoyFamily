const gulp = require('gulp');
const images = require('gulp-imagemin');

gulp.task('Images', ()=> {
    return gulp.src('./src/dist/img/**/*.{png, jpg, gif}')
    .pipe(images([
        images.optipng({optimizationLevel: 3}),
        images.jpegtran({progressive: true})
    ]))
    .pipe(gulpd.dest('build/img'))
});