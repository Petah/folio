const fs = require('fs');
const gulp = require('gulp');
const sass = require('gulp-sass');
const ts = require('gulp-typescript');
const tsProject = ts.createProject('tsconfig.json');

gulp.task('default', function() {
    gulp.src('node_modules/d3/build/d3.min.js')
        .pipe(gulp.dest('public/libraries'));

    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('public/libraries'));

    gulp.src([
            'node_modules/timelinejs/build/js/timeline-min.js',
            'node_modules/timelinejs/build/js/storyjs-embed.js',
            'node_modules/timelinejs/build/css/*.*',
        ])
        .pipe(gulp.dest('public/libraries'));

    gulp.src('node_modules/featherlight/release/*.*')
        .pipe(gulp.dest('public/libraries'));

    gulp.src('private/styles/cv.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/styles'));

    tsProject.src()
        .pipe(tsProject())
        .js.pipe(gulp.dest('.'));

    const examples = require('./private/data/examples');
    fs.writeFileSync('./private/data/examples.json', JSON.stringify(examples, null, 4));
});

gulp.task('watch', ['default'], function () {
    gulp.watch('private/**/*.*', ['default']);
});
