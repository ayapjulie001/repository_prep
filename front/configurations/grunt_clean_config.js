
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var user_config = require('./grunt_build_config.js');

module.exports = {
    options: {
        force: true
    },

    all: {
        files: {
            src: [
                user_config.build.base_dir,
                user_config.prod.base_dir
            ]
        }
    },

    libraries: {
        files: {
            src: [
                user_config.build.scripts_dir + "/Libraries"
            ]
        }
    },

    common: {
        files: {
            src: [
                user_config.build.scripts_dir + "/Common"
            ]
        }
    },

    development: {
        files: {
            src: [

                // put the directory of development files here

                user_config.build.scripts_dir + "/Masterlist/",
                user_config.build.scripts_dir + "/SalesOrder/"
            ]
        }
    }
};