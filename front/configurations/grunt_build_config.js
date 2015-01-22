
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

var package_details = require("grunt").file.readJSON('package.json');

module.exports = {

    src: {
        base_dir: 'src',
        base_dir: 'src',
        scripts_dir: 'src/js',
        styles_dir: 'src/less',
        images_dir: 'src/img',
        fonts_dir: 'src/fonts'
    },

    build: {
        base_dir: '../public/build',
        scripts_dir: '../public/build/js',
        styles_dir: '../public/build/css',
        images_dir: '../public/build/img',
        fonts_dir: '../public/build/fonts'
    },

    compile: {
        base_dir: 'compile',
        scripts_dir: 'compile/js',
        styles_dir: 'compile/css',
        images_dir: 'compile/img',
        fonts_dir: 'compile/fonts'
    },

    prod : {
        base_dir: '../public/assets',
        scripts_dir: '../public/assets/js',
        styles_dir: '../public/assets/css',
        images_dir: '../public/assets/img',
        fonts_dir: '../public/assets/fonts'
    },

    library_dir: 'libraries'
}