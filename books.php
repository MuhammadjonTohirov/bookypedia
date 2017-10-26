<?php include_once 'clear.php'?>
<div class="container outer" style="border: 1px solid black;">
    <div class="container inner" style="border: 1px solid green;">
        <!-- side bar left -->
        <div class="col-left side-bar" style="border: 1px solid black;">
            <h5 class="side-header">Shop By Category</h5>
            <ul class="list-unstyled side-links">
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

        <!-- main content -->
        <div class="container col-right content" style="border: 1px solid black;">
            <div class="table">
                <div class="row">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <div class="col-md-2 book-item" style="border:1px solid black;" >
                            <div class="book">
                                <img src="assets/images/books/Art&Photography/book1.jpg">
                            </div>
                            <div class="book">
                                <h5 class="r book-title">Design For Artists and Craftsmen</h5>
                                <span class="r book-author">Louis Volchonok</span>
                                <span class="r book-price">$12.90</span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
