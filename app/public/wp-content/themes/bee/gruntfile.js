const webpackConfig = require('./webpack.config.js');

module.exports = function(grunt) {
 
  //Checks the dependencies associated with Grunt and autoloads
  //& requires ALL of them in this Gruntfile
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);
 
  // Project configuration.
  grunt.initConfig({




    // Sass configuration
    sass: {
      options: {
        sourceMap: false,
      },
      dist: {
        files: {
          'assets/dist/main.css': 'assets/scss/main.scss'
        }
      }
    },


    webpack: {
      myConfig: webpackConfig,
    },


    // Watches files and folders for us
    watch: {
      files: [
        'assets/scss/*.scss',
      ],
      tasks: [
        'sass',
      ],
    }
 
  });
 
  //grunt serve
  grunt.registerTask('default', ['webpack', 'watch']);
};
