'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('workflow', function() {
	gulp.src('./wordpress/wp-content/themes/blog/styles/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 5 versions'],
			cascade: false
	}))
		.pipe(cssnano())
	.pipe(gulp.dest('./wordpress/wp-content/themes/blog/styles/'))
});

gulp.task('default', function() {
	gulp.watch('././wordpress/wp-content/themes/blog/styles/*.scss', ['workflow']);
});



