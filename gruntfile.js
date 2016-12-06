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
					'/development/_css/main.css' : '_less/theme/compile.less'
				}
			}
		}
	}); // initConfig
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.registerTask('default',['concat','less']);
}; // wrapper function
