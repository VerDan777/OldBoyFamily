const gulp = require('gulp');
const rename = require('gulp-rename');

gulp.task('copyWpPHP', ()=> {
    return gulp.src('./wp/*.php')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily'));
});

gulp.task('copyWpCSS', ()=> {
    return gulp.src('./src/dist/styles.css')
        .pipe(rename('style.css'))
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily'))
});

gulp.task('copyWpJS', ()=> {
    return gulp.src('./src/dist/*.js')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily'));
})

gulp.task('copyWpFonts', ()=> {
    return gulp.src('./src/dist/fonts/*.*')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily/fonts'));
})

gulp.task('copyWpImg', ()=> {
    return gulp.src('./src/dist/img/*.*')
        .pipe(gulp.dest('C:/xampp/htdocs/OldBoyFamily/wp-content/themes/OldBoyFamily/img'))
})