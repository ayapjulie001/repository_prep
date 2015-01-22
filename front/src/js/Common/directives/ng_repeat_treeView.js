
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


angular.module('common')
    .directive('treeviewItem', function ($compile) {
        return {
            restrict: 'E',
            template:
            '<li ng-show = "!item.is_deleted">'+
            '<i class="icon-plus-sign"></i>'+
                '<a href="/">'+
                    '<i class="icon-folder-close"></i>'+
                    '{{item.id}}'+
            " " + '{{item.account_number}}'+
            " " + '{{item.account_title}}'+
            " " + '{{item.parent_id}}'+
            " " + '{{item.is_deleted}}'+
                '</a>'+
            '</li>',
            replace: true,
            scope: {
                item: "="
            },
            link: function (scope, element, attrs) {
                element.append($compile('<ul><treeview-item ng-repeat="childitem in item.children" item="childitem"></treeview-item></ul>')(scope));

                console.log("treeview item directive loaded");
            }
        };
    });