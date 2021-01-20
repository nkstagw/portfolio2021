const gulp = require('gulp');
const path = require('path');
const sass = require('gulp-sass');
const ejs = require('gulp-ejs');
const autoprefixer = require('gulp-autoprefixer');
const cleanCss = require('gulp-clean-css');
const watch = require('gulp-watch');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const minimist = require('minimist');
const browserSync = require('browser-sync').create();
const runSequence = require('gulp4-run-sequence');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const mozjpeg = require('imagemin-mozjpeg');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const svgstore = require('gulp-svgstore');
const cheerio = require('gulp-cheerio');
const svgmin = require('gulp-svgmin');
const destDir = './dist/';
const prodDir = './htdocs/';
const wpDir = './wordpress/wp-content/themes/portfolio/';
const config = {
  string: 'env',
  default: {
    env: process.env.NODE_ENV || 'dev'
  }
};
const options = minimist(process.argv.slice(2), config);
let isProd = (options.env === 'prod') ? true : false;
let isWp = (options.env === 'wp') ? true: false;
console.log('[build env]', options.env, '[isProd]', isProd);

gulp.task('browser-sync', () => {
  browserSync.init({
    server: {
      baseDir: destDir
    }
  })
});

gulp.task('bs-reload', () => {
  browserSync.reload();
});

gulp.task('sass', () => {
  return gulp.src(['src/styles/**/*.scss'])
  .pipe(plumber({
    errorHandler: notify.onError('Error: <%= error.message %>')
  }))
  .pipe(sass({
    outputStyle: 'expanded'
  }))
  .pipe(rename(function(path) {
    path.dirname = 'assets/css'
  }))
  .pipe(autoprefixer({
    overrideBrowserslist: ['last 2 version', 'iOS >= 11', 'Android >= 6'],
    cascade: false
  }))
  .pipe(gulpif(isProd || isWp, cleanCss()))
  .pipe(gulpif(!isProd && !isWp, gulp.dest(destDir)))
  .pipe(gulpif(isProd && !isWp, gulp.dest(prodDir)))
  .pipe(gulpif(isWp, gulp.dest(wpDir)))
})

gulp.task('ejs', () => {
  return gulp.src(['src/templates/pages/**/*.ejs', '!src/templates/**/_*.ejs'])
  .pipe(plumber({
    errorHandler: notify.onError('Error: <%= error.message %>')
  }))
  .pipe(ejs())
  .pipe(rename({
    extname: '.html'
  }))
  .pipe(gulpif(!isProd, gulp.dest(destDir)))
  .pipe(gulpif(isProd, gulp.dest(prodDir)))
});

gulp.task('js', () => {
  return gulp.src(['src/scripts/**/*', '!src/scripts/libs/*.js'])
  .pipe(gulpif(!isProd && !isWp, gulp.dest(destDir + 'assets/js/')))
  .pipe(gulpif(isProd && !isWp, gulp.dest(prodDir + 'assets/js/')))
  .pipe(gulpif(isWp, gulp.dest(wpDir + 'assets/js/')))
});

gulp.task('js-concat', function() {
  return gulp.src(['src/js/libs/*.js'])
  .pipe(concat('libs.js'))
  .pipe(gulpif(isProd, uglify({
    output:{
    comments: /^\/* /
    }
  })))
  .pipe(gulpif(!isProd, gulp.dest(destDir + 'assets/js/libs/')))
  .pipe(gulpif(isProd, gulp.dest(prodDir + 'assets/js/libs/')))
});

gulp.task('images', () => {
  return gulp.src(['src/images/**/*'])
  .pipe(gulpif(isProd, imagemin([
    pngquant({
      quality: [0.7, 0.85],
      speed: 1,
      floyd:0
    }),
    mozjpeg({
      quality: 85,
      progressive: true
    }),
    imagemin.optipng(),
    imagemin.gifsicle()
    ]
  )))
  .pipe(gulpif(!isProd && !isWp, gulp.dest(destDir + 'assets/images/')))
  .pipe(gulpif(isProd && !isWp, gulp.dest(prodDir + 'assets/images/')))
  .pipe(gulpif(isWp, gulp.dest(wpDir + 'assets/images/')))
});

gulp.task('svgstore', () => {
  return gulp.src(['src/svg/**/*.svg'])
  .pipe(svgmin((file) => {
    let prefix = path.basename(file.relative, path.extname(file.relative))
    return {
      plugins: [{
        cleanupIDs: {
          prefix: prefix + '-',
          minify: true
        }
      }]
    }
  }))
  .pipe(svgstore({
    inlineSvg: true
  }))
  .pipe(cheerio({
    run: function($) {
      $('[fill]').removeAttr('fill');
      $('[stroke]').removeAttr('stroke')
      $('svg').attr({
        'display': 'none',
        'xmlns:xlink': 'http://www.w3.org/1999/xlink'
      });
    },
    parserOptions: { xmlMode: true }
  }))
  .pipe(rename(path => {
    path.basename = 'icons'
  }))
  .pipe(gulpif(!isProd && !isWp, gulp.dest(destDir + 'assets/svg/')))
  .pipe(gulpif(isProd && !isWp, gulp.dest(prodDir + 'assets/svg/')))
  .pipe(gulpif(isWp, gulp.dest(wpDir + 'assets/svg/')))
});


gulp.task('build', gulp.series(
  gulp.parallel('ejs', 'sass', 'js', 'js-concat', 'images', 'svgstore')
));

gulp.task('default', gulp.series(
  gulp.parallel('browser-sync', 'sass', 'ejs', 'js', 'js-concat', 'images', 'svgstore', () => {
    watch(['src/styles/**/*.scss'], () => {
      return runSequence(
        'sass',
        'bs-reload'
      )
    });
    watch(['src/templates/**/*.ejs'], () => {
      return runSequence(
        'ejs',
        'bs-reload'
      )
    });
    watch(['src/scripts/*.js'], () => {
      return runSequence(
        'js',
        'bs-reload'
      )
    });
    watch(['src/js/libs/*.js'], () => {
      return runSequence(
        'js-concat',
        'bs-reload'
      )
    });
    watch(['src/images/**/*'], () => {
      return runSequence(
        'images',
        'bs-reload'
      )
    });
    watch(['src/svg/**/*'], () => {
      return runSequence(
        'svgstore',
        'bs-reload'
      )
    });
  })
));

gulp.task('wp',gulp.series(
  gulp.parallel('js','sass','images','svgstore'),
  gulp.parallel('js','sass','images','svgstore', () => {
    watch(['src/styles/**/*.scss'], () => {
      return runSequence(
        'sass'
      )
    });
    watch(['src/scripts/*.js'], () => {
      return runSequence(
        'js'
      )
    });
    watch(['src/images/**/*'], () => {
      return runSequence(
        'images'
      )
    });
    watch(['src/svg/**/*'], () => {
      return runSequence(
        'svgstore'
      )
    });
  })
))