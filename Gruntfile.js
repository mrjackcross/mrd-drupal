module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "sites/all/themes/mrd2015/css/style.css": "sites/all/themes/mrd2015/less/style.less" // destination file and source file
        }
      }
    },
    drush: {
      cc_css_js: {
        args: ['cc', 'css-js']
      }
    },
    watch: {
      styles: {
        files: ['sites/all/themes/mrd2015/less/**/*.less'], // which files to watch
        tasks: ['less','drush:cc_css_js'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
};
