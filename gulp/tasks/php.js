const gulp = require('gulp');

gulp.task('copyPHP', ()=> {
    return gulp.src('./wp/**/*.php')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily'))
});