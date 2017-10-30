require('es6-promise').polyfill();
var gulp          = require('gulp');
var sass          = require('gulp-sass');
var autoprefixer  = require('gulp-autoprefixer');
var livereload = require('gulp-livereload');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))
  .pipe(livereload());
});


// PHP
gulp.task('php', function() {
  return gulp.src([
      './index.php'
  ])
  .pipe(livereload());
});


gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('./sass/**/*.scss', ['sass']);
  // Watch HTML and livereload
  gulp.watch('./index.php', ['php']);
});



gulp.task('default', ['sass', 'watch', 'php']);
