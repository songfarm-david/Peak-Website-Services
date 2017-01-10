module.exports = function(grunt) {

	grunt.initConfig({
		concat : {
			options : {
				separator : '\n\n//==================================================\n\n'
			},
			dist : {
				src	: '/dev/_js/**/*.js',
				dest: '/dev/_js/script.js'
			}
		},
		less : {
			development : {
				files : {
					'dev/_css/main.css' : 'dev/_less/theme/compile.less'
				}
			}
		},
		jshint : {
			dev : ['gruntfile.js','dev/_js/script.js']
		},
		watch : {
			options : {
				spawn : false,
				livereload : true
			},
			scripts : {
				files : ['dev/_js/**/*.js'],
				tasks : ['concat']
			},
			less : {
				files : ['dev/_less/**/*.less'],
				tasks : ['less']
			},
			markUp : {
				files : ['dev/**/*.html','dev/**/*.php']
			}
		}
	}); // initConfig

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-jshint');

	// register tasks
	grunt.registerTask('default',['less','watch']);

}; // wrapper function
