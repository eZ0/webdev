module.exports = function(grunt) {

  grunt.initConfig({

    concat: {
      js: {
        src: [
          './public/bower_components/jquery/dist/jquery.js',
          './public/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
          './public/assets/js/*.js'       
        ],
        dest: './public/assets/javascripts/application.js'
      }
    },
    uglify: {
      options: {
        mangle: false
      },
      js: {
        files: {
          './public/assets/js/application.js': './public/assets/js/application.js'
        }
      }
    },    
    sass: {
      dist: {
        files: {
          "./public/assets/css/style.css":"./public/assets/sass/style.scss"
        }
      }
    },
    watch: {
      js: {
        files: [
          './bower_components/jquery/dist/jquery.js',
          './bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
          './public/assets/js/*.js'
          ],
        tasks: ['concat:js', 'uglify:js']
      },
      css: {
        files: ['./public/assets/sass/*.scss'],
        tasks: ['sass']
      }
    }    
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']); 
}