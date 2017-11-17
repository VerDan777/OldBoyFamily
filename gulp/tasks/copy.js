const gulp = require('gulp');

gulp.task('copy', ()=> {
    return gulp.src('./src/dist/*.*')
    .pipe(gulp.dest('build'))
});