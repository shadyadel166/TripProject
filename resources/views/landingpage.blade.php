<x-header></x-header>

<x-nav> </x-nav>
<style>
    .container2 {
        height: 100vh;
        width: 100vw;
        max-height: 600px;
        max-width: 1200px;
        min-height: 600px;
        min-width: 1100px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 0% 5%;

    }



    .panel {
        height: 270px;
        width: 190px;
        position: relative;

        &:hover {
            .card {
                filter: blur(1.5px);
            }

            .card1 {
                background-size: 215% 135%;
            }

            .card2 {
                background-size: 115% 115%;
            }

            .card3 {
                background-size: 155% 115%;
            }

            .title {
                color: rgb(48, 123, 227);
            }

            .border {
                border: 1px solid rgba(255, 255, 255, 1);
            }

            .slide {
                bottom: 0px;
            }

            .ring:before,
            .ring:after {
                transform: translateX(-50%) translateY(-50%) rotate(310deg);
            }
        }
    }

    .ring,
    .card,
    .border,
    .slide,
    .line {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ring {
        color: #fffbf1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        font-size: 170px;
    }

    .card {
        background: #f0ead6;
        position: relative;
        transition: all 1s;
        height: 270px;
        width: 190px;
        border: 1px solid rgba(255, 255, 255, 1);
    }

    .card1 {
        background-image: url("assets/imgs/alex.jpg");
        background-repeat: no-repeat;
        background-size: 200% 120%;
    }

    .card2 {
        background-image: url("assets/imgs/aswan.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .card3 {
        background-image: url("https://assets.codepen.io/489403/egypt.jpg");
        background-repeat: no-repeat;
        background-size: 140% 100%;
    }

    .ring:before,
    .ring:after {
        content: "";
        padding: 0.7em 0.4em;
        position: absolute;
        left: 50%;
        width: 115%;
        top: 50%;
        display: block;
        border: 5px solid #50c9c3;
        border-radius: 50%;
        transition: transform 1s;
        transform: translateX(-50%) translateY(-50%) rotate(50deg);
    }

    .ring:before {
        border-color: rgb(235, 235, 235) rgb(235, 235, 235) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
        z-index: -1;
    }

    .ring:after {
        border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgb(235, 235, 235) rgb(235, 235, 235);
    }

    p {
        text-align: center;
        position: absolute;
        font-family: "Playfair Display";
        /* color: #0000; */
    }

    .title {
        font-size: 36px;
        font-weight: 700;
        transition: all 1s;
        top: 0;
        color: #000000;
    }

    .para {
        bottom: 0;
        font-size: 16px;
        font-family: "Raleway";
        padding: 20px;
        margin: 0;
        text-align: center;
    }

    .border {
        position: absolute;
        border: 1px solid rgba(255, 255, 255, 0.5);
        height: 260px;
        width: 180px;
        transition: border 1s;
        overflow: hidden;
    }

    .slide {
        height: 260px;
        width: 180px;
        position: absolute;
        border: 1px solid black;
        bottom: -270px;
        background: rgba(0, 0, 0, 0.5);
        transition: bottom 1s;
        flex-direction: column;
    }

    .fa-plane {
        font-size: 16px;
    }

    .trip {
        margin-top: 50%;
        display: flex;
        justify-content: center;
        margin-left: 35%;
    }

</style>

<body>
    <div class="container1">
        <a href="contactUs"><img title="Do You Need Any Help ?" id="navbar" src="assets/imgs/Group 130.png"
                alt=""></a>
        <div class="fristSection">
            <div class="text">
                <h1>Travel With Us </h1>
                <p>We Specialize For Local Airline We Specialize For Local Airline</p>
                <a href="trips"><button> Get Started </button></a>
            </div>
            <img src="assets/imgs/Group 15.png" alt="">
        </div>
        <div class="seconedSection">
           <a href="aboutUs">
               <img class="aboutus" src="assets/imgs/Group 103.png" alt="">
            </a>
            <div class="text">
                <h1>That Time To Travel With <span>Us</span> </h1>
                <p>Book your nextexciting journey with us. We offer a comfortable, safe, and fast booking
                    experience with accurate information and instant confirmation.</p>
            </div>
            <img class="window" src="assets/imgs/Group 102.png" alt="">

        </div>

        {{-- card --}}
        <img class="trip" src="assets/imgs/Group 105.png" width="30%" alt="">

        <div class="container2">
            <div class="panel">
                <div class="ring">
                    <div class="card card1"></div>
                    <div class="border">
                        <p class="title">Alex</p>
                        <div class="slide">
                            <h6 class="para">Latest Deals from DEMON PLANE</h6>
                            <div class="line">
                                <h6 class="para">OUT</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                                <h6 class="para">$150</h6>
                            </div>
                            <div class="line">
                                <h6 class="para">RTN</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                                <h6 class="para">$125</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="ring">
                    <div class="card card2"></div>
                    <div class="border">
                        <p class="title">Aswan</p>
                        <div class="slide">
                            <h6 class="para">Latest Deals from DEMON PLANE</h6>
                            <div class="line">
                                <h6 class="para">OUT</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                                <h6 class="para">$100</h6>
                            </div>
                            <div class="line">
                                <h6 class="para">RTN</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                                <h6 class="para">$50</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="ring">
                    <div class="card card3"></div>
                    <div class="border">
                        <p class="title">Egypt</p>
                        <div class="slide">
                            <h6 class="para">Latest Deals from DEMON PLANE</h6>
                            <div class="line">
                                <h6 class="para">OUT</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                                <h6 class="para">$30</h6>

                            </div>
                            <div class="line">
                                <h6 class="para">RTN</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                                <h6 class="para">$75</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>

</body>
<x-footer></x-footer>
