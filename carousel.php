

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--<script src="assets/bootstrap/js/http_ajax.googleapis.com_ajax_libs_jquery_3.2.1_jquery.js"></script>-->
<!--<script src="assets/bootstrap/js/http_maxcdn.bootstrapcdn.com_bootstrap_3.3.7_js_bootstrap.js"></script>-->



<div class="container carousel-container" style="border: 1px solid red">
    <div class="slideshow-container container" style="height: 100%; border: 1px solid green;">
        Salam
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="news1.jpeg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="news1.jpeg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/images/carousel/image3.jpeg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>

<div class="container body-container-1 shadow">
    <div class="container">
        <div class="table-u-c">
            <div class="row-u-c">
                <div class="col-md-3 u-c-item">
                    <img src="assets/icons/delivery-truck.png" alt="">
                    <h6 class="u-c-header">Quick Delivery</h6>
                    <p class="u-c-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam ultrices ante ut mauris varius tristique porta id ante.
                    </p>
                </div>
                <div class="col-md-3 u-c-item">
                    <img src="assets/icons/checked.png" alt="">
                    <h6 class="u-c-header">Easy Payment</h6>
                    <p class="u-c-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam ultrices ante ut mauris varius tristique porta id ante.
                    </p>
                </div>
                <div class="col-md-3 u-c-item">
                    <img src="assets/icons/handshake.png" alt="">
                    <h6 class="u-c-header">Best Deal</h6>
                    <p class="u-c-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam ultrices ante ut mauris varius tristique porta id ante.
                    </p>
                </div>
                <div class="col-md-3 u-c-item">
                    <img src="assets/icons/shield.png" alt="">
                    <h6 class="u-c-header">Secured Payment</h6>
                    <p class="u-c-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam ultrices ante ut mauris varius tristique porta id ante.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    window.onload = function(){
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex> slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    }
</script>