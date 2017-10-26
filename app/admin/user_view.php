<?php
session_start();

if (!$_SESSION['admin_name']) {
    header("Location: Admin_login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<div class="table-scrol">
    <h1 align="center">All Users</h1>
    <!--    {{error}}-->
    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
        <div><p class="glyphicon glyphicon-search"></p><input class="form-control" type="text" ng-keydown="search(se)"
                                                              ng-model="se"
                                                              placeholder="search">
        </div>
        <br><br>
        <a class="btn btn-primary" ng-click="toggle_insert_field()">Insert a new user</a>
        <p></p>
        <fieldset ng-show="show_inset_field">
            <legend>Create User</legend>
            <form class="form-group-lg" id="insert_form" enctype="multipart/form-data"
                  style="margin-left: 20%; margin-right: 20%; text-align: center">
                <span>User Name</span>
                <p><input type="text" ng-model="info.u_n" placeholder="*/%+- can not be used" autofocus required></p>
                <span>E-mail</span>
                <p><input type="email" ng-model="info.e_m" placeholder="somebody@mail.ru" autofocus required></p>
                <span>Password</span>
                <p><input type="password" ng-model="info.pwd" placeholder="**********" autofocus required></p>
                <button class="btn btn-primary" ng-click="insert_user(info)">insert</button>
            </form>
        </fieldset>
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>User E-mail</th>
                <th>User Pass</th>
                <th>Delete User</th>
            </tr>
            </thead>
            <tr ng-repeat="user in users">
                <!--here showing results in the table -->
                <td>{{user.id}}</td>
                <td>{{user.user_name}}</td>
                <td>{{user.user_email}}</td>
                <td><span ng-show="show_password">{{user.user_pass}}</span>
                    <span ng-hide="show_password">******************</span>
                    <a href="" style="float: right;" class="btn glyphicon glyphicon-lamp"
                       ng-click="toggle()">
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-success glyphicon glyphicon-edit">
                        <span ng-click=""></span>
                    </a>
                    <a href="" class="btn btn-danger glyphicon glyphicon-trash" ng-click="delete_user(user.id)">
                        <span></span>
                    </a>
                </td> <!--btn btn-danger is a bootstrap button to show danger-->
            </tr>
        </table>
    </div>
</div>
