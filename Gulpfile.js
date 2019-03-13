const gulp = require('gulp');
const sass = require('gulp-sass');
const checktextdomain = require('gulp-checktextdomain');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const pump = require('pump');

//gulp-sass: https://www.npmjs.com/package/gulp-sass
gulp.task('styles', function() {
	gulp.src('css/sass/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('.'))
});

//gulp-checktextdomain: https://www.npmjs.com/package/gulp-checktextdomain
gulp.task('checktextdomain', function() {
	return gulp
		.src('**/*.php')
		.pipe(checktextdomain({
			text_domain: 'tackle', //Specify allowed domain(s)
			keywords: [ //List keyword specifications
				'__:1,2d',
				'_e:1,2d',
				'_x:1,2c,3d',
				'esc_html__:1,2d',
				'esc_html_e:1,2d',
				'esc_html_x:1,2c,3d',
				'esc_attr__:1,2d',
				'esc_attr_e:1,2d',
				'esc_attr_x:1,2c,3d',
				'_ex:1,2c,3d',
				'_n:1,2,4d',
				'_nx:1,2,4c,5d',
				'_n_noop:1,2,3d',
				'_nx_noop:1,2,3c,4d'
			],
		}));
});

// gulp-autoprefixer: https://www.npmjs.com/package/gulp-autoprefixer
gulp.task('default', () =>
	gulp.src('*.css')
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('dist'))
);

// gulp-uglify: https://www.npmjs.com/package/gulp-uglify
gulp.task('compress', function (cb) {
	pump([
			gulp.src('js/*.js'),
			uglify(),
			gulp.dest('dist')
		],
		cb
	);
});

//Watch task
gulp.task('default',function() {
	gulp.watch('css/sass/*.scss',['styles']);
});
