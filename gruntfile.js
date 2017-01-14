module.exports = function(grunt) {
	require('load-grunt-tasks')(grunt);
	grunt.initConfig({
		concat : {
			options : {
				separator : '\n\n//==================================================\n\n'
			},
			dist : {
				src	: '/dev/_js/**/*.js',
				dest: '/dev/_js/script.js'
			},
			prod : {
				files: {
					'prod/_js/script.js': ['dev/_js/*.js','dev/_js/helper/*.js']
				}
			},
		},
		less : {
			development : {
				files : {
					'dev/_css/main.css' : 'dev/_less/theme/compile.less'
				}
			},
			prod : {
				files : {
					'prod/_css/main.css' : 'dev/_less/theme/compile.less'
				},
				options : {
					compress : true,
					sourceMap : true,
					sourceMapFilename : 'prod/_css/main.map.css',
					banner : "/*******************/"
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
	      map: true,
	      processors: [
	        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
	      ]
	    },
	    dist: {
	      src: 'dev/_css/main.css'
	    },
			prod: {
				src: 'prod/_css/main.css'
			}
	  },
		modernizr: {
		  dist: {
		    "dest" : "build/modernizr-custom.js",
		    "tests": [
		      'flexbox'
		    ],
		    "options": [
		      "setClasses"
		    ],
		    "uglify": true
		  }
		},
		htmlmin : {
			options : {
				collapseInlineTagWhitespace: true,
				collapseWhitespace: true,
				removeComments: true,
				minifyCSS: true,
				minifyJS: true,
				removeRedundantAttributes: true,
				removeStyleLinkTypeAttributes: true,
			},
			prod : {
				files : [{
            expand: true,
            cwd: 'dev/',
            src: '**/*.php',
            dest: 'prod/'
        }],
			},
			dev : {
				files : {
					'prod/contact.php' : 'dev/contact.php'
				}
			}
		},
		uglify: {
			options: {
	      mangle: true,
				beautify: false
	    },
	    prod: {
	      files: {
	        'prod/_js/script.js': ['dev/_js/*.js','dev/_js/helper/*.js']
	      }
	    }
	  },
		image: {
      static: {
        options: {
          jpegRecompress: false,
          jpegoptim: true,
          mozjpeg: true
        },
        files: {
          'prod/_images/air-triangulated.jpg': 'dev/_images/air-triangulated.jpg'
        },
      },
		},
	}); // initConfig

	// register tasks
	// Default
	grunt.registerTask('default',['less:development','postcss','watch']);

	// Prod
	grunt.registerTask('prod',['concat:prod','uglify','modernizr','image','less:prod','postcss:prod'])
	// grunt.registerTask('reload',['reload','watch']);

}; // wrapper function
