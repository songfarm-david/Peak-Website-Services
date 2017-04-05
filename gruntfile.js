module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
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
		  },
		},
		less: {
			dev : {
				options : {
					compress : false,
					sourceMap : false,
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
			// prod : {
			// 	options : {
			// 		compress : true,
			// 		sourceMap : true,
			// 	},
			// 	files: [
			// 		{
			// 			expand: true,
			// 			cwd: 'dev/_css', // 'src' matches are relative to this path
			// 			src: ['*.css','!blog.css'],	// Actual pattern(s) to match
			// 			dest: 'prod/_css',	// Destination relative to gruntfile.js
			// 			ext: '.css'				// Destination filepaths will have this extension
			// 		}
			// 	],
			// 	// files : {
			// 	// 	'prod/_css/index.css' : 'dev/_less/index.less',
			// 	// 	'prod/_css/contact.css' : 'dev/_less/contact.less',
			// 	// 	'prod/_css/service-index.css' : 'dev/_less/service-index.less',
			// 	// 	'prod/_css/service-pages.css' : 'dev/_less/service-pages.less',
			// 	// 	'prod/_css/portfolio.css' : 'dev/_less/portfolio.less'
			// 	// },
			// },
		},
		cssmin: {
			options: {
				keepSpecialComments: 0 // removes comments from source files
			},
		  target: {
		    files: [{
		      expand: true,
		      cwd: 'dev/_css',
		      src: ['*.css', '!*.map.css'],
		      dest: 'prod/_css',
		      ext: '.css'
		    }]
		  }
		},
		postcss: {
	    options: {
	      map: false,
	      processors: [
	        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
	      ],
	    },
	    dev: {
	      src: ['dev/_css/*.css','!dev/_css/*.map.css'],
	    },
			prod: {
				options: {
					map: true
				},
				src: ['prod/_css/*.css','!prod/_css/*.map.css']
			},
	  },
		uglify: {
			options: {
				mangle: true,
				beautify: false,
			},
	    prod: {
				files: [
					{
						expand: true,
						cwd: 'dev/_js', 								// 'src' matches are relative to this path, the current working directory
						src: ['**/*.js','!vendor/**'],	// Exclude the 'Vendor' dir
						dest: 'prod/_js',								// Destination relative to gruntfile.js
						ext: '.js'											// Destination filepaths will have this extension
					}
				],
	    },
	  },
		concat: {
			options : {
				separator : '\n\n//==================================================\n\n'
			},
			prod : {
				files: {
					'prod/_js/script.js': ['dev/_js/script.js','dev/_js/helper/*.js']
				}
			},
		},
		jshint: {
			dev: {
				options: {
					force: true // do not fail task if js errors..
				},
				files: {
					src: ['gruntfile.js','dev/_js/*.js']
				},
			},
		},
		watch: {
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
			},
		},
		htmlmin: {
			options : {
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
			},
		},
		replace: {
			build: {
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
		}
	}); // initConfig

/**
	* Development Task
	*/
	grunt.registerTask('default',['less:dev','postcss:dev','jshint','watch']);

/**
	* Production Task
	*/
	grunt.registerTask('prod',['modernizr','less:prod','postcss:prod','uglify','htmlmin:prod','replace']);

}; // module.exports
