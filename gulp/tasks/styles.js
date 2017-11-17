const gulp = require('gulp');
const styles = require('gulp-sass');
const SassModuleImporter = require('sass-module-importer');
const notify = require('gulp-notify');
const minify = require('gulp-csso');
const mqpacker = require('gulp-combine-mq');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');

gulp.task('styles', ()=> {
    return gulp.src('./src/scss/**/*.scss')
    .pipe(styles({importer: SassModuleImporter()}))
    .on('error', notify.onError(function(error) {
        return {
            title: 'Styles',
            message: error.message
        }
    }))
    .pipe(autoprefixer( {
        browsers: ['last 2 versions'],
        cascade: false
    }
    ))
    .pipe(mqpacker({
        beautify: true
    }))
    
    .pipe(gulp.dest('./src/dist'))
    .pipe(minify())
    .pipe(rename('styles.min.css'))
    .pipe(gulp.dest('./src/dist'))
})