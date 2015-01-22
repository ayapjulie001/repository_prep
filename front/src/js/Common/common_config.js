
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

/**
 * set global config here
 * @param RestangularProvider
 */
function initConfig(RestangularProvider) {

    RestangularProvider.setBaseUrl('/');

    RestangularProvider.setErrorInterceptor(function (response, deferred, responseHandler) {

        response.errors = [];

        if (response.status === 422) {
            response.errors = response.data.errors;
        }

        return true;
    });
}

function ngGridFlexibleHeightPlugin (opts) {
    var self = this;
    self.grid = null;
    self.scope = null;
    self.init = function (scope, grid, services) {
        self.domUtilityService = services.DomUtilityService;
        self.grid = grid;
        self.scope = scope;
        var recalcHeightForData = function () { setTimeout(innerRecalcForData, 1); };
        var innerRecalcForData = function () {
            var gridId = self.grid.gridId;
            var footerPanelSel = '.' + gridId + ' .ngFooterPanel';
            var extraHeight = self.grid.$topPanel.height() + $(footerPanelSel).height();
            var naturalHeight = self.grid.$canvas.height() + 1;
            if (opts != null) {
                if (opts.minHeight != null && (naturalHeight + extraHeight) < opts.minHeight) {
                    naturalHeight = opts.minHeight - extraHeight - 2;
                }
            }

            var newViewportHeight = naturalHeight + 3;
            if (!self.scope.baseViewportHeight || self.scope.baseViewportHeight !== newViewportHeight) {
                self.grid.$viewport.css('height', newViewportHeight + 'px');
                self.grid.$root.css('height', (newViewportHeight + extraHeight) + 'px');
                self.scope.baseViewportHeight = newViewportHeight;
                self.domUtilityService.RebuildGrid(self.scope, self.grid);
            }
        };
        self.scope.catHashKeys = function () {
            var hash = '',
                idx;
            for (idx in self.scope.renderedRows) {
                hash += self.scope.renderedRows[idx].$$hashKey;
            }
            return hash;
        };
        self.scope.$watch('catHashKeys()', innerRecalcForData);
        self.scope.$watch(self.grid.config.data, recalcHeightForData);
    };
}


/**
 * register common module
 */
angular
    .module('common',
    [
        'ui.bootstrap',
        'ui.bootstrap.tpls',
        'angularFileUpload',
        'ui.grid',
        'ui.grid.autoResize',
        'ui.grid.edit',
        'ui.grid.resizeColumns',
        'ui.grid.cellNav',
        'ui.grid.selection'
    ]
)

    // allow DI for use in controllers, unit tests
    .constant('_', window._)

    // use in views, ng-repeat="x in _.range(3)"
    .run(function ($rootScope) {
        $rootScope._ = window._;
    });