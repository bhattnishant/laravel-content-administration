const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').sass(
	'resources/sass/app.scss',
	'public/css'
);

mix.webpackConfig({
	resolve: {
		alias: {
			'@fj-js': path.resolve(__dirname, 'resources/js/'),
			'@fj-sass': path.resolve(__dirname, 'resources/sass/'),
		},
	},
});
