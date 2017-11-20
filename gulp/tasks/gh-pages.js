const gulp = require('gulp');
const pages = require('gulp-gh-pages');

gulp.task('Pages', ()=> {
    return gulp.src('./src/dist/**/*')
    .pipe(pages())
})