const { series, parallel, src, dest, watch } = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const browserSync = require("browser-sync");
const buffer = require("vinyl-buffer");
const browserify = require("browserify");
const concat = require("gulp-concat");
const cleanCSS = require("gulp-clean-css");
const gulp = require("gulp");
const globby = require("globby");
const log = require("gulplog");
const notify = require("gulp-notify");
const plumber = require("gulp-plumber");
const purgeCss = require("gulp-purgecss");
const rename = require("gulp-rename");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const source = require("vinyl-source-stream");
const through = require("through2");
const uglify = require("gulp-uglify-es").default;
// "gulp-uglify-es": "^2.0.0",

// create the browsersync server
const server = browserSync.create();

// set up the proxy url and resource url
const proxyURL = "https://lookingglass.test";
const themeURL = "web/app/themes/frogspark/";

let javascript = () => {
  var bundledStream = through();

  bundledStream
    .pipe(source(`bundle.min.js`))
    .pipe(buffer())
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(uglify())
    .on("error", log.error)
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(`${themeURL}js/dist/`))
    .pipe(server.stream());

  globby([`${themeURL}js/src/Global.js`])
    .then((entries) => {
      let b = browserify({
        entries: entries,
        debug: true,
        insertGlobals: true,
      });

      // .transform("babelify", {
      //   presets: ["@babel/preset-env"],
      // });

      b.bundle().pipe(bundledStream);
    })
    .catch((err) => {
      bundledStream.emit("error", err);
    });

  return bundledStream;
};

function styles() {
  const onError = (err) => {
    notify({
      title: "Gulp Task Error",
      message: "Gulp Task errored, check console",
    }).write(err);
    console.log(err.toString());
  };

  server.notify("Compiling SCSS");

  return src(`${themeURL}scss/src/styles.scss`)
    .pipe(concat("bundle.min.scss"))
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    // .pipe(
    //   purgeCss({
    //     content: [`${themeURL}inc/*.php`, `${themeURL}*.php`],
    //     keyframes: true,
    //     FontFace: true,
    //     // safeList: [
    //     //   "active",
    //     //   "scroll",
    //     //   "scrolled",
    //     //   "open",
    //     //   "slick-arrow",
    //     //   "slick-dots",
    //     //   "slick-dot",
    //     //   "slick-slide",
    //     //   "slick-list",
    //     //   "slick-current",
    //     //   "slick-active",
    //     //   "slick-track",
    //     //   "slick-initialized",
    //     //   "slick-slider",
    //     //   "slick-dotted",
    //     //   "draggable",
    //     // ],
    //   })
    // )
    .pipe(cleanCSS())
    .pipe(autoprefixer())
    .pipe(rename("bundle.min.css"))
    .pipe(dest(`${themeURL}scss/dist`))
    .pipe(server.stream());
}

function fonts() {
  return src("node_modules/@fortawesome/fontawesome-pro/webfonts/*").pipe(
    dest(`${themeURL}scss/webfonts`)
  );
}

function browsersync() {
  server.init({
    proxy: proxyURL,
  });

  watch(`${themeURL}scss/src/**/*.scss`, styles);
  watch(`${themeURL}js/src/*.js`, javascript);
  watch(`${themeURL}**/*.php`).on('change', server.reload);
}

const development = series(fonts, styles, javascript, browsersync);
const production = parallel(fonts, styles, javascript);

exports.production = production;
exports.default = development;
