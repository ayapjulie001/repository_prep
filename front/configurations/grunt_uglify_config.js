
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    /**
     * minify concacatenated libraries
     */
    libraries: {

        options: {
            sourceMap: true
        },

        files: [

            {
                expand: true,
                cwd: user_config.build.scripts_dir,
                src: "**/libraries.js",
                dest: user_config.build.scripts_dir,
                ext: '.min.js'
            }

        ]
    },

    /**
     * minify all common scripts
     */
    common: {

        options: {
            sourceMap: true
        },

        files: [

            {
                expand: true,
                cwd: user_config.build.scripts_dir,
                src: "**/common.js",
                dest: user_config.build.scripts_dir,
                ext: '.min.js'
            }

        ]

    },

    /**
     * minify all scripts except libraries
     */
    development: {

        options: {
            sourceMap: true
        },

        files: [

            {
                expand: true,
                cwd: user_config.build.scripts_dir,
                src: [
                    '**/*.js',
                    '!Common/*',
                    '!Libraries/*'
                ],
                dest: user_config.build.scripts_dir,
                ext: '.min.js'
            }

        ]

    }

}