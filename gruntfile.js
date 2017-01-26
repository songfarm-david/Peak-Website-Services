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
			dev : {
				files : {
					'dev/_css/index.css' : 'dev/_less/index.less',
					'dev/_css/contact.css' : 'dev/_less/contact.less',
					'dev/_css/service-index.css' : 'dev/_less/service-index.less',
					'dev/_css/service-pages.css' : 'dev/_less/service-pages.less'

				}
			},
			prod : {
				options : {
					compress : true,
					sourceMap : true,
					sourceMapFilename : 'prod/_css/main.map.css',
					banner : "/*******************/"
				},
				files : {
					// 'prod/_css/main.css' : 'dev/_less/theme/compile.less',
					'prod/_css/index.css' : 'dev/_less/index.less',
					'prod/_css/contact.css' : 'dev/_less/contact.less',
					'prod/_css/service-index.css' : 'dev/_less/service-index.less',
					'prod/_css/service-pages.css' : 'dev/_less/service-pages.less'

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
	    dev: {
	      src: 'dev/_css/*.css'
	    },
			prod: {
				src: ['prod/_css/*.css','!prod/_css/*.map.css']
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
				// collapseInlineTagWhitespace: true,
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
					'prod/_includes/navigation.php' : 'dev/_includes/navigation.php'
				}
			}
		},
		uglify: {
			options: {
	      mangle: false,
				beautify: true
	    },
	    prod: {
	      files: {
	        'prod/_js/script.js': 'dev/_js/*.js',
	      }
	    }
	  },
		image: {
      static: {
				options: {
          pngquant: true,
          optipng: false,
          zopflipng: true,
          jpegRecompress: true,
          jpegoptim: true,
          mozjpeg: true,
          gifsicle: true,
          svgo: true
        },
        files: {
          'prod/_images/air-triangulated.jpg': 'dev/_images/air-triangulated.jpg',
					'prod/_images/blue-ball.svg' : 'dev/_images/blue-ball.svg',
        },
      },
		},
		replace : {
			build : {
				src: ['dev/_includes/header.php','dev/_includes/footer.php', 'dev/_includes/navigation.php'],
				dest: 'prod/_includes/',
				// '../process-form.php' => '/process-form.php'
				replacements: [{
					from: '/peak/dev',
					to: ''
				}, {
					from: '../node_modules',
					to: '/node_modules'
				}, {
					from: '../build',
					to: '/build'
				}]
			},
			contactform: {
				src: 'dev/contact.php',
				dest: 'prod/contact.php',
				replacements: [{
					from: '../process-form.php',
					to: '/process-form.php'
				}]
			},
			images: {
				src: 'dev/_less/index.less',
				dest: 'dev/_less/index.less',
				replacements: [{
					from: '../dev',
					to: ''
				}]
			}
		}
	}); // initConfig

	// register tasks
	// Default
	grunt.registerTask('default',['less:dev','postcss:dev','watch']);

	// Prod
	grunt.registerTask('prod',[
		'modernizr',
		'concat:prod',
		'less:prod',
		'postcss:prod',
		'image',
		'uglify',
		'htmlmin:prod',
		'replace',
	]);

}; // wrapper function
