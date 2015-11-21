var gulp            = require('gulp');
var minifyCss       = require('gulp-minify-css');
var autoprefixer    = require('gulp-autoprefixer');
var sourcemaps      = require('gulp-sourcemaps');
var uglify          = require('gulp-uglify');
var rename          = require("gulp-rename");
var livereload      = require('gulp-livereload');

/**
 * Default Task
 */
gulp.task('default', ['css', 'js']);

/**
 * Style task
 */
gulp.task('css', function() {
    var autoprefixerOptions = {
        browsers: [
            'last 5 versions',
            'last 20 firefox versions',
            'last 20 chrome versions',
            'ie >= 8',
        ],
        remove: false,
    };

    gulp.src('./lib/css/*.css')
        .pipe(minifyCss({
            compatibility: 'ie8'
        }))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(rename('candlestick.min.css'))
        .pipe(gulp.dest('dist'));

    gulp.src('./lib/css/*.css')
        .pipe(sourcemaps.init())
        .pipe(minifyCss({
            compatibility: 'ie8'
        }))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(sourcemaps.write())
        .pipe(rename('candlestick.map.css'))
        .pipe(gulp.dest('dist'));
});

/**
 * Scripts task
 */
gulp.task('js', function() {
    return gulp.src('./lib/js/*.js')
        .pipe(uglify())
        .pipe(rename('candlestick.min.js'))
        .pipe(gulp.dest('dist'));
});

/**
 * Watch & live reload
 */
gulp.task('watch', function() {
    gulp.watch(['./lib/js/*.js', './lib/css/*.css'], ['css', 'js']).on('change', function(e) {
        livereload.changed(e.path);
        console.log('Update file -> ' + e.path);
    });
});
