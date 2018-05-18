var gulp = require('gulp');
var sass = require('gulp-sass');
var connect = require('gulp-connect');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('styles', function(){
   return gulp.src('./assets/sass/style.scss')
       .pipe(sourcemaps.init())
       .pipe(sass().on('error', sass.logError))
       .pipe(cleanCSS({debug: true}, (details) => {
           console.log(`Original: ${details.stats.originalSize}`);
           console.log(`Minificado: ${details.stats.minifiedSize}`);
       }))
       .pipe(sourcemaps.write())
       .pipe(gulp.dest('./assets/css/'))
       .pipe(connect.reload());
});

gulp.task('connect', function() {
   connect.server({
       livereload: true
   });
});

gulp.task('watch',function(){
   gulp.watch('./assets/sass/**/*.scss',['styles']);
});

gulp.task('default', ['styles', 'watch', 'connect']);
