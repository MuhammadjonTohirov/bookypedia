<?php include_once 'clear.php' ?>
<div class="container">
    <div class="row">

        <div class="col-md-12 url">
            <!-- here should stay the url -->
            home/books
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <span class="genres-header">Shop By Category</span>
        </div>
        <div class="col-md-6">
            <span>Sort by</span>
            <select name="option-list" class="sort-by">
                <option>Newest Items</option>
                <option>Price</option>
                <option>Rank</option>
            </select>
        </div>
        <div class="col-md-3 view-type">
            <a href="#"><img src="assets/icons/list-act.png"></a>
            <a href="#"><img src="assets/icons/squares-gallery-grid-layout-interface-symbol.png"></a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-unstyled sidebar-list">
                <li><a>All genre</a></li>
                <li><a>Arts & Photography</a></li>
                <li><a>Biographies&Memoirs</a></li>
                <li><a>hildren's Books</a></li>
                <li><a>Cookbook, Food&Wine</a></li>
                <li><a>History</a></li>
                <li><a>Literature&Fiction</a></li>
                <li><a>Mystery&Suspense</a></li>
                <li><a>Romance</a></li>
                <li><a>Sci-Fi&Fantasy</a></li>
                <li><a>Teen&Young Adult</a></li>
            </ul>
        </div>

        <!-- END SIDEBAR -->
        <div class="container col-md-9">
                <div class="container book-item-list">
                    <!-- rows should be generated -->
                    <div class="col-md-12 book-item-list-inner">
                        <div class="container book-list">
                            <div class="book-image-wrapper">
                                <div class="book book-image">
                                    <img src="assets/images/books/Art&Photography/book2.jpg">
                                </div>

                            </div>

                            <div class="book-description-wrapper">
                                <div class="book-list-item col-md-12">
                                    <div class="middle">
                                        <span class="book-title book-title-list">Modern And Contemp Art</span>
                                        <span class="book-author book-author-list">Ian Chevish</span>
                                    </div>
                                </div>
                                <div class="book-list-item col-md-12">
                                    <span class="book-price middle">$12</span>
                                <span class="middle">
                                    RANKING
                                </span>
                                </div>
                                <div class="book-list-item col-md-12 book-list-item-description">
                                <span class="middle">
                                    Lorem ipsum doler casdkc asd;omcas casodmcas
                                oasdcomaspdc
                                asdmcpamsdc
                                pasdmcpoamsdc pasmdcpomasdc pasmdcpoa sdcpmaspdc pasdmcpoa sdcpoamsdc apsodmcpa
                                sdcpomasd cpasodmcpa
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

