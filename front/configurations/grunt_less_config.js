
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
                cwd: "src/less",
                src: ["**/*.less", "!**/Common/*.less"],
                dest: user_config.build.styles_dir,
                ext: ".css"
            }
        ]
    },

    production: {
        options: {
            cleancss: true,
            compress: true
        },
        files: [
            {
                expand: true,
                cwd: "src/less",
                src: ["**/*.less", "!**/config/*.less"],
                dest: user_config.prod.styles_dir,
                ext: ".css"
            }
        ]
    }
}