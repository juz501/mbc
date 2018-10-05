'use strict';

var gulp = require( 'gulp' );
var cssnano = require( 'gulp-cssnano' );
var sourcemaps = require( 'gulp-sourcemaps' );
var sass = require( 'gulp-sass' );
var gulpStylelint = require( 'gulp-stylelint' );
var eslint = require( 'gulp-eslint' );

var supported = [
  'last 2 versions',
  'safari >= 8',
  'ie >= 10',
  'ff >= 20',
  'ios 6',
  'android 4'
];

gulp.task( 'default', [
  'sass',
  'js'
]);

gulp.task( 'sass', [ 'css:lint' ], function() {
  return gulp.src( 'assets/sass/style.scss' )
    .pipe( sourcemaps.init() )
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe( cssnano({
      autoprefixer: {
        browsers: supported,
        add:      true
      }
    }) )
    .pipe( sourcemaps.write( '.' ) )
    .pipe( gulp.dest( 'dist/' ) );
});

gulp.task( 'js', [ 'js:lint' ], function() {
  return gulp.src( 'assets/js/scripts.js' )
    .pipe( gulp.dest( 'dist/' ) );
});

gulp.task( 'watch', function() {
  gulp.watch( 'assets/sass/**/*.scss', [ 'sass' ]);
  gulp.watch( 'assets/js/**/*.js', [ 'js' ]);
});

gulp.task( 'js:lint', function() {
  return gulp.src([ 'assets/js/**/*.js' ])
    .pipe( eslint() )
    .pipe( eslint.format() )
    .pipe( eslint.failAfterError() );
});

gulp.task( 'css:lint', function() {
  return gulp.src([ 'assets/scss/**/*.scss' ])
    .pipe( gulpStylelint({
      reporters: [ {
        formatter: 'string',
        console:   true
      } ]
    }) );
});
