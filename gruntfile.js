module.exports = function(grunt) {
	// This is the default port that livereload listens on;
	// change it if you configure livereload to use another port.
	// var LIVERELOAD_PORT = 35729;
	// lrSnippet is just a function.
	// It's a piece of Connect middleware that injects
	// a script into the static served html.
	// var lrSnippet = require('connect-livereload')({ port: LIVERELOAD_PORT });
	// All the middleware necessary to serve static files.
	// var livereloadMiddleware = function (connect, options) {
	//   return [
	//     // Inject a livereloading script into static files.
	//     lrSnippet,
	//     // Serve static files.
	//     connect.static(options.base),
	//     // Make empty directories browsable.
	//     connect.directory(options.base)
	//   ];
	// };
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
				tasks : ['less'],
				// options : {
				// 	livereload: true
				// }
			},
			// reload: {
			// 	port: 35729,
		  //     liveReload: {},
		  //     proxy: {
		  //       host: "localhost",
		  //       port: 80
		  //     }
			// },
			markUp : {
				files : ['dev/**/*.html','dev/**/*.php']
			}
		},
		connect: {
			server: {
				options: {
					hostname: 'localhost',
					port: 80,
					bases: 'dev',
					livereload: true
				}
			}
		}
	}); // initConfig

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	// grunt.loadNpmTasks("connect-livereload");
	grunt.loadNpmTasks("grunt-contrib-connect");


	// register tasks
	grunt.registerTask('default',['less','watch']);
	// grunt.registerTask('reload',['reload','watch']);

}; // wrapper function
