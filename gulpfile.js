/**
 * Created by Jasper van Hienen
 * For: JVH-Site
 * Date: September 18 2018
 * Time: 00:21
 */

'use strict';

let gulp = require("gulp"),
	plumber = require('gulp-plumber'),
	sass = require('gulp-sass'),
	notify = require("gulp-notify");

const path = {
	sass: {
		src: "resources/sass/**/**/*.scss",
		destination: "public/css"
	}
};

gulp.task('default', ['sass', 'watch']);

gulp.task("watch", () => {
	gulp.watch(path.sass.src, ["sass"]);
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



