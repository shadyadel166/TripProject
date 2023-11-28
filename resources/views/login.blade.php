<x-header></x-header>



<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background: linear-gradient(to top, rgba(3, 4, 6, 0.5)70%, rgba(0, 0, 0, 0.5)70%), url("assets/imgs/top-view-white-toy-plane-map.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
        }


        .bg-glass {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
    <x-nav></x-nav>

    <div class="container px-8 py-5 px-md-2 text-center text-lg-start my-5">
        <div class="row gx-lg-30 align-items-center mb-10">
            <div class="col-lg-6 mb-20 mb-lg-30" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    You Are Ready <br />
                    <span style="color: hsl(218, 81%, 75%)">Let's Go</span>
                </h1>

            </div>

            <div class="col-lg-6 mb-15 mb-lg-5  position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-5  py-5  px-md-15 ">
                        <form action="{{ route('sample.validate_login') }}" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Please Enter Your Email..." />
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control"placeholder="Please Enter Your password..." />
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <a href="landingpage"> <button type="submit" class="btn btn-primary">Log In</button></a>
                            <div>
                                <a href="Registration"> Don't have an account.?</button></a>

                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-info">
                                    {{ $message }}
                                </div>
                            @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Section: Design Block -->
