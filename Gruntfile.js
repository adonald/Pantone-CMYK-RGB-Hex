module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            css: {
                src: [
                    'src/css/pocketgrid/pocketgrid.min.css',
                    'src/css/*'
                ],
                dest: 'dist/css/styles.css'
            },
        },
        cssmin: {
            css: {
                src: 'dist/css/styles.css',
                dest: 'dist/css/styles.min.css'
            }
        },
        clean: ['dist'],
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        src: [ 'src/*' ],
                        dest: 'dist/',
                        filter: 'isFile',
                        flatten: true
                    },
                ],
            }
        },
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.registerTask('default', ['clean', 'copy:main', 'concat:css', 'cssmin:css']);
};