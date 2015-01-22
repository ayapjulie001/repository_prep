
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

/**
 * Load in our build configuration file.
 */
var package_details = require("grunt").file.readJSON('package.json');

var less_config = require('./grunt_less_config.js');
var copy_config = require('./grunt_copy_config.js');
var concat_config = require('./grunt_concat_config.js');
var uglify_config = require('./grunt_uglify_config.js');
var cssmin_config = require('./grunt_cssmin_config.js');
var watch_config = require('./grunt_watch_config.js');
var ng_annotate_config = require('./grunt_ng_annotate_config.js');
var qunit_config = require('./grunt_qunit_config.js');
var clean_config = require('./grunt_clean_config.js');

module.exports = {

    pkg: package_details,

    clean: clean_config,

    /**
     * `ng-min` annotates the sources before minifying. That is, it allows us
     * to code without the array syntax in angularjs dependency injection.
     */
    ngAnnotate: ng_annotate_config,

    /**
     * compile less files to css files
     */
    less: less_config,

    /**
     * copy files of source folder to build directory and public/assets directory
     */
    copy: copy_config,

    /**
     * concat js files to one js
     */
    concat: concat_config,

    /**
     * minify js files to make it compact bandwidth
     */
    uglify: uglify_config,

    /**
     * minify css files to make to reduce bandwidth
     */
    cssmin: cssmin_config,

    /**
     * set the  watching of changes in files to auto run build
     */
    watch: watch_config,

    /**
     * set the test cases for js
     */
    qunit: qunit_config
}

