var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

gulp.task('watch', ['serve', 'sass', 'js'], function () {
    gulp.watch('resources/views/**/*.blade.php', browserSync.reload);
    gulp.watch('resources/assets/sass/*.scss', ['sass']);
    gulp.watch('resources/assets/js/*.js', ['js']);
});

gulp.task('sass', function () {
    return gulp.src('resources/assets/sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('css', function () {
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