
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module('sample')
    .controller('RightSampleController', function( $scope ) {
        // this is the controller for the component right_sample

        $scope.right = $scope.global.sample + " right controller";
    });