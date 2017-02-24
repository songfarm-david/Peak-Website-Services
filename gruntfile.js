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
				options : {
					compress : false,
					sourceMap : true,
					sourceMapFilename : 'dev/_css/main.map.css',
					banner : "/*******************/"
				},
				files : {
					'dev/_css/index.css' : 'dev/_less/index.less',
					'dev/_css/contact.css' : 'dev/_less/contact.less',
					'dev/_css/service-index.css' : 'dev/_less/service-index.less',
					'dev/_css/service-pages.css' : 'dev/_less/service-pages.less',
					'dev/_css/portfolio.css' : 'dev/_less/portfolio.less'
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
					'prod/_css/index.css' : 'dev/_less/index.less',
					'prod/_css/contact.css' : 'dev/_less/contact.less',
					'prod/_css/service-index.css' : 'dev/_less/service-index.less',
					'prod/_css/service-pages.css' : 'dev/_less/service-pages.less',
					'prod/_css/portfolio.css' : 'dev/_less/portfolio.less'
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
			dev : {
				files : {
					'prod/_includes/header.php' : 'dev/_includes/header.php'
				}
			},
			prod : {
				files : [{
            expand: true,
            cwd: 'dev/',
            src: ['**/*.php','_includes/*.php'],
            dest: 'prod/'
        }],
			},
			// includes: {
			// 	cwd: 'dev/',
			// 	src: ''
			// },
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
		// image: {
    //   static: {
		// 		options: {
    //       pngquant: true,
    //       optipng: false,
    //       zopflipng: true,
    //       jpegRecompress: true,
    //       jpegoptim: true,
    //       mozjpeg: true,
    //       gifsicle: true,
    //       svgo: true
    //     },
    //     files: {
    //       'prod/_images/air-triangulated.jpg': 'dev/_images/air-triangulated.jpg',
		// 			'prod/_images/blue-ball.svg' : 'dev/_images/blue-ball.svg',
		// 			'prod/_images/' : 'dev/_images/branding/peak-website-cover.jpg'
    //     },
    //   },
		// },
		imagemin: {
			static: {
				files: {
					// 'prod/_images/air-triangulated.jpg': 'dev/_images/air-triangulated.jpg',
					// 'prod/_images/blue-ball.svg' : 'dev/_images/blue-ball.svg',
					// 'prod/_images/peak-website-cover.jpg' : 'dev/_images/peak-website-cover.jpg'
				}
			},
		},
		// pngmin is not a default task
		pngmin: {
			compile: {
				options: {
					ext: '.png',
					force: 'true'
				},
				files: [
					{
						src: 'dev/_images/portfolio/*.png',
						dest: 'prod/_images/portfolio'
					}
				]
			}
		},
		replace : {
			build : {
				src: ['prod/_includes/*.php'],
				dest: 'prod/_includes/',
				replacements: [{
					from: '/peak/dev',
					to: ''
				}, {
					from: '../node_modules',
					to: '/node_modules'
				}, {
					from: '../build',
					to: '/build'
				}, {
					// remove live reload text
					from: '<script src="//localhost:35729/livereload.js"></script>',
					to: ''
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
				src: 'prod/_css/index.css',
				dest: 'prod/_css/index.css',
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
		// 'image',
		'uglify',
		'htmlmin:prod',
		'replace',

	]);

}; // wrapper function
