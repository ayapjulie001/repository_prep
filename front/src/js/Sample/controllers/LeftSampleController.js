
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module('sample')
    .controller('LeftSampleController', function( $scope ) {
        // this is the controller for the component left_sample

        $scope.left = $scope.global.sample + " left controller";
    });