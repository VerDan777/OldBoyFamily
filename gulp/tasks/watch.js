const gulp = require('gulp');
const watch = require('gulp-watch');
const browserSync = require('browser-sync').create();

gulp.task('watch', () => {
    browserSync.init({
        server: {
            baseDir: './src/dist'
        }
    });

    watch('./src/**/*.pug', () => {
        gulp.start('pugChanged');
    })

    watch('./src/scss/**/*.scss', () => {
        gulp.start('cssInject');
    })
});

gulp.task('pugChanged', ['PugRender'], () => {
    browserSync.reload();
});

gulp.task('cssInject', ['styles'], () => {
    gulp.src('./dist/styles.css')
    .pipe(browserSync.stream());
});