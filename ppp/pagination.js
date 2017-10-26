var pagination = angular.module('sampleproject', []);

pagination.controller('item', ['$rootScope', '$scope', function ($rootScope, $scope) {
    $scope.curPage = 0;
    $scope.pageSize = 5;

    // $scope.onSample = function () {
    //     samplefactoryService.myServicefunction($scope.list,
    //         function (data) {
    //             $scope.datalists = data;// response from service
    //         },
    //         function (data) {
    //             //error
    //         });
    // };
    //
    // $scope.numberOfPages = function () {
    //     return Math.ceil($scope.datalists.length / $scope.pageSize);
    // };
}]);
// function item($rootScope, $scope ,samplefactoryService) {
//     $scope.curPage = 0;
//     $scope.pageSize = 5;
//
//     $scope.onSample = function () {
//         samplefactoryService.myServicefunction($scope.list,
//             function (data) {
//                 $scope.datalists = data;// response from service
//             },
//             function (data) {
//                 //error
//             });
//     };
//
//     $scope.numberOfPages = function () {
//         return Math.ceil($scope.datalists.length / $scope.pageSize);
//     };
// }
// function paginate() {
//
// }
// pagination.controller('item',['$rootScope', '$scope', item]);
// pagination.controller('paginate', paginate);