module.exports = function (grunt) {

	require('time-grunt')(grunt);
	require('jit-grunt')(grunt);

	grunt.initConfig({
		sass: {
			options: {
				sourceMap: true,
				sourceMapContents: true
			},
			dist: {
				files: {
					'Resources/Public/Css/slick.min.css': 'Resources/Public/Css/slick.scss'
				}
			}
		},
		shell: {
			bower: {
				command: 'cd Resources/Public && bower update'
			}
		},
		postcss: {
			options: {
				map: {
					inline: false,
					annotation: 'Resources/Public/Css/'
				},

				processors: [
					require('pixrem')(),
					require('autoprefixer')({browsers: 'last 2 versions'}),
					require('cssnano')()
				]
			},
			dist: {
				src: 'Resources/Public/Css/slick.min.css'
			}
		}

	});
	grunt.registerTask('default', ['shell','sass','postcss']);
};
