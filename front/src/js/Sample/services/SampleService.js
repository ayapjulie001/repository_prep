
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module('sample')
    .service('SampleService', function SampleService(Restangular) {

        this.getItems = function () {
            return Restangular.all("items").customGET("");
        };
    });