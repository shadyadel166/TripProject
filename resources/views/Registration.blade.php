<x-header></x-header>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)30%, rgba(0, 0, 0, 0.5)30%), url("assets/imgs/backReg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

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
    @if ($message = Session::get('success'))
        <div class="alert alert-info">
            {{ $message }}
        </div>
    @endif


    <div class="container px-4 py-1 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-lg-3   " style="z-index: 10">
                <h1 class="my-1  display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    The best Trip ✈ <br />
                    <span style="color: hsl(218, 81%, 75%)">seek your next adventure </span>
                </h1>

            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="{{ route('sample.validate_registration') }}" method="POST">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->

                            <div class="row">
                                <div class="col mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Please Enter Your Name..." />
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Please Enter Your Email..." />
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password"
                                    class="form-control"placeholder="Please Enter Your password..." />
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>


                            <div class="form-outline mb-4">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control"
                                    placeholder="Please Enter Your phone..." />
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>


                            <div class="col mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="national">National ID</label>
                                    <input type="text" name="national" class="form-control"
                                        placeholder="Please Enter Your National ID..." />
                                    @if ($errors->has('national id'))
                                        <span class="text-danger">{{ $errors->first('national') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" name="city" class="form-control"
                                        placeholder="Please Enter Your City..." />
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                            <div>
                                <a href="Registration"> I have an account.</button></a>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
