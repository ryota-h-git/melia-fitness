const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");
const browserSync = require("browser-sync");

function compileSass() {
  return gulp
    .src("./src/assets/sass/style.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssSorter({ order: "alphabetical" })]))
    .pipe(mmq())
    .pipe(gulp.dest("./public/assets/css"))
    .pipe(browserSync.stream());
}
function watch() {
  browserInit();
  gulp.watch("./src/assets/sass/**/*.scss", compileSass);
  gulp.watch("./**/*.php").on("change", browserSync.reload);
}
function browserInit() {
  browserSync.init({
    proxy: "http://melia.local/",
    files: [
      "./**/*.php", // PHPファイルが更新されたらリロード
      "./public/assets/css/**/*.css",
    ],
    notify: false,
  });
}

exports.default = watch;
exports.browserInit = browserInit;
