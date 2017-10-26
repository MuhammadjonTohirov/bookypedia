/**
 * Created by M_hacker on 08.05.2017.
 */
var body_model = angular.module('body', ["ngRoute"]);
body_model.config(
    ['$routeProvider',
        function ($routeProvider) {
            $routeProvider.when('/home', {
                templateUrl: 'home.php',
                controller: 'body_controller'
            }).when('/books', {
                templateUrl: 'books-grid.php',
                controller: 'bookphp_controller'
            }).when('/books/single', {
                templateUrl: 'book-single.php',
                controller: 'single_book_controller'
            }).when('/', {
                templateUrl: 'home.php',
                controller: 'body_controller'
            });

        }]
);
body_model.controller('body_controller', ['$scope', '$rootScope', '$http', function ($scope, $rootScope, $http) {
    $scope.title = 'Current Best Sellers';
    get_book_list();
    function get_book_list() {
        $http.post('app/Database/database_connection.php', {'type': 1}).then(function (data) {
            $scope.top_seller = data.data;
            $scope.error = data;
        });
        $http.post('app/Database/database_connection.php', {'type': 2}).then(function (data) {
            $scope.top_ranked = data.data;
            $scope.error = data;
        });
        $http.post('app/Database/database_connection.php', {'type': 'on_sale_books'}).then(function (data) {
            $scope.on_sale = data.data;
            $scope.error = data;
        });
        $http.post('app/Database/database_connection.php', {'type': 'news'}).then(function (data) {
            $scope.news = data.data;
            $scope.error = data;
        });
    }
}]);

body_model.controller('bookphp_controller', ['$scope', '$rootScope', '$http', function ($scope, $rootScope, $http) {
    $scope.title = 'Current Best Sellers';
    get_book_list(-1, -1);
    $scope.is_grid = true;

    $scope.options = [
        {id: 0, name: 'New books'},
        {id: 1, name: 'Price'},
        {id: 2, name: 'Rank'}
    ];
    $scope.select_genre = function (gen) {
        get_book_list(gen, -1);
    };
    $scope.sort_genre = function (gen) {
        get_book_list(-1, gen);
    };
    function get_book_list($g, $t) {
        $http.post('app/Database/database_connection.php', {
            'type': 'genre_and_book',
            'genre': $g,
            'sort': $t
        }).then(function (data) {
            $scope.books = data.data.books;
            $scope.genres = data.data.genres;
            $scope.error = data;
        });
    }
    $scope.linear = function () {
        $scope.is_grid = false;
    };
    $scope.grid = function () {
        $scope.is_grid = true;
    };
    $scope.set_movement = function (id) {
        // alert(id);
        $rootScope.setID(id.b_id, id.g_id);
        // body_shared_service.setJson(id);
    }

}]);
book_id = 1;
body_model.controller('single_book_controller', ['$scope', '$rootScope', '$http', function ($scope, $rootScope, $http) {
    $rootScope.setID = function ($id,$gen) {
        $rootScope.b_id = $id;
        $rootScope.genre = $gen

        // alert($gen);
    };
    init();
    function init() {
        $http.post('app/Database/database_connection.php', {
            'type': 'get_a_book',
            'id': $scope.b_id
        }).then(function (data) {
            $scope.book = data.data;
            $scope.error = data.data;
        });

        $http.post('app/Database/database_connection.php', {
            'type': 'genre_and_book',
            'genre': $scope.genre,
            'sort': -1
        }).then(function (data) {
            $scope.books = data.data.books;
            $scope.error1 = data.data;
        });
    }

}]);


body_model.service('body_shared_service', function (body_shared_service) {
    var myjsonObj = null;//the object to hold our data
    return {
        getJson: function () {
            return myjsonObj;
        },
        setJson: function (value) {
            myjsonObj = value;
        }
    }
});