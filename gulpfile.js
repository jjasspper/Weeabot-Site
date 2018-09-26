/**
 * Created by Jasper van Hienen
 * For: JVH-Site
 * Date: September 18 2018
 * Time: 00:21
 */

'use strict';

let gulp = require("gulp"),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    ts = require('gulp-typescript'),
    notify = require("gulp-notify");

const path = {
    sass: {
        src: "resources/sass/**/**/*.scss",
        destination: "public/css"
    },
    typescript: {
        src: "resources/ts/**/**/*.ts",
        destination: "public/js"
    }
};

let tsProject = ts.createProject(`${path.typescript.src}/tsconfig.json`);

gulp.task('default', ['typescript', 'sass', 'watch']);

gulp.task("watch", () => {
    gulp.watch(path.sass.src, ["sass"]);
    gulp.watch(path.typescript.src, ["typescript"]);
});

gulp.task('sass', () => {
    gulp.src(path.sass.src)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err.message);
                this.emit("end");
            }
        }))
        .pipe(sass())
        .pipe(gulp.dest(path.sass.destination))
        .pipe(notify({
            message: "Sass compiled!",
            onLast: true
        }));
});

gulp.task('typescript', () => {
    gulp.src(path.typescript.src)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err.message);
                this.emit("end");
            }
        }))
        .pipe(tsProject())
        .pipe(gulp.dest(path.typescript.destination))
        .pipe(notify({
            message: "Typescript compiled!",
            onLast: true
        }));
});



