// подключаем модули
const { src, dest, watch, parallel, series } = require('gulp');
const browserSync = require('browser-sync').create();
const scss = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const imagemin = require('gulp-imagemin');
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
    .pipe(dest('dist'))          //для разработки локально
    .pipe(browserSync.stream())  //для разработки локально
  // .pipe(dest('preFTP'))           //для разработки на хосте
}


// обработка fonts
function fonts() {
  return src([
    'app/assets/fonts/**/*.*'
  ])
    .pipe(changed('dist/assets/fonts'))
    .pipe(dest('dist/assets/fonts'))  //для разработки локально
    .pipe(browserSync.stream())       //для разработки локально
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
    .pipe(dest('dist/assets/css')) //для разработки локально
    .pipe(browserSync.stream())      //для разработки локально
  // .pipe(dest('preFTP/assets/css'))  //для разработки на хосте
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
    .pipe(dest('dist/archive')) //для разработки локально
    .pipe(browserSync.stream())      //для разработки локально
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
    .pipe(dest('dist/assets/js'))  //для разработки локально
    .pipe(browserSync.stream())    //для разработки локально
  // .pipe(dest('preFTP/assets/js'))  //для разработки на хосте
}

// обработка скриптов для архива
function scripts2() {
  return src([
    'app/archive/**/*.js'
  ])
    .pipe(changed('dist/archive'))
    .pipe(dest('dist/archive'))  //для разработки локально
    .pipe(browserSync.stream())    //для разработки локально
}


// обработка картинок
function images() {
  return src('app/assets/img/**/*')
    .pipe(changed('dist/assets/img'))
    // .pipe(imagemin([
    //   imagemin.gifsicle({ interlaced: true }),
    //   imagemin.mozjpeg({ quality: 75, progressive: true }),
    //   imagemin.optipng({ optimizationLevel: 5 }),
    //   imagemin.svgo({
    //     plugins: [
    //       { removeViewBox: true },
    //       { cleanupIDs: false }
    //     ]
    //   })
    // ]))
    .pipe(dest('dist/assets/img')) //для разработки локально
    .pipe(browserSync.stream())    //для разработки локально
  // .pipe(dest('preFTP/assets/img'))  //для разработки на хосте
}

// обработка картинок для архива
function images2() {
  return src('app/archive/**/*')
    .pipe(changed('dist/archive'))
    .pipe(dest('dist/archive')) //для разработки локально
    .pipe(browserSync.stream())    //для разработки локально
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


// выгрузка на сервер
function deploy() {
  var conn = ftp.create({
    host: 'ftp.fufu676279.nichost.ru.',
    user: 'fufu676279_ftp',
    password: 'oVfqIYxzvv',
    parallel: 10,
    log: gutil.log
  });

  var globs = [
    './dist/**/*.*',
  ];
  return src(globs, { base: './dist', buffer: false })
    .pipe(conn.newer('/portal.fufuter.ru/docs'))
    .pipe(conn.dest('/portal.fufuter.ru/docs'))
}


// очистка локального кеша после выгрузки на сервер
function cleanPreFtp() {
  console.log('MY_LOG: cleanPreFtp is running')
  return del('preFTP/**/*.*');
}


// слежение за изменениями
function watching() {
  watch(['app/**/*.html', 'app/**/*.php'], series(html));
  watch(['app/assets/scss/**/*.scss'], series(styles));
  watch(['app/archive/**/*.scss'], series(styles2));
  watch(['app/assets/js/**/*.js', '!app/js/main.min.js'], series(scripts));
  watch(['app/archive/**/*.js', '!app/js/main.min.js'], series(scripts2));
  watch(['app/assets/img/**/*.*'], series(images));
  watch(['app/archive/**/*.*'], series(images2));
  watch(['app/assets/fonts/**/*.*'], series(fonts));
  // watch(['preFTP/**/*.*'], series(deploy, cleanPreFtp)); //для разработки на хосте
}


// список функций для терминала
exports.default = series(parallel(html, styles, styles2, scripts, scripts2, images, images2, fonts), parallel(browsersync, watching));  //для разработки локально
// exports.default = series(parallel(html, styles, scripts, fonts), parallel(watching));  //для разработки локально
// exports.default = series(parallel(html, styles, scripts, fonts), watching);  //для разработки на хосте
exports.dist = series(html, styles, styles2, scripts, scripts2, images, images2, fonts);
exports.deploy = series(deploy);