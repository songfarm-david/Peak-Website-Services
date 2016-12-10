module.exports = function(grunt) {

	grunt.initConfig({
		concat : {
			options : {
				separator : '\n\n//==================================================\n\n'
			},
			dist : {
				src	: '/development/_js/**/*.js',
				dest: '/development/_js/script.js'
			}
		},
		less : {
			development : {
				files : {
					'development/_css/main.css' : 'development/_less/theme/compile.less'
				}
			}
		},
		jshint : {
			dev : ['gruntfile.js','development/_js/script.js']
		},
		watch : {
			options : {
				spawn : false,
				livereload : true
			},
			scripts : {
				files : ['development/_js/**/*.js'],
				tasks : ['concat']
			},
			less : {
				files : ['development/_less/**/*.less'],
				tasks : ['less']
			},
			markUp : {
				files : ['development/**/*.html','development/**/*.php']
			}
		}
	}); // initConfig

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-jshint');

	// register tasks
	grunt.registerTask('default',['concat','less','watch']);

}; // wrapper function
