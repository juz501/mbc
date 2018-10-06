'use strict';

var gulp = require( 'gulp' );

var browserify = require( 'browserify' );
var babelify = require( 'babelify' );
var source = require( 'vinyl-source-stream' );
var vbuffer = require( 'vinyl-buffer' );
var uglify = require( 'gulp-uglify' );
var sourcemaps = require( 'gulp-sourcemaps' );
var eslint = require( 'gulp-eslint' );

var cssnano = require( 'gulp-cssnano' );
var sass = require( 'gulp-sass' );
var gulpStylelint = require( 'gulp-stylelint' );

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

gulp.task( 'build', [
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
  var bundler = browserify( './assets/js/scripts.js', { debug: true })
    .transform( babelify, {
      presets:    [ '@babel/preset-env' ],
      sourceMaps: true
    });
  return bundler.bundle()
    .on( 'error', function( err ) {
      console.error( err );
      this.emit( 'end' );
    })
    .pipe( source( 'scripts.js' ) )
    .pipe( vbuffer() )
    .pipe( sourcemaps.init({loadMaps: true}) )
    .pipe( uglify() )
    .pipe( sourcemaps.write( './' ) )
    .pipe( gulp.dest( './dist' ) );
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
