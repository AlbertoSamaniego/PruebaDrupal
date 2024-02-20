'use strict';

var gulp = require('gulp');
var compass = require('gulp-compass');

gulp.task('compass', function() {
  return gulp.src('./scss/**/*.scss').pipe(compass({
    config_file: './config.rb',
    css: 'css',
    sass: 'scss',
    task: 'watch'
  })).pipe(gulp.dest('app/assets/temp'));
});