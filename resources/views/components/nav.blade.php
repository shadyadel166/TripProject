{{-- <x-header></x-header> --}}
<style>
    nav {
        /* background-color: rgb(185, 185, 208); */
        position: absolute;
        top: 5%;
        right: 0;
        left: 0;
        width: 550px;
        display: flex;
        justify-content: center;
        flex-direction: row;
        /* text-align: center; */
        margin: auto 55%;
        transform: translateY(-50%);
        color: #000000;
        /* From https://css.glass */
        /* background: rgba(255, 255, 255, 0.45); */
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(1.5px);
        -webkit-backdrop-filter: blur(1.5px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        padding: 5px;
    }

    nav a {
        position: relative;
        /* width: 60%; */
        color: #000000;

        text-decoration: none;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        margin: 10px;

        padding: 5px 5px;
        transition: 0.2s ease color;
    }

    nav a:before,
    nav a:after {
        content: "";
        position: absolute;
        border-radius: 50%;
        transform: scale(0);
        transition: 0.2s ease transform;
    }

    nav a:before {
        top: 0;
        left: 10px;
        width: 6px;
        height: 6px;
    }

    nav a:after {
        top: 5px;
        left: 18px;
        width: 4px;
        height: 4px;
    }

    nav a:nth-child(1):before {
        background-color: yellow;
    }

    nav a:nth-child(1):after {
        background-color: red;
    }

    nav a:nth-child(2):before {
        background-color: #00e2ff;
    }

    nav a:nth-child(2):after {
        background-color: #89ff00;
    }

    nav a:nth-child(3):before {
        background-color: purple;
    }

    nav a:nth-child(3):after {
        background-color: palevioletred;
    }

    nav a:nth-child(4):before {
        background-color: rgb(32, 51, 171);
    }

    nav a:nth-child(4):after {
        background-color: rgb(68, 131, 240);
    }

    nav a:nth-child(5):before {
        background-color: rgb(12, 241, 215);
    }

    nav a:nth-child(5):after {
        background-color: rgb(11, 221, 70);
    }



    #indicator {
        position: absolute;
        left: 5%;
        bottom: -10%;
        width: 30px;
        height: 2px;
        background-color: #fff;
        border-radius: 5px;
        transition: 0.2s ease left;
    }

    nav a:hover {
        color: #4467cf;
    }

    nav a:hover:before,
    nav a:hover:after {
        transform: scale(1);
    }

    nav a:nth-child(1):hover~#indicator {

        background: linear-gradient(130deg, yellow, red);

    }

    nav a:nth-child(2):hover~#indicator {
        left: 20%;
        background: linear-gradient(130deg, #00e2ff, #89ff00);
    }

    nav a:nth-child(3):hover~#indicator {
        left: 40%;
        background: linear-gradient(130deg, purple, palevioletred);
    }

    nav a:nth-child(4):hover~#indicator {
        left: 70%;
        background: linear-gradient(130deg, #ffde00, #070707);
    }

    nav a:nth-child(5):hover~#indicator {
        left: 90%;
        background: linear-gradient(130deg, #ff2f00, #173e81);
    }


</style>
</head>

<body>

    <h4 class=" m-lg-4 text-primary ">DEMON PLANE</h4>
    <nav class="    ">
        <a href="/">Home</a>
        <a href="trips">Trips</a>
        <a href="contactUs">Contact Us</a>
        <a href="aboutUs">About Us</a>
        @guest
            <a href="{{ route('login') }}">Login</a>
        @else
            <a  href="{{ route('logout') }}">Logout</a>
        @endguest

        <div id="indicator"></div>
    </nav>
</body>

</html>
