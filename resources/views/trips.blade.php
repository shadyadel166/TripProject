<x-header></x-header>
<x-nav></x-nav>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    {{-- <link rel="stylesheet" href="bar_style.css"> --}}
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>


    <style>

        .slider {
            max-width: 1080px;
            display: flex;
            margin-top: 8%;
            margin-bottom: 35%;
            margin-left: 7px;
            height: 300px;

        }

        .slider .card {
            flex: 1;
            margin: 0 10px;
            background: #fff;
        }

        .slider .card .img {
            height: 200px;
            width: 100%;
        }

        .slider .card .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .slider .card .content {
            padding: 10px 20px;
        }

        .card .content .title {
            font-size: 25px;
            font-weight: 600;
            color: #031C78;
        }

        .card .content .sub-title {
            font-size: 20px;
            font-weight: 600;
            line-height: 20px;
        }

        .card .content p {
            text-align: justify;
            margin: 10px 0;
        }

        /* .card .content .btn {
            display: block;
            text-align: left;
            margin: 10px 0;

        } */

        .card .content .btn button {
            background: #031C78;
            color: #fff;
            border: none;
            outline: none;
            font-size: 17px;
            padding: 5px 8px;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.2s;
        }

        .card .content .btn button:hover {
            transform: scale(0.9);
        }

        .slide-bar {
            margin: 10px;

        }

        .section {
            position: relative;
            height: 100vh;
        }

        .section .section-center {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);

        }
    </style>
</head>







<body>
<div class="container">

    <div class="slide-bar">

        <div class="slider owl-carousel">
            @foreach ($trips as $trip )

            <div class="card">
                <div class="img">
                    <img src="img/{{ $trip->image }}" alt="">
                </div>
                <div class="content">
                    <div class="title"> <i class="fa-solid fa-plane"></i> {{ $trip->fromCity }}</div>

                    <div class="title"><i class="fa-solid fa-calendar-days fa-bounce"></i> {{ $trip->date }}</div>
                    <div class="sub-title"><i class="fa-solid fa-plane-departure fa-beat-fade"></i>{{ $trip->fromCity }}

                    </div>
                    <p class="">
                        <i class="fa-solid fa-plane-arrival fa-beat-fade"></i>{{$trip->toCity}}
                    </p>
                    <div class="title">
                        <i class="fa-solid fa-money-check-dollar fa-bounce fa-xs"></i>
                        {{ $trip->price }}
                    </div>

                    <h3 class=" ml-3 ">
                        <i class="ph-fill ph-office-chair" style="color: #031C78"></i>
                        {{ $trip->seats_availble }}

                    </h3>
                    <div class="btn">
                        {{-- <a href="{{ url('/trip/' . $item->id) }}" title="View trip"><button
                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                            View</button>
                    </a> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <script>
            $(".slider").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
            });
            </script>
    </div>
 <x-header></x-header>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New User </button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <h1 class="modal-title fs-5 justify-center text-center mt-2" id="staticBackdropLabel">Add New User</h1>

        <div class="modal-body">
            <!-- Pills navs -->


            <div class="tab-content">

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="text-center mb-3">

                        <div class="form-outline mb-4">
                            <label class="form-label" for="fromCity">From City</label>
                            <input type="text" name="fromCity" id="" class="form-control" />
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label" for="toCity">To City</label>
                            <input type="text" name="toCity" id="" class="form-control" />
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label" for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="price">Price</label>
                            <input type="text" name="price" id="" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="image">Img_Travel</label>
                            <input type="file" name="image" id="loginName" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="seats_availble">seats_availble</label>
                            <input type="text" name="seats_availble" id="seats_availble" class="form-control" />
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    </div>

                    <!-- Pills content -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="Add" class="btn btn-primary">Add</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>




</div>
<x-footer></x-footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>
