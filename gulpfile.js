var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');
var requireDir = require('require-dir');
var runSequence = require('run-sequence');
var cache = require('gulp-cache');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync');
var tinypng = require('gulp-tinypng');
var source = './source/';
var target = './plugins/Site/webroot/';
var tasks = requireDir('./tasks');

//gulp.task('default', ['clean:dist']);
gulp.task('default', function(callback) {
  runSequence(['images', 'sass', 'fonts', 'js', 'browserSync'], 'watch',
  callback
)
});

gulp.task('build', function(callback) {
  runSequence(
    'clean:dist',
    ['sass', 'images', 'fonts', 'js'],
    callback
  )
});

// Watchers
gulp.task('watch', function() {
  gulp.watch(source + 'scss/**/*.scss', ['sass']);
  gulp.watch(source + '*.html', ['html']);
  gulp.watch('**/*.ctp', ['ctp']);
  gulp.watch(source + 'js/**/*.js', ['js']);
})

gulp.task('browserSync',[], function() {
  browserSync({
    proxy: 'http://localhost/3aglobal-backend',
  });
});

gulp.task('ctp', function() {
  return gulp.src('**/*.ctp')
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('sass', function () {
  return gulp.src(source + 'scss/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest(target + 'css'))
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('images', function() {
  return gulp.src(source + 'images/**/*.+(png|jpg|jpeg|gif|svg)')
  .pipe(imagemin({
    interlaced: true,
    progressive: true,
    optimizationLevel: 5,
    svgoPlugins: [{removeViewBox: false}]
  }))
  .pipe(gulp.dest(target + 'images'))
});

gulp.task('compress', function() {
  return gulp.src(target + 'images/**/*.+(png|jpg|jpeg)')
  .pipe(tinypng('OL3Y5eFrYwhFEg2jrWa6Ijk9P_Enbgie'))
  .pipe(gulp.dest(target + 'images'))
});

gulp.task('fonts', function() {
  return gulp.src(source + 'fonts/**/*')
  .pipe(gulp.dest(target + 'fonts'))
});

gulp.task('sass:watch', function () {
  gulp.watch(source + 'sass/**/*.scss', ['sass']);
});

gulp.task('js', function() {
  return gulp.src(source + 'js/**/*.js')
  .pipe(gulp.dest(target + 'js/'))
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('clean:dist', function() {
  return del.sync([target+'/**/*', '!'+target+'/images', '!'+target+'/images/**/*', '!'+target+'index.php']);
});
