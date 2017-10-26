/**
 * Created by M_hacker on 09.05.2017.
 */
var admin_model = angular.module('admin', ["ngRoute"]);
admin_model.config(
    ['$routeProvider',
        function ($routeProvider) {
            $routeProvider.when('/users', {
                templateUrl: 'user_view.php',
                controller: 'admin_user_controller'
            }).when('/books', {
                templateUrl: 'book_view.php',
                controller: 'admin_book_controller'
            }).when('/', {
                templateUrl: 'books_view.php',
                controller: 'admin_book_controller'
            });

        }]
);
admin_model.controller('admin_user_controller', ['$scope', '$http', function ($scope, $http) {
    $scope.title = "admin page";
    $scope.error = '0';
    $scope.show_password = true;
    $scope.show_inset_field = false;
    get_users(-1);

    function get_users(id) {
        $http.post('../Database/database_connection.php', {'type': 'users', 'n': id}).then(function (data) {
            $scope.users = data.data;
            $scope.error = data.data;
        });
    }

    $scope.toggle_insert_field = function () {
        $scope.show_inset_field ^= true;
    };
    $scope.toggle = function () {
        $scope.show_password ^= true;
    };
    $scope.delete_user = function (user_id) {
        $http.post('../Database/database_connection.php', {'type': 3, 'user_id': user_id}).then(function (data) {
            $scope.error = data.data;
            get_users(-1);
        });
    };
    $scope.insert_user = function (user_info) {
        // data = toJson(,true);
        b = {
            'user_name': user_info.u_n,
            'email': user_info.e_m,
            'password': user_info.pwd
        };
        $http.post('../Database/database_connection.php', {'type': 'insert', 'user': b}).then(function (data) {
            $scope.error = data.data;
            //if(data===1)
            get_users(-1);
        });
    };
    $scope.search = function (title) {
        get_users(title);
    }
}]);

admin_model.controller('admin_main_controller', []);

admin_model.controller('admin_book_controller', ['$scope', '$http', function ($scope, $http) {
    $scope.title = "book page";
    $scope.error = '0';
    $scope.show_insert_field = false;
    get_books(-1);
    function get_books(pattern) {
        $http.post('../Database/database_connection.php', {'type': 'books', 'n': pattern}).then(function (data) {
            $scope.books = data.data;
            $scope.error = data.data;
        });
        // $http.post('../Database/database_connection.php', {'type': 'authors', 'n': pattern}).then(function (data) {
        //     $scope.authors = data.data;
        //     $scope.error = data.data;
        // });
    }

    $scope.search_book = function (pattern) {
        get_books(pattern);
    };
    $scope.toggle_book_insertion = function () {
        $scope.show_insert_field ^= true;
    };
    $scope.get_genres = function () {
        $http.post('../Database/database_connection.php', {'type': 'genres'}).then(function (data) {
            $scope.genres = data.data;
            $scope.error = data.data;
        });
    };
    $scope.get_authors = function () {
        $http.post('../Database/database_connection.php', {'type': 'authors'}).then(function (data) {
            $scope.authors = data.data;
            $scope.error = data.data;
        });
    }
}]);
