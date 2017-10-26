<?php include_once 'clear.php' ?>
<div class="container">
    <div class="row">

        <div class="col-md-12 url">
            <!-- here should stay the url -->
<!--            home/books/single-->
<!--            {{error1}}-->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 related-wrapper">

            <div class="container single-container">
                <div class="col-md-4 book-single-image">
                    <div class="book-single">
                        <img src={{book[0].image}} alt="">

                    </div>
                </div>
                <div class="col-md-8 book-item-single-description">
                    <div class="col-md-12 book-single-item">
                        <div class="middle book-single-author">
                            <span class="book-title book-title-single">{{book[0].title}}</span>
                            <span class="book-author book-author-single">{{book[0].first_name}} {{book[0].last_name}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 book-single-item">
                        rank
                    </div>
                    <div class="col-md-12 book-single-item">
                        <span class="best-price book-price middle">${{book[0].price}}</span>
                    </div>
                    <div class="col-md-12 book-single-item single-description scrollbar" id="style-1">
                        <div class="middle book-single-item-description force-overflow">
                             {{book[0].description}}
                        </div>
                    </div>
                    <div class="book-single-item slide-wrapper">
                        <span class="slide-show">
                            <div class="prev-btn"><span>-</span></div>
                            <div class="current"><span>1</span></div>
                            <div class="next-btn"><span>+</span></div>
                        </span>
                        <button class="add-to-cart-btn middle">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="container table-wrapper">
                <div class="container col-md-12 table-wrapper">
                    <table class="table table-bordered description-table">
                        <tr>
                            <td class="col-md-3">Title</td>
                            <td>{{book[0].title}}</td>
                        </tr>


                        <tr>
                            <td class="col-md-3">ISBN</td>
                            <td>{{book[0].isbn}}</td>

                        </tr>
                        <tr>
                            <td class="col-md-3">Author</td>
                            <td>{{book[0].first_name}} {{book[0].last_name}}</td>

                        </tr>
                        <tr>
                            <td class="col-md-3">Language</td>
                            <td>English</td>

                        </tr>
                        <tr>
                            <td class="col-md-3">Publication date</td>
                            <td>{{book[0].p_date}}</td>

                        </tr>

                    </table>
                </div>

            </div>
        </div>

        <!-- END SIDEBAR -->
        <div class="col-md-3" >

                <div class="container book-related-item" ng-repeat="b in books">
                    <div class="col-md-6 book-related">
                        <div class="book-related-image">
                            <img src={{b.image}} alt="">
                        </div>
                    </div>
                    <div class="col-md-6 book-related">

                        <div class="middle book-related-title">
                            <span class="book-title">{{b.title}}</span>
                            <span class="book-author">{{b.first_name}} {{b.last_name}}</span>

                        </div>
                        <div class="middle">
                            <span class="book-price middle book-price-blue">$ {{b.price}}</span>
                        </div>

                    </div>
                </div>

        </div>

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        if (!$.browser.webkit) {
            $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
        }
    }); </script>