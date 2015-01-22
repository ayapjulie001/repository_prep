
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module('sample')
    .controller('ContentSampleController', function( $scope ) {
        // this is the controller for the component content_sample

        $scope.content = $scope.global.sample + " content controller";
    });

