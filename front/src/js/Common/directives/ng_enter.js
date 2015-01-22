
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 *
 * the module that contains the directive that captures the enter key press event
 */
angular.module('common')
    .directive('ngEnter', function () {
        return function (scope, element, attrs) {
            element.bind("keydown", function (event) {
                if (event.which === 13) {
                    scope.$apply(function () {
                        scope.$eval(attrs.ngEnter);
                    });
                }
            });
        };
    });
