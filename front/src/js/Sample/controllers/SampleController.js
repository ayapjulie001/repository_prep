
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

angular
    .module('sample')
    .controller('SampleController', function ($scope, $timeout,$log, SampleDataProvider, SampleService) {

        $scope.test = {isActive: false};
//
//        $scope.results = [
//            {identifier: 'B', message:'Not enough history', status:'Failed', result:'Not Generated'},
//            {identifier: 'M', message:'Reached Infinity', status:'Warning', result:'Not Generated'},
//            {identifier: 'T', message:'Nan', status:'Warning', result:'Not Generated'},
//            {identifier: 'D', message:'SPD', status:'Corrected', result:'Override 0.21'},
//            {identifier: 'F', message:'Other Error', status:'Corrected', result:'Override 0.22'}
//        ];

        $scope.myViewModel = {
            options: [
                { id: 1, name: "dfdsfd"},
                { id: 2, name: "dfdsfd2"},
                { id: 3, name: "dfdsfd3"}
            ]

        };

        $scope.alertGridOptions = {
            enableCellEditOnFocus: true,
            useExternalSorting: true,
            columnDefs: [
                {
                    width: 150,
                    field: 'id',
                    displayName: 'Id',
                    headerClass: 'text-center',
                    enableColumnMenu: false
                },
                {
                    width: 150,
                    field: 'item_code',
                    displayName: 'Item Code',
                    headerClass: 'text-center'
                },
                {
                    width: 150,
                    field: 'short_name',
                    displayName: 'Short Name',
                    headerClass: 'text-center'
                },
                {
                    width: 150,
                    field: 'full_name',
                    displayName: 'Full Name',
                    headerClass: 'text-center'
                },
                {
                    width: 150,
                    field: 'reorder_point',
                    displayName: 'Reorder Point',
                    headerClass: 'text-center'
                },
                {
                    width: 150,
                    field: 'max_stocks',
                    displayName: 'Max Stocks',
                    headerClass: 'text-center'
                },
                {
                    width: 150,
                    field: 'category',
                    displayName: 'Category',
                    headerClass: 'text-center',
                    cellTemplate: '<div>{{ COL_FIELD.category }}</div>'
                },
                {
                    width: 150,
                    field: 'owner',
                    displayName: 'Owner',
                    headerClass: 'text-center',
                    cellTemplate: '<div>{{ COL_FIELD.name1 + " " + COL_FIELD.name2 }}</div>'
                },
                {
                    width: 150,
                    field: 'status',
                    displayName: 'entity',
                    headerClass: 'text-center',
                    cellTemplate: '<div>{{ COL_FIELD.status }}</div>',
                    editType: 'dropdown',
                    editableCellTemplate: 'ui-grid/dropdownEditor',
                    editDropdownOptionsArray: $scope.myViewModel.options,
                    editDropdownIdLabel: 'id',
                    editDropdownValueLabel: 'name'
                },
                {
                    width: 150,
                    field: 'brand',
                    displayName: 'brand',
                    headerClass: 'text-center',
                    cellTemplate: '<div>{{ COL_FIELD.brand }}</div>'
                }
            ],
            plugins: [new ngGridFlexibleHeightPlugin()]
        };

        $scope.alertGridOptions.onRegisterApi = function (gridApi) {
            $scope.gridApi = gridApi;

            gridApi.selection.on.rowSelectionChanged($scope,function(row){
                var msg = 'row selected ' + row.isSelected;

                row.entity.isSelected = row.isSelected;

                $log.log(row);
                $log.log(msg);
            });
        };
        $scope.$watch('test.isActive', function (active, oldActive) {
            if (active && active !== oldActive && $scope.gridApi) {
                $timeout(function () {
                    $scope.gridApi.grid.handleWindowResize();
                });
            }
        });

        $scope.setItems = function () {

           /* SampleService
                .getItems()
                .then(function (response) {
                    $scope.alertGridOptions.data = response.data;
                })
                .catch(function (err) {
                    console.log(err);
                }); */
        };
    });