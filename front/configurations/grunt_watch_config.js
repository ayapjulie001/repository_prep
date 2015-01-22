
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    options: {

        livereload: true

    },

    styles: {

        files: [
            user_config.src.styles_dir + "/**/*.less"
        ],

        tasks: ['build']
    },

    scripts: {

        files:[
            user_config.src.scripts_dir + "/**/*.js"
        ],

        tasks: ['build']
    }
}