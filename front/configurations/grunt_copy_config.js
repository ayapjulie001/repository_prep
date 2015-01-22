
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    libraries: {
        files: [

            // copy libraries
            {
                expand: true,
                cwd: user_config.library_dir,
                src: ["Bootstrap/**/*"],
                dest: user_config.build.styles_dir
            }
        ]
    },

    development: {

        files: [

            // copy images
            {
                expand: true,
                cwd: user_config.src.images_dir,
                src: ["**"],
                dest: user_config.build.images_dir
            },

            // copy fonts
            {
                expand: true,
                flatten: true,
                cwd: user_config.src.fonts_dir,
                src: ["**"],
                dest: user_config.build.fonts_dir
            }
        ]
    },

    production: {
        files: [

            // copy images
            {
                expand: true,
                cwd: user_config.build.images_dir,
                src: ["**"],
                dest: user_config.prod.images_dir
            },

            // copy fonts
            {
                expand: true,
                cwd: user_config.build.fonts_dir,
                src: ["**"],
                dest: user_config.prod.fonts_dir
            },

            //copy css
            {
                expand: true,
                cwd: user_config.build.styles_dir,
                src: ["**/*.min.css",'!**/*.css'],
                dest: user_config.prod.styles_dir
            }
        ]
    }
};