const gulp = require('gulp');
const rename = requir('gulp-rename');

gulp.task('copyWpPHP', ()=> {
    return gulp.src('./wp/*.php')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily'));   
});

gulp.tasks('copyWpCSS', ()=> {
    return gulp.src('./src/dist/styles.min.css')
        .pipe(rename('style.css'))
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily'))
});

gulp.tasks('copyWpJS', ()=> {
    return gulp.src('./dist/*.js')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily'));
})