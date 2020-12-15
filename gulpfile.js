//初期設定(gulp4)
const gulp     = require('gulp'),//gulp呼び出し
			sass     = require('gulp-sass'),//gulpでsassを利用するプラグイン
			cssmin   = require('gulp-cssmin'),//gulpでcssを圧縮するプラグイン
			uglify   = require('uglify-es'),//javascriptを圧縮するプラグイン
			composer = require('gulp-uglify/composer'),
			minify   = composer(uglify),
			//end javascriptを圧縮するプラグイン
			order    = require('gulp-order'),//ファイルの順番を決めるプラグイン
			rimraf   = require('rimraf'),//ファイルを削除するプラグイン
			concat   = require('gulp-concat'),//javascriptファイルをまとめて1つのファイルにするプラグイン
			rename   = require('gulp-rename'),//gulpで出力したファイルをリネームするプラグイン
			plumber  = require('gulp-plumber'),//エラー時に処理を止めないプラグイン
			browserSync = require('browser-sync'),//ブラウザにリアルタイムに更新処理を反映
			paths = {
				html: {
					src: 'application/views/**/*.blade.php'
				},
				styles: {
					src: 'build/scss/**/*.scss',
					dest: 'public/css/'
				},
				scripts: {
					src: 'build/js/**/*.js',
					dest: 'public/js/',
					core: [//ファイル読込指定
						'build/js/common/core/jquery.js',
						'build/js/common/core/jquery.cookie.js',
						'build/js/common/core/jquery-ui.min.js',
						'build/js/common/core/jquery.ui.datepicker-ja.js',
						'build/js/common/core/jquery.dataTables.min.js'
					],
					common: 'build/js/common/**/*.js',
					file: ['build/js/**/*.js', '!build/js/common/**/*.js', '!build/js/common/core/**/*.js'],
					json: 'build/js/**/*.json',
				}
			};
			// reload   = browserSync.reload;

//HTML Task
function html() {
	return gulp.src(paths.html.src);
}

// Sass Task
function styles() {
	return gulp.src(paths.styles.src, { sourcemaps: true })
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(cssmin())//CSS圧縮 利用しない場合はコメントアウトする
		.pipe(gulp.dest(paths.styles.dest));
}

// Javascript Task
function scriptsCore() {
	return gulp
		.src(paths.scripts.common, { sourcemaps: true })
		.pipe(order(paths.scripts.core, { base: './' }))
		.pipe(plumber())
		.pipe(concat('core.js'))
		.pipe(minify())//JS圧縮 利用しない場合はコメントアウトする
		.pipe(
			rename({
				suffix: '.min'
			})
		)
		.pipe(gulp.dest(paths.scripts.dest));
}
function scripts() {
	return gulp
		.src(paths.scripts.file, { sourcemaps: true })
		.pipe(plumber())
		.pipe(minify())//JS圧縮 利用しない場合はコメントアウトする
		.pipe(gulp.dest(paths.scripts.dest));
}
function scriptsJson() {
	return gulp.src(paths.scripts.json)
	.pipe(plumber())
	.pipe(gulp.dest(paths.scripts.dest));
}

// ローカルサーバーの立ち上げ
const browserSyncOption = {
	port: 8888,
	open: 'external',
	browser: ["chrome"],//, "firefox"
	proxy: {
		target: "http://pre.zenkosai.jp/",
	},
	reloadOnRestart: true
};
function sync(done) {
	browserSync.init(browserSyncOption);
	done();
}
// リロード処理
function watchFiles(done) {
	const browserReload = () => {
		browserSync.reload();
		done();
	};
	gulp.watch(paths.html.src).on('change', gulp.series(html, browserReload));
	gulp.watch(paths.styles.src).on('change', gulp.series(styles, browserReload));
	gulp.watch(paths.scripts.src).on('change', gulp.series(scriptsCore, scripts, scriptsJson, browserReload));
}
//gulp task
gulp.task('default', gulp.series(gulp.parallel(scriptsCore, scripts, scriptsJson, styles, html), gulp.series(sync, watchFiles)));