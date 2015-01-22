
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    options: {
        separator: ";"
    },

    /**
     * concat libraries
     */
    libraries: {
        files: [
            {
                src: [

                    user_config.library_dir + "/jquery.js",
                    user_config.library_dir + "/angular.js",
                    user_config.library_dir + "/angular-file-upload-shim.js",
                    user_config.library_dir + "/angular-file-upload-html5-shim.js",
                    user_config.library_dir + "/FileAPI.min.js",
                    user_config.library_dir + "/*.js"
                ],
                dest: user_config.build.scripts_dir + "/Libraries/libraries.js"
            }
        ]
    },

    /**
     * concat common files
     */
    common: {
        files: [
            {
                src: [
                    user_config.src.scripts_dir + "/Common/common_config.js",
                    user_config.src.scripts_dir + "/Common/services/*.js",
                    user_config.src.scripts_dir + "/Common/controllers/*.js",
                    user_config.src.scripts_dir + "/Common/**/*.js"
                ],
                dest: user_config.build.scripts_dir + "/Common/common.js"
            }
        ]

    },

    /**
     * put your specific files concatenations here
     */
    development: {

        /**
         * concat development files
         */
        files: [

        /**
         * concat files for sample
         */

            {
                src: [
                    user_config.src.scripts_dir + "/Sample/sample_config.js",
                    user_config.src.scripts_dir + "/Sample/**/*.js"
                ],
                dest: user_config.build.scripts_dir + "/Sample/sample.js"
            }

        ]

    },

    production: {

        /**
         * put the files for production here
         */
        files: []
    }
};