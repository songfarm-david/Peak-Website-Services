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
		},
		postcss: {
	    options: {
	      map: true, // inline sourcemaps

	      // or
	      map: {
	          inline: true, // save all sourcemaps as separate files...
	          annotation: 'dev/_css/maps/' // ...to the specified directory
	      },

	      processors: [
	        //require('pixrem')(), // add fallbacks for rem units
	        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
	        //require('cssnano')() // minify the result
	      ]
	    },
	    dist: {
	      src: 'dev/_css/main.css'
	    }
	  }
	}); // initConfig

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-postcss');
	// register tasks
	grunt.registerTask('default',['less','postcss','watch']);
	// grunt.registerTask('reload',['reload','watch']);

}; // wrapper function
