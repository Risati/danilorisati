var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require("gulp-uglify"),
    concat = require("gulp-concat"),
    cleanCSS = require('gulp-clean-css'),
    browserSync = require('browser-sync'),
    php  = require('gulp-connect-php'),
    autoprefixer = require('gulp-autoprefixer');


var js  = [
    './dist/js/*.js',
];
var css = [
  './dist/css/*.css'
];

var source = 'dist/',
    dest = 'assets/';

var bootstrapSass = {
  in: './node_modules/bootstrap-sass/'
};

var scss = {
    in: source + 'css/style.scss',
    out: dest + 'css/',
    watch: source + 'css/style.scss',
    sassOpts: {
        outputStyle: 'compressed',
        precison: 3,
        errLogToConsole: true,
        includePaths: [bootstrapSass.in + 'assets/stylesheets']
    }
};

var autoprefixerOptions = {
  browsers: ['last 10 versions', '> 5%', 'Firefox ESR']
};

gulp.task('minify-js', function () {
    gulp.src(js)
        .pipe(concat('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'));
});


gulp.task('sass', function () {
    return gulp.src(scss.in)
        .pipe(sass(scss.sassOpts).on('error', sass.logError))
        .pipe(concat('style.min.css'))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest(scss.out ))
        .pipe(browserSync.stream());
});

gulp.task('sass-responsive', function(){
	return gulp.src('./dist/css/responsive.scss')
		.pipe(sass(scss.sassOpts).on('error', sass.logError))
		.pipe(concat('responsive.min.css'))
		.pipe(gulp.dest('./assets/css'))
		.pipe(browserSync.stream());
});

gulp.task('minify-css', function(){
  return gulp.src(css)
    .pipe(cleanCSS({debug: true}, function(details) {
         console.log(details.name + ': ' + details.stats.originalSize);
         console.log(details.name + ': ' + details.stats.minifiedSize);
     }))
    .pipe(concat('plugins.min.css'))
    .pipe(gulp.dest('./assets/css'))

});

gulp.task('php', function() {
    php.server({ base: './', port: 80, keepalive: true});
});

gulp.task('server', function() {
    browserSync.init({
      proxy: 'localhost/danilorisati',
			port: 8080,
			open: true,
			notify: false,
			//browser: 'Firefox'
    });

		/* CHANGE TO gulp.watch('*\/**')*/
});

gulp.task('reload-browser',['watch'], function () {
	gulp.watch('dist/css/*.scss').on('change', browserSync.reload);
	gulp.watch('dist/css/*.css').on('change', browserSync.reload);
});

gulp.task('default',['watch', 'server']);

gulp.task('watch', function() {
  gulp.watch(js,  ['minify-js']);
  gulp.watch(css, ['minify-css']);
	gulp.watch('./dist/css/*.scss',['sass']);
	gulp.watch('./dist/css/responsive.scss', ['sass-responsive']);
	gulp.watch('**/*.php').on('change', browserSync.reload);
	gulp.watch('dist/js/*.js').on('change', browserSync.reload);
});
