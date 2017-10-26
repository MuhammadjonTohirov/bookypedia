<?php include_once 'clear.php' ?>
<?php include_once 'carousel.php' ?>
<div class="container body-container-2">
    <div class="container section-1 part-1">
        <h4 class="section-header">CURRENT BESTSELLERS</h4>
        <div class="table book-table">
            <div class="row book-row">
                <div class="col-md-2 book-item" ng-repeat="b in top_seller">
                    <div class="book book-image">
                        <img src={{b.image}}>
                    </div>
                    <div class="book">
                        <h5 class="r book-title">{{b.title}}</h5>
                        <span class="r book-author">{{b.first_name}} {{b.last_name}}</span>
                        <span class="r book-price">${{b.price}}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------------------------------------------->
    </div>

    <div class="container section-1 part-2">
        <h4 class="section-header">TOP RATED BOOKS</h4>

        <div class="table book-table">
            <div class="row book-row">
                <div class="col-md-2 book-item" ng-repeat="b in top_ranked">
                    <div class="book">
                        <img src={{b.image}}>

                    </div>
                    <div class="book">
                        <h5 class="r book-title">{{b.title}}</h5>
                        <span class="r book-author">{{b.first_name}} {{b.last_name}}</span>
                        <span class="r book-price">${{b.price}}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- section by division -->
    </div>
    <div class="container body-container-1">
        <div class="container section-3">
            <h4 class="section-header center">LIMITED TIME OFFER</h4>
            <ul class="day-row center list-unstyled" style="margin-bottom: 30px;">
                <li class="col-sm-1"><span class="day-leg">12</span><span class="day-leg">DAYS</span></li>
                <li class="col-sm-1"><span class="day-leg">34</span><span class="day-leg">HOURS</span></li>
                <li class="col-sm-1"><span class="day-leg">43</span><span class="day-leg">MINUTES</span></li>
                <li class="col-sm-1"><span class="day-leg">34</span><span class="day-leg">SECONDS</span></li>
            </ul>
            <div class="table book-table">
                <div class="row book-row">
                    <div class="col-md-2 book-item" ng-repeat="b in on_sale">
                        <div class="book">
                            <img src={{b.image}}>
                        </div>
                        <div class="book-title">
                            <h5 class="r book-title">{{b.title}}</h5>
                            <span class="r book-author">{{b.first_name}} {{b.last_name}}</span>
                            <span class="r book-price offer-price">
                                <span class="old-price">${{b.price}}</span><span
                                        class="new-price">${{b.new_price}}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container body-container-2">
        <div class="container section-4">
            <h4 class="section-header center">OUR LATEST NEWS</h4>

            <div class="table news-table">
                <div class="row news-row">
                    <div class="col-md-4 news-wrapper" ng-repeat="n in news">
                        <div class="news-item shadow">
                            <div class="news-banner">
                                <img src={{n.image}}>
                            </div>
                            <div class="news-body">
                                <span class="news-date">{{n.date}}</span>
                                <span class="news-title">{{n.title}}</span>
                                <div class="news-text">{{n.description}}
                                </div>
                                <a href="#" class="news-continue">CONTINUE READING</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container section-5 body-container-1">
    <h4 class="section-header center">OUR CUSTOMERS</h4>
    <span class="cus-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare sem. Phasellus cursus leo non posuere maximus. Aliquam erat volutpat. Nunc feugiat orci purus.
    </span>

    <div class="cus-row ">
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="cus-item">
                <div class="cus-image shadow">
                    <img src="assets/images/customers/cus1.jpeg" alt="">
                </div>
                <span class="cus-name">Amanda Spencer</span>
                <span class="cus-description">She loves books</span>
            </div>
        <?php } ?>
    </div>

</div>

</div>

