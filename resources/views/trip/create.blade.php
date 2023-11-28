@extends('trip.app')
@section('content')


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New User </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1 class="modal-title fs-5 justify-center text-center mt-2" id="staticBackdropLabel">Add New User</h1>

                <div class="modal-body">
                    <!-- Pills navs -->


                    <div class="tab-content">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('trip') }}" method="post" enctype="multipart/form-data">
                            @csrf
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

@endsection
