const gulp   = require('gulp')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')

gulp.task('receita',function(){
    return gulp.src(['src/assets/js/func/request.js',
                     'src/assets/js/class/Util.js',
                     'src/assets/js/func/receita.js',
                     'src/assets/js/receita.js'     ])
    .pipe(concat('receita.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/js'))
})