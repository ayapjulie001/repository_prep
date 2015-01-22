
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    libraries: {

        files: [

            {
                src: [
                    'Libraries/*.js'
                ],
                cwd: user_config.build.scripts_dir,
                dest: user_config.build.scripts_dir,
                expand: true
            }

        ]
    },

    common: {

        files: [

            {
                src: [
                    'Common/*.js'
                ],
                cwd: user_config.build.scripts_dir,
                dest: user_config.build.scripts_dir,
                expand: true
            }

        ]
    },

    development: {

        files: [

            {
                src: [
                    '**/*.js',
                    '!Common/**/*.js',
                    '!Libraries/**/*.js'
                ],
                cwd: user_config.build.scripts_dir,
                dest: user_config.build.scripts_dir,
                expand: true
            },

        ]
    }
};