
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

/**
 * You need to specify the files in grunt concat task
 *
 * The configuration can be found in grunt_concat_config.js
 *
 * The registration of assets can be found in app/local/assets.php
 */

var sample = angular.module('sample',
    [
        // module dependencies goes here
        'restangular',
        'common'
    ]
);

// configurations goes here

sample.config(function (RestangularProvider) {
    initConfig(RestangularProvider);
});
