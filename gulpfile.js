var gulp = require('gulp');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var del        = require('del');
var sourcemaps = require('gulp-sourcemaps');
var sass       = require('gulp-sass');
var cssnano    = require('cssnano');
var path       = require('path');
var browserSync = require('browser-sync');
var php         = require('gulp-connect-php');
var runSequence = require('run-sequence');

//var gutil      = require('gulp-util');
//var source     = require('vinyl-source-stream');
//var browserify = require('browserify');
//var envify     = require('envify');
//var babelify   = require('babelify');
//var uglify     = require('gulp-uglify');
//var glob       = require('glob');
//var es         = require('event-stream');

const targetPath = 'plugins/Site/webroot/',
sourcePath = 'plugins/Site/resources/assets/',
vendorPath = 'node_modules/';

gulp.task('sass', () => {
  var processors = [
    autoprefixer,
    cssnano
  ];
  return gulp.src(sourcePath + 'sass/*.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({ includePaths: [vendorPath] }).on('error', sass.logError))
      .pipe(postcss(processors))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(targetPath + 'css'));
});


// Copying index
gulp.task('cakeFiles', function(tipo) {
  return gulp.src('plugins/Site/**/*.ctp')
    //.pipe(gulp.dest('dist/'))
    .pipe(browserSync.reload({ // Reloading with Browser Sync
      stream: true
    }));
})


gulp.task('browserSync', function() {
  browserSync({
      proxy: 'http://localhost/~samuellevy/worldwide_gerenciador/',
      port: 8080,
      open: true,
      notify: false,
  });
});

gulp.task('watch', function() {
  gulp.watch(sourcePath + 'scss/*.scss', ['sass']);
  gulp.watch('plugins/**/*.ctp', ['cakeFiles']);
})

gulp.task('default', function(callback) {
  runSequence(['cakeFiles', 'browserSync'], 'watch',
    callback
  )
})
