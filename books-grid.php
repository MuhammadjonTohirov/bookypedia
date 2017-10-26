<?php include_once 'clear.php' ?>
<link href="ppp/style2.css" type="text/css" rel="stylesheet">
<script src="ppp/pagination.js"></script>

<div class="container">
    <div class="row">
        <!--        {{error}}-->
        <div class="col-md-12 url">
            <!-- here should stay the url -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <span class="genres-header">Shop By Category</span>
        </div>
        <div class="col-md-6">
            <span>Sort by</span>
            <select class="sort-by"
                    ng-model="myObj"
                    ng-options="o.id as o.name for o in options"
                    ng-change="sort_genre(myObj)">
            </select>
        </div>
        <div class="col-md-3 view-type">
            <a ng-if="is_grid" ng-click="grid()"><img
                        src="assets/icons/squares-gallery-grid-layout-interface-symbol-act.png"></a>
            <a ng-if="!is_grid" ng-click="linear()"><img src="assets/icons/list-act.png"></a>

            <a ng-if="!is_grid" ng-click="grid()"><img
                        src="assets/icons/squares-gallery-grid-layout-interface-symbol-active.png"></a>
            <a ng-if="is_grid" ng-click="linear()"><img src="assets/icons/list-active.png"></a>
        </div>
    </div>
</div>

<div class="container">
    <!--    {{error}}-->
    <div class="row">
        <div class="col-md-3">
            <ul class="list-unstyled sidebar-list">
                <li><a href="" ng-click="select_genre('-1')">All</a></li>
                <span ng-click="select_genre(gen.id)" ng-repeat="gen in genres">
                <li><a href="">{{gen.title}}</a></li>
            </span>
            </ul>
        </div>
        <script>
            function a() {
                alert("b");
            }
        </script>
        <!-- END SIDEBAR -->
        <p onclick="a()">Open Modal</p>

        <div id="openModal" class="dialog">
            <div>
                <a href="" title="Close" class="close">X</a>
                <h2>Modal Box</h2>
                <p>This is a sample modal box that can be created using the powers of CSS3.</p>
                <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create
                    a login/register form for users.</p>
            </div>
        </div>

        <div class="container col-md-9" ng-if="is_grid">
            <div class="row row-centered" style="width: 100%">
                <div class="col-md-4 book-item book-item-custom" ng-repeat="book in books">
                    <div class="book-wrapper" >
                        <a href="#/books/single"
                           ng-click="set_movement(book)">
                            <div class="book">

                                <img src={{book.image}}>
                            </div>
                            <div class="book-title">
                                <h5 class="r book-title book-title-center">{{book.title}}</h5>
                                <span class=" book-author hover-hide">{{book.first_name}} {{book.last_name}}</span>
                                <span class="r book-price hover-hide">$ {{book.price}}</span>
                            </div>
                            <input ng-model="bo_id" value={{book.b_id}} hidden>
                            <div class="add-to-cart-btn-wrapper">
                                <a class="add-to-cart-btn btn btn-primary"> ADD TO CART</a>
                                <span class="r clearer">PLACEHOLDER</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-md-9" ng-if="!is_grid">
            <div class="container book-item-list">
                <!-- rows should be generated -->
                <div class="col-md-12 book-item-list-inner" ng-repeat="book in books">
                    <div class="container book-list">
                        <div class="book-image-wrapper">
                            <div class="book book-image">
                                <img src={{book.image}}>
                            </div>

                        </div>

                        <div class="book-description-wrapper">
                            <div class="book-list-item col-md-12">
                                <div class="middle">
                                    <span class="book-title book-title-list">{{book.title}}</span>
                                    <span class="book-author book-author-list">{{book.first_name}} {{book.last_name}}</span>
                                </div>
                            </div>
                            <div class="book-list-item col-md-12">
                                <span class="book-price middle">$ {{book.price}}</span>
                                <p>rank {{book.rank}}</p>
                            </div>

                            <div class="book-list-item col-md-12 book-list-item-description scrollbar" id="style-1">
                                <span class="middle">
                                    {{book.description}}
                                </span>
                            </div>
                            <div class="book-list-item col-md-12">
                                <button class="add-to-cart-btn middle">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pagination-centered">
        <div class="pagination">
            <a href="#" id="prev">&laquo;</a> <!-- &laquo; -->
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#" id="next">&raquo;</a>
        </div>
    </div>
</div>
<script src="ppp/dirPagination.js"></script>
<script src="ppp/script.js"></script>

