
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    development: {
        files: [
            {
                expand: true,
                cwd: user_config.build.styles_dir,
                src: [
                    "Inventory/**/*.css",

                    "Masterlist/ItemStatus/*.css",

                    "Masterlist/**/*.css"
                ],
                dest: user_config.build.styles_dir,
                ext: '.min.css'
            }
        ]
    },

    production: {

        files: [

            {
                expand: true,
                cwd: user_config.prod.styles_dir,
                src: "**/*.css",
                dest: user_config.prod.styles_dir,
                ext: '.min.css'
            }

        ]

    }

};