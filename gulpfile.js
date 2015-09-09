var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
    gulp.src('bower_components/d3/d3.min.js')
        .pipe(gulp.dest('public/libraries'));

    gulp.src('bower_components/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('public/libraries'));

    gulp.src('bower_components/TimelineJS/build/js/timeline-min.js')
        .pipe(gulp.dest('public/libraries'));

    gulp.src('bower_components/TimelineJS/build/css/*.*')
        .pipe(gulp.dest('public/libraries'));

    gulp.src('bower_components/TimelineJS/build/js/storyjs-embed.js')
        .pipe(gulp.dest('public/libraries'));
});

gulp.task('sass', function () {
    gulp.src('private/styles/cv.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/styles'));
});

gulp.task('sass:watch', function () {
    gulp.watch('private/styles/**/*.scss', ['sass']);
});
