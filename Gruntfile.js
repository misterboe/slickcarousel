module.exports = function (grunt) {
    require('jit-grunt')(grunt);
    require('time-grunt')(grunt);


    grunt.initConfig({
        watch: {
            sass: {
                files: ['Resources/Public/Css/*.scss'],
                tasks: ['default'],
                options: {
                    spawn: false,
                }
            }
        },
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
                    require('autoprefixer')({browsers: 'last 2 versions'}),
                    require('cssnano')()
                ]
            },
            dist: {
                src: 'Resources/Public/Css/slick.min.css'
            }
        }

    });
    grunt.registerTask('default', ['shell', 'sass', 'postcss', 'watch']);
};
