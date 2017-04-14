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
					},
					{
						src: 'dev/_less/theme/footer.less',
						dest: 'dev/blog/wp-content/themes/twentyseventeen-child/style-footer.css'
					}
				],
			},
		},
		postcss: {
	    options: {
	      map: false,
	      processors: [
	        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
	      ],
	    },
	    dev: {
	      src: ['dev/_css/*.css']
	    },
			prod: {
				src: ['prod/_css/*.css']
			},
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
		},
		copy: {
			build: {
				files: [
					{
						cwd: 'dev/',
						expand: true, // 'expand: true' required when using option 'cwd'
						src: ['functions.php','peakLogo.ico'],
						dest: 'prod/',
					},
					{
						cwd: 'dev/',
						expand: true, // 'expand: true' required when using option 'cwd'
						src: ['blog/**'],
						dest: 'prod/'
					},
				]
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
	grunt.registerTask('prod',['modernizr','postcss:prod','cssmin','uglify','htmlmin:prod','replace','copy:build']);

}; // module.exports
