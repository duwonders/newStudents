var gulp = require('gulp'),
	notify = require('gulp-notify'),
	imagemin = require('gulp-imagemin'),
	cache = require('gulp-cache'),
	clean = require('gulp-clean');

//images
gulp.task('testImg' , function () {
	return gulp.src('dist/image/**/*')
	.pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
	.pipe(gulp.dest('image'))
	.pipe(notify({ message: 'Images task complete' }));
});

//clean
gulp.task('clean' , function (){
	return gulp.src(['dist/css'],{read : false})
	.pipe(clean());
});

//default
gulp.task('default' , ['clean'] ,function (){
	gulp.start('testImg');
});
