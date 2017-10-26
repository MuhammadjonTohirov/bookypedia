<?php
session_start();

if (!$_SESSION['admin_name']) {
    header("Location: Admin_login.php");//redirect to login page to secure the welcome page without login access.
}

?>
<div class="table-scrol">
    <h1 align="center">All Books</h1>
    <!--    {{error}}-->
    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
        <div><p class="glyphicon glyphicon-search"></p><input class="form-control" type="text"
                                                              ng-keydown="search_book(se)"
                                                              ng-model="se"
                                                              placeholder="search">
        </div>
        <br><br>
        <a class="btn btn-primary" ng-click="toggle_book_insertion()">Insert a new book</a>
        <p></p>
        <form enctype="multipart/form-data" name="test_upload" >
            <input type="file" ng-model="file">
        </form>
        <fieldset ng-show="show_insert_field">
            <legend>Create User</legend>
            <form class="form-group-lg" id="insert_form" enctype="multipart/form-data"
                  style="margin-left: 20%; margin-right: 20%; text-align: center">
                <span>isbn</span>
                <p><input type="text" ng-model="info.u_n" placeholder="001-1251-12" autofocus required></p>
                <span>title</span>
                <p><input type="text" ng-model="info.e_m" placeholder="Hercule Poirot" autofocus required></p>
                <span>author</span>
                <p><label>
                        <select ng-init="get_authors()">
                            <option ng-repeat="n in authors" value={{n.id}}>
                                <span>{{n.FirstName}} {{n.LastName}}</span>
                            </option>
                        </select>
                    </label>
                </p>
                <span ng-init="get_genres()">genre</span>
                <p ng-repeat="n in genres">
                    <label style="">
                        <input type="checkbox" ng-model="info.genre" value={{n.id}}>
                        {{n.title}}
                    </label>
                </p>
                <button class="btn btn-primary" ng-click="insert_user(info)">insert</button>
            </form>
        </fieldset>
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>
            <tr>
                <th>isbn</th>
                <th>title</th>
                <th>author</th>
                <th>genre</th>
                <th>action</th>
            </tr>
            </thead>
            <tr ng-repeat="book in books">
                <td>
                    {{book.isbn}}
                </td>
                <td>
                    {{book.title}}
                </td>
                <td>
                    {{book.first_name}} {{book.last_name}}
                </td>
                <td>
                    {{book.genre}}
                </td>
                <td>
                    <a href="" class="btn btn-success glyphicon glyphicon-edit">
                        <span ng-click=""></span>
                    </a>
                    <a href="" class="btn btn-danger glyphicon glyphicon-trash" ng-click="delete_user(user.id)">
                        <span></span>
                    </a>
                </td>
            </tr>
        </table>
    </div>

</div>
