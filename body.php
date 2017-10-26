<div ng-app="body" class="container body-container">
    <div class="container section-1 part-1" >
        <!--current bestsellers-->
        <div class="table" ng-controller="body_controller">
            <h4 class="section-header">Current Bestsellers</h4>
            {{title}}
            <div class="row">
                <div class="col-md-2 best-item" ng-repeat="b in details">
                    <div class="best-book">
                        <img src="{{b.image}}">
                    </div>
                    <div class="best-author-box">
                        <h5 class="">{{b.title}}</h5>
                        <span>{{b.first_name}} {{b.last_name}}</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end of the current bestsellers-->

        <div class="container section-1 part-2" ng-controller="body_controller2">
            <h4 class="section-header">Top Rated Books</h4>

            <div class="table">
                <div class="row">
                    <div class="col-md-2 best-item" ng-repeat="b in top_ranked">

                        <div class="best-book">
                            <img src="{{b.image}}">
                        </div>
                        <div class="best-author-box">
                            <h5 class="">{{b.title}}</h5>
                            <span>{{b.first_name}} {{b.last_name}}</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- section by division -->
        <div class="container section-3">
            <h4 class="section-header">LIMITED TIME OFFER</h4>
            <div class="table days-table">
                <div class="row">
                    <div class="days col-sm-1"><span class="number">11</span>DAYS</div>
                    <div class="days col-sm-1"><span class="number">02</span>HOURS</div>
                    <div class="days col-sm-1"><span class="number">19</span>MINUTES</div>
                    <div class="days col-sm-1"><span class="number">42</span>SECONDS</div>
                </div>
            </div>


        </div>

        <div class="container section-4">
            <h4 class="section-header">OUR LATEST NEWS</h4>
        </div>

        <div class="container section-5">
            <h4 class="section-header">OUR CUSTOMERS</h4>
        </div>

    </div>
</div>