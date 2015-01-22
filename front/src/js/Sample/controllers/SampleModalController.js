
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module('sample')
    .controller('SampleModalController', function ($scope, $modalInstance, sample_list) {

        $scope.ok = function () {
            $modalInstance.close('closed');
        };

        $scope.cancel = function () {

            $modalInstance.dismiss('cancel');
        };
    });