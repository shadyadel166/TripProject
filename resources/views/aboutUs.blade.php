<x-headerAboutus></x-headerAboutus>
<x-nav></x-nav>












 <style>
   /********** Template CSS **********/
:root {
    --primary: #6222CC;
    --secondary: #FBA504;
    --light: #F6F4F9;
    --dark: #04000B;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Heading ***/
h1,
h2,
.fw-bold {
    font-weight: 700 !important;
}

h3,
h4,
.fw-semi-bold {
    font-weight: 600 !important;
}

h5,
h6,
.fw-medium {
    font-weight: 500 !important;
}


/*** Button ***/
.btn {
    font-weight: 500;
    transition: .5s;
}

.btn:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 50px;
}





/*** Hero Header ***/
.hero-header {
    margin-bottom: 6rem;
    padding: 18rem 0;
    background:
        url(../img/blob-top-left.png),
        url(../img/blob-top-right.png),
        url(../img/blob-bottom-left.png),
        url(../img/blob-bottom-right.png),
        url(../img/blob-center.png),
        url(../img/bg-bottom.png);
    background-position:
        left 0px top 0px,
        right 0px top 0px,
        left 0px bottom 0px,
        right 0px bottom 0px,
        center center,
        center bottom;
    background-repeat: no-repeat;
}

@media (max-width: 991.98px) {
    .hero-header {
        padding: 6rem 0 9rem 0;
    }
}


/*** Section Title ***/
.section-title {
    position: relative;
    display: flex;
    align-items: center;
    font-weight: 500;
    text-transform: uppercase;
}

.section-title span:first-child,
.section-title span:last-child {
    position: relative;
    display: inline-block;
    margin-right: 30px;
    width: 30px;
    height: 2px;
}

.section-title span:last-child {
    margin-right: 0;
    margin-left: 30px;
}

.section-title span:first-child::after,
.section-title span:last-child::after {
    position: absolute;
    content: "";
    width: 15px;
    height: 2px;
    top: 0;
    right: -20px;
}

.section-title span:last-child::after {
    right: auto;
    left: -20px;
}

.section-title.text-primary span:first-child,
.section-title.text-primary span:last-child,
.section-title.text-primary span:first-child::after,
.section-title.text-primary span:last-child::after {
    background: var(--primary);
}

.section-title.text-secondary span:first-child,
.section-title.text-secondary span:last-child,
.section-title.text-secondary span:first-child::after,
.section-title.text-secondary span:last-child::after {
    background: var(--secondary);
}

.section-title.text-white span:first-child,
.section-title.text-white span:last-child,
.section-title.text-white span:first-child::after,
.section-title.text-white span:last-child::after {
    background: #FFFFFF;
}


/*** Feature ***/
.feature-item {
    transition: .5s;
}

.feature-item:hover {
    margin-top: -15px;
}


/*** About ***/
.progress {
    height: 5px;
}

.progress .progress-bar {
    width: 0px;
    transition: 3s;
}


/*** Fact ***/
.fact {
    margin: 6rem 0;
    background:
        url(../img/blob-top-left.png),
        url(../img/blob-top-right.png),
        url(../img/blob-bottom-left.png),
        url(../img/blob-bottom-right.png),
        url(../img/blob-center.png);
    background-position:
        left 0px top 0px,
        right 0px top 0px,
        left 0px bottom 0px,
        right 0px bottom 0px,
        center center;
    background-repeat: no-repeat;
}


/*** Service ***/
.service-item {
    position: relative;
    padding: 45px 30px;
    background: var(--light);
    overflow: hidden;
    transition: .5s;
}

.service-item:hover {
    margin-top: -15px;
    padding-bottom: 60px;
    background: var(--primary);
}

.service-item .service-icon {
    margin: 0 auto 20px auto;
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    background: url(../img/blob-primary.png) center center no-repeat;
    background-size: contain;
    transition: .5s;
}

.service-item:hover .service-icon {
    color: var(--dark);
    background: url(../img/blob-secondary.png) center center no-repeat;
    background-size: contain;
}

.service-item h5,
.service-item p {
    transition: .5s;
}

.service-item:hover h5,
.service-item:hover p {
    color: #FFFFFF;
}

.service-item a.btn {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    color: var(--primary);
    background: #FFFFFF;
    border-radius: 40px 40px 0 0;
    transition: .5s;
    z-index: 1;
}

.service-item a.btn:hover {
    color: var(--dark);
    background: var(--secondary);
}

.service-item:hover a.btn {
    bottom: 0;
}


/*** Project Portfolio ***/
#portfolio-flters li {
    display: inline-block;
    font-weight: 500;
    color: var(--dark);
    cursor: pointer;
    transition: .5s;
    border-bottom: 2px solid transparent;
}

#portfolio-flters li:hover,
#portfolio-flters li.active {
    color: var(--primary);
    border-color: var(--primary);
}

.portfolio-item img {
    transition: .5s;
}

.portfolio-item:hover img {
    transform: scale(1.1);
}

.portfolio-item .portfolio-overlay {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(98, 34, 204, .9);
    transition: .5s;
    opacity: 0;
}

.portfolio-item:hover .portfolio-overlay {
    opacity: 1;
}


/*** Newsletter ***/
.newsletter {
    margin: 6rem 0;
    background:
        url(../img/blob-top-left.png),
        url(../img/blob-top-right.png),
        url(../img/blob-bottom-left.png),
        url(../img/blob-bottom-right.png),
        url(../img/blob-center.png);
    background-position:
        left 0px top 0px,
        right 0px top 0px,
        left 0px bottom 0px,
        right 0px bottom 0px,
        center center;
    background-repeat: no-repeat;
}


/*** Testimonial ***/
.testimonial-carousel .testimonial-item {
    padding: 0 30px 30px 30px;
}

.testimonial-carousel .owl-nav {
    display: flex;
    justify-content: center;
}

.testimonial-carousel .owl-nav .owl-prev,
.testimonial-carousel .owl-nav .owl-next {
    margin: 0 12px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    background: var(--light);
    border-radius: 60px;
    font-size: 22px;
    transition: .5s;
}

.testimonial-carousel .owl-nav .owl-prev:hover,
.testimonial-carousel .owl-nav .owl-next:hover {
    color: #FFFFFF;
    background: var(--primary);
    box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}


/*** Team ***/
.team-item .btn {
    color: var(--primary);
    background: #FFFFFF;
}

.team-item .btn:hover {
    color: #FFFFFF;
    background: var(--primary);
}


/*** Footer ***/
.footer {
    margin-top: 6rem;
    padding-top: 9rem;
    background:
        url(../img/bg-top.png),
        url(../img/map.png);
    background-position:
        center top,
        center center;
    background-repeat: no-repeat;
}

.footer .btn.btn-social {
    margin-right: 5px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid rgba(256, 256, 256, .1);
    border-radius: 40px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 10px;
    padding: 0;
    text-align: left;
    color: var(--light);
    font-weight: normal;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
    color: var(--secondary);
}

.footer .copyright {
    padding: 25px 0;
    font-size: 14px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

.footer .copyright a:hover,
.footer .footer-menu a:hover {
    color: var(--secondary);
}
</style>

<body>


    <div class="container-xxl bg-white p-0">


        <div class="container-xxl position-relative p-0 mt-5">
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">About Us</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">DEMONS PLANE</h1>
                        <p class="mb-4">"Welcome to <span style="font-size: 20px">Demons Plane</span> ,Book your next
                            exciting journey with Demons Plane. We offer a comfortable, safe, and fast booking
                            experience with accurate information and instant confirmation. Enjoy a unique design,
                            excellent customer service, and personalized options for an unforgettable trip. Book now
                            with ease and let us meet all your travel needs."

                        </p>

                        <a href="trips" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">BOOKING NOW</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="./img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Trip<span></span>
                    </p>
                    <h1 class="text-center mb-5">Our Best Trip</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="assets/imgs/cairo.jpg" alt="">
                                <h5>CAIRO</h5>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="assets/imgs/alex.jpg" alt="">
                                <h5>ALEXANDRIA</h5>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="assets/imgs/aswan.jpg" alt="">
                                <h5>ASWAN</h5>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

    </div>

<x-footer></x-footer>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/wow/wow.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/counterup/counterup.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="assets/js/script.js"></script>



</body>
