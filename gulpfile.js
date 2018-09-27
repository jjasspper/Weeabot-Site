/**
 * Created by Jasper van Hienen
 * For: JVH-Site
 * Date: September 18 2018
 * Time: 00:21
 */

'use strict';

var gulp = require("gulp"),
    plumber = require('gulp-plumber'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    amdOptimize = require('amd-optimize'),
    concat = require('gulp-concat'),
    remember = require('gulp-remember'),
    cache = require('gulp-cached'),
    notify = require("gulp-notify");

var path = {
    sass: {
        src: "resources/sass/**/**/*.scss",
        destination: "public/css"
    },
    script: {
        src: "resources/js/**/*.js",
        baseSrc: "resources/js",
        destination: "public/js"
    }
};

gulp.task('default', ['sass', 'script', 'watch']);

gulp.task("watch", function () {
    gulp.watch(path.sass.src, ["sass"]);
    gulp.watch(path.script.src, ["script"]);
});

gulp.task("sass", function () {
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

gulp.task("script", function () {
    gulp.src(path.script.src)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err.message);
                this.emit("end");
            }
        }))
        //.pipe(cache("scripts"))
        .pipe(amdOptimize("app",
            {
                name: "app",
                configFile: "resources/js/app.js",
                baseUrl: path.script.baseSrc
            }
        ))
        //.pipe(remember("scripts"))
        .pipe(concat("app.js"))
        //.pipe(uglify())
        .pipe(gulp.dest(path.script.destination))
        .pipe(notify({
            message: "Scripts compiled!",
            onLast: true
        }));
});

