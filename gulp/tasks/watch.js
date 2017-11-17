const gulp = require('gulp');
const watch = require('gulp-watch');
const BrowserSync = require('browser-sync').create();

gulp.task('watch', ()=> {
    BrowserSync.init({
        server: {
            baseDir: './src/dist'
        },
        notify: {
            styles: {
                top: "auto",
                bottom: 0
            }
        }
    })
});

// Pug
watch('./src/*.pug', ()=> {
    gulp.start('pugChanged');
})

// Styles
watch('./src/scss/**/*.scss', ()=> {
    gulp.start('CssInject')
})

gulp.task('pugChanged', ['PugRender'], ()=> {
    BrowserSync.reload();
});

gulp.task('CssInject', ['styles'], ()=> {
    gulp.src('./src/dist/styles.css')
    .pipe(BrowserSync.stream());
})