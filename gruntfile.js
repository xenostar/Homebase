module.exports = function(grunt) {
	"use strict";

	// Load each grunt dependency automatically
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		dirs: {
			source: 'source',
			output: 'public_html/assets'
			// output: 'public_html/wp-content/themes/xenotheme/assets'
		},

		// HTML Validation
		htmlhint: {
			build: {
				options: {
					'tag-pair': true,
					'tagname-lowercase': true,
					'attr-lowercase': true,
					'attr-value-double-quotes': true,
					'doctype-first': true,
					'spec-char-escape': true,
					'id-unique': true,
					'head-script-disabled': true,
					'style-disabled': true
				},
				src: ['index.html']
			}
		},

		// JS Concat -> Minify
		concat: {
			dist: {
				src: ['<%= dirs.source %>/scripts/frameworks.js', '<%= dirs.source %>/scripts/xenolib.js', '<%= dirs.source %>/scripts/app.js', '<%= dirs.source %>/scripts/pages/*.js'],
				dest: '<%= dirs.output %>/scripts/app.min.js',
			}
		},
		uglify: {
			build: {
				files: {
					'<%= dirs.output %>/scripts/app.min.js': ['<%= dirs.output %>/scripts/app.min.js']
				}
			}
		},

		// SASS Compile -> Compress -> Minify
		sass: {
			dist: {
				files: {
					'<%= dirs.output %>/css/master.min.css': '<%= dirs.source %>/css/master.scss'
				}
			}
		},
		cssc: {
			build: {
				options: {
					consolidateViaDeclarations: true,
					consolidateViaSelectors: true,
					consolidateMediaQueries: true
				},
				files: {
					'<%= dirs.output %>/css/master.min.css': '<%= dirs.output %>/css/master.min.css'
				}
			}
		},
		cssmin: {
			build: {
				src: '<%= dirs.output %>/css/master.min.css',
				dest: '<%= dirs.output %>/css/master.min.css'
			}
		},

		// Watch Tasks
		watch: {
			html: {
				files: ['test.html'],
				tasks: ['buildhtml']
			},
			js: {
				files: ['<%= dirs.source %>/scripts/**/*.js'],
				tasks: ['buildjs']
			},
			css: {
				files: ['<%= dirs.source %>/css/**/*.scss'],
				tasks: ['buildcss']
			}
		}
	});

	grunt.registerTask('default', []);
	grunt.registerTask('buildhtml', ['htmlhint']);
	grunt.registerTask('buildjs', ['concat', 'uglify']);
	grunt.registerTask('buildcss', ['sass', 'cssc', 'cssmin']);
};
