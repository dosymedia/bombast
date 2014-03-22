/*  Gruntfile
 *   http://terrimadethis.com
 *   @author Terri Morgan
 */

 module.exports = function(grunt) {
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),

     // Project Settings
      project: {
        assets: 'public',
        src: 'app/assets',
        scss: [
          '<%= project.src %>/scss/style.scss'
        ],
        js: [
          '<%= project.assets %>/js/scripts.js'
        ]
      },

      // Task configuration
     // Sass
      sass: {
        dev: {
          options: {
            style: 'expanded',
          },
          files: {
            '<%= project.assets %>/css/style.min.css': '<%= project.scss %>'
          }
        },
        dist: {
          options: {
            style: 'compressed',
          },
          files: {
            '<%= project.assets %>/css/style.min.css': '<%= project.scss %>'
          }
        }
      },
      
      // Concatenation  
      concat: {
        // To-do
      },
      
      // Uglify  
      uglify: {
      // To-do
      },

      //Imagemin

      // Watch
      watch: {
        sass: {
          files: '<%= project.src %>/scss/{,*/}*.{scss,sass}',
          tasks: ['sass:dev']
        },
      }
  });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  //grunt.loadNpmTasks('grunt-contrib-uglify');
  //grunt.loadNpmTasks('grunt-contrib-concat');
  //grunt.loadNpmTasks('grunt-contrib-imagemin');

  // Task definition
  /**
   * Default task
   * Run `grunt` on the command line
   */
  grunt.registerTask('default', [
    'sass:dev',
    'watch'
  ]);

  /**
   * Build task
   * Run `grunt build` on the command line
   * Then compress all JS/CSS files
   */
  grunt.registerTask('build', [
    'sass:dist'
  ]);
  };
