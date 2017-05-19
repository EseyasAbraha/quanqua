var gulp = require('gulp');
var sass = require('gulp-sass');
var csso = require('gulp-csso');

gulp.task('css', function(){
  return gulp.src('src/scss/*.scss')
    .pipe(sass({
      includePaths : ['src/included_scss']
    }))
//    .pipe(csso())
    .pipe(gulp.dest('web/css'))
});

gulp.task('default', ['css']);

gulp.task('watch', function() {
    gulp.watch('src/scss/*.scss', ['css']);
})
