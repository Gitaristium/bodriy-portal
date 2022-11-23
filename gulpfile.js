// подключаем модули
const { src, dest, watch, parallel, series } = require('gulp');
const browserSync = require('browser-sync').create();
const scss = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const del = require('del');
const ftp = require('vinyl-ftp');
const gutil = require('gulp-util');
const changed = require('gulp-changed');


// обработка html и php
function html() {
  return src([
    'app/**/*.html',
    'app/**/*.php'
  ])
    .pipe(changed('dist'))
    .pipe(dest('dist'))
    .pipe(browserSync.stream())
  // .pipe(dest('preFTP'))           //для разработки на хосте
}


// обработка fonts
function fonts() {
  return src([
    'app/assets/fonts/**/*.*'
  ])
    .pipe(changed('dist/assets/fonts'))
    .pipe(dest('dist/assets/fonts'))
    .pipe(browserSync.stream())
  // .pipe(dest('preFTP'))            //для разработки на хосте
}


// обработка стилей
function styles() {
  return src([
    'node_modules/normalize.css/normalize.css',
    // 'node_modules/fullpage.js/dist/fullpage.css',
    'node_modules/@fortawesome/fontawesome-free/css/all.css',
    // 'node_modules/animate.css/animate.min.css',
    'node_modules/slick-carousel/slick/slick.css',
    // 'node_modules/sweetalert2/dist/sweetalert2.css',
    'app/assets/scss/**/*.scss'
  ])
    .pipe(changed('dist/assets/css'))
    .pipe(scss())
    // .pipe(concat('main.css'))
    .pipe(autoprefixer({
      overrideBrowserlist: ['last 10 version'],
      grid: true
    }))
    .pipe(dest('dist/assets/css'))
    .pipe(browserSync.stream())
}

// обработка стилей для архива
function styles2() {
  return src([
    'app/archive/**/*.scss'
  ])
    .pipe(changed('dist/archive'))
    .pipe(scss())
    .pipe(autoprefixer({
      overrideBrowserlist: ['last 10 version'],
      grid: true
    }))
    .pipe(dest('dist/archive'))
    .pipe(browserSync.stream())
}

// обработка скриптов
function scripts() {
  return src([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/js-cookie/src/js.cookie.js',
    // 'node_modules/fullpage.js/vendors/scrolloverflow.js',
    // 'node_modules/fullpage.js/dist/fullpage.js',
    'node_modules/slick-carousel/slick/slick.js',
    // 'node_modules/sweetalert2/dist/sweetalert2.all.js',
    'app/assets/js/**/*.js'
  ])
    .pipe(changed('dist/assets/js'))
    // .pipe(concat('main.js'))
    // .pipe(uglify())
    .pipe(dest('dist/assets/js'))
    .pipe(browserSync.stream())
  // .pipe(dest('preFTP/assets/js'))  //для разработки на хосте
}

// обработка скриптов для архива
function scripts_to_archive() {
  return src([
    'app/archive/**/*.js'
  ])
    .pipe(changed('dist/archive'))
    .pipe(dest('dist/archive'))
    .pipe(browserSync.stream())
}


// обработка картинок
function images() {
  return src('app/assets/img/**/*')
    .pipe(changed('dist/assets/img'))
    .pipe(dest('dist/assets/img'))
    .pipe(browserSync.stream())
}

// обработка картинок для архива
function images_to_archive() {
  return src('app/archive/**/*')
    .pipe(changed('dist/archive'))
    .pipe(dest('dist/archive'))
    .pipe(browserSync.stream())
}


// обновление страницы
function browsersync() {
  browserSync.init({
    server: {
      // proxy: 'portal.fufuter.ru'
      baseDir: "dist/"
    }
  });
}

// слежение за изменениями
function watching() {
  watch(['app/**/*.html', 'app/**/*.php'], series(html));
  watch(['app/assets/scss/**/*.scss'], series(styles));
  watch(['app/archive/**/*.scss'], series(styles2));
  watch(['app/assets/js/**/*.js', '!app/js/main.min.js'], series(scripts));
  watch(['app/archive/**/*.js', '!app/js/main.min.js'], series(scripts_to_archive));
  watch(['app/assets/img/**/*.*'], series(images));
  watch(['app/archive/**/*.*'], series(images_to_archive));
  watch(['app/assets/fonts/**/*.*'], series(fonts));
}

// очистка перед билдом
function clean() {
  console.log('MY_LOG: чистим директорию')
  return del('dist/**/*.*');
}

// список функций для терминала
exports.default = series(parallel(html, styles, styles2, scripts, scripts_to_archive, images, images_to_archive, fonts), parallel(browsersync, watching));
exports.dist = series(clean, html, styles, styles2, scripts, scripts_to_archive, images, images_to_archive, fonts);