
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

module.exports = function (grunt) {

    /**
     * Load required Grunt tasks. These are installed based on the versions listed
     * in `package.json` when you do `npm install` in this directory.
     */
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-conventional-changelog');
    grunt.loadNpmTasks('grunt-bump');
    grunt.loadNpmTasks('grunt-ng-annotate');
    grunt.loadNpmTasks('grunt-html2js');

    /**
     * This is the configuration object Grunt uses to give each plugin its
     * instructions.
     */
    var task_config = require('./configurations/grunt_task_config.js');

    grunt.initConfig(task_config);

    grunt.registerTask(

        'build',

        [
            'clean:development',
            'less:development',
            'cssmin:development',
            'concat:development',
            'ngAnnotate:development',
            'copy:development'
        ]
    );

    grunt.registerTask(

        'build_libraries',

        [
            'clean:libraries',
            'copy:libraries',
            'concat:libraries'
        ]
    );

    /**
     * build
     */
    grunt.registerTask(

        'build_common',

        [
            'clean:common',
            'concat:common',
            'ngAnnotate:common'
        ]
    );

    grunt.registerTask(

        'build_all',

        [
            'build',
            'build_libraries',
            'build_common'
        ]
    );

};