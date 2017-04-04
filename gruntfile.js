module.exports = function(grunt) {
	require('load-grunt-tasks')(grunt);
	grunt.initConfig({
		concat : {
			options : {
				separator : '\n\n//==================================================\n\n'
			},
			prod : {
				files: {
					'prod/_js/script.js': ['dev/_js/script.js','dev/_js/helper/*.js']
				}
			},
		},
		less : {
			dev : {
				options : {
					compress : false,
					sourceMap : true,
				},
				files: [
					{
						expand: true,
						cwd: 'dev/_less', // 'src' matches are relative to this path
						src: ['*.less'],	// Actual pattern(s) to match
						dest: 'dev/_css',	// Destination relative to gruntfile.js
						ext: '.css'				// Destination filepaths will have this extension
					}
				],
			},
			prod : {
				options : {
					compress : true,
					sourceMap : true,
				},
				files : {
					'prod/_css/index.css' : 'dev/_less/index.less',
					'prod/_css/contact.css' : 'dev/_less/contact.less',
					'prod/_css/service-index.css' : 'dev/_less/service-index.less',
					'prod/_css/service-pages.css' : 'dev/_less/service-pages.less',
					'prod/_css/portfolio.css' : 'dev/_less/portfolio.less'
				}
			},
		},
		jshint : {
			dev : ['gruntfile.js','dev/_js/*.js'],
		},
		watch : {
			options : {
				spawn: false,
				livereload: true,
			},
			scripts : {
				files : ['dev/_js/**/*.js'],
				tasks : ['concat']
			},
			less : {
				files : ['dev/_less/**/*.less'],
				tasks : ['less:dev']
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
	      ],
	    },
	    dev: {
	      src: 'dev/_css/*.css',
	    },
			prod: {
				src: ['prod/_css/*.css','!prod/_css/*.map.css']
			}
	  },
		modernizr: {
		  dist: {
		    "dest" : "dev/_js/helper/modernizr-custom.js",
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
          src: ['**/*.php','_includes/*.php', '!blog/**'],
          dest: 'prod/'
        }],
			}
		},
		uglify: {
			options: {
	      mangle: false,
				beautify: true
	    },
	    prod: {
	      files: {
	        'prod/_js/script.js': 'dev/_js/script.js',
					'prod/_js/contact-form.js' : 'dev/_js/contact-form.js'
	      }
	    }
	  },
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
					force: 'true',
					expand: true
				},
				files: [
					{
						src: 'dev/_images/**/*.png',
						dest: 'prod/_images/'
					}
				]
			}
		},
		replace : {
			build : {
				src: ['prod/_includes/*.php'],
				dest: 'prod/_includes/',
				replacements: [{
					// alter directory location to root folder
					from: '../node_modules',
					to: '/node_modules'
				}, {
					// remove live reload script from production
					from: '<script src="//localhost:35729/livereload.js"></script>',
					to: ''
				}]
			},
			contactform: {
				src: 'prod/contact.php',
				dest: 'prod/contact.php',
				replacements: [{
					from: '../process-form.php',
					to: '/process-form.php'
				}]
			},
			/* Commented out as image path was changed to be relative to root directory */
			// images: {
			// 	src: 'prod/_css/index.css',
			// 	dest: 'prod/_css/index.css',
			// 	replacements: [{
			// 		from: '../dev',
			// 		to: ''
			// 	}]
			// }
		}
	}); // initConfig

	// register tasks
	// Default
	grunt.registerTask('default',['less:dev','watch']); //,'postcss:dev'

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
