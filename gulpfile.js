var gulp = require('gulp');
var scss = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var cssnano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

gulp.task('watch', ['scss', 'js', 'font'], function () {
    // gulp.watch('resources/views/**/*', browserSync.reload);
    gulp.watch('resources/assets/scss/*.scss', ['scss']);
    gulp.watch('resources/assets/js/*.js', ['js']);
});

gulp.task('scss', function () {
    return gulp.src('resources/assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(scss().on('error', scss.logError))
        .pipe(cssnano())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('css', ['sass'], function () {
    return gulp.src('resources/assets/css/*.css')
        .pipe(sourcemaps.init())
        .pipe(cssnano())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('public/css'))
});

gulp.task('js', function () {
    return gulp.src(['resources/assets/js/libraries.js', 'resources/assets/js/custom.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('script.js'))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('public/js'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('font', function() {
    return gulp.src('resources/assets/fonts/*')
        .pipe(gulp.dest('public/fonts'))
});

gulp.task('serve', function () {
    browserSync.init({
        proxy: "http://sov.local"
    })
});

gulp.task('default', ['watch']);



/*** Build ***/

gulp.task('build', ['build-css', 'build-js', 'font']);

gulp.task('build-scss', function () {
    return gulp.src('resources/assets/scss/*.scss')
        .pipe(scss().on('error', scss.logError))
        .pipe(cssnano())
        .pipe(gulp.dest('public/css'))
});

gulp.task('build-css', ['build-scss'], function () {
    return gulp.src('resources/assets/css/*.css')
        .pipe(cssnano())
        .pipe(gulp.dest('public/css'))
});

gulp.task('build-js', function () {
    return gulp.src(['resources/assets/js/libraries.js', 'resources/assets/js/custom.js'])
        .pipe(concat('script.js'))
        .pipe(gulp.dest('public/js'))
});