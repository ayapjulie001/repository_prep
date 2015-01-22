
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {

    all: [
        user_config.src.base_dir + "/tests/**/*.html"
    ],

    file: [
        user_config.src.base_dir + "/tests/files/*.html"
    ]
}