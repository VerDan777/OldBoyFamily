const gulp = require('gulp');
const watch = require('gulp-watch');
const browserSync = require('browser-sync').create();

gulp.task('watch', () => {
    browserSync.init({
        server: {
            baseDir: './src/dist'
        }
    });

    // Pug
    watch('./src/**/*.pug', () => {
        gulp.start('pugChanged');
    });

    // Styles
    watch('./src/scss/**/*.scss', () => {
        gulp.start('cssInject');
    });

    // Scripts
    watch('./src/js/**/*.js',()=> {
        gulp.start('jsChanged');
    });

    // Wordpress
    watch('./wp/**/*.php', ()=> {
        gulp.start('copyPHP')
    })
});

gulp.task('pugChanged', ['PugRender'], () => {
    browserSync.reload();
});

gulp.task('cssInject', ['styles'], () => {
    gulp.src('./dist/styles.css')
    .pipe(browserSync.stream());
});

gulp.task('jsChanged',['scripts'], ()=> {
    browserSync.reload();
})