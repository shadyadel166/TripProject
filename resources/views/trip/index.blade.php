@extends('trip.app')
@section('content')
    <x-sidebar></x-sidebar>

    <style>
        .details {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
            /* padding: 30px; */
        }

        .recentOrders {
            width: 900px;
            margin-top: 0px;
            margin-left: 0%;
        }
    </style>
    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Recent Trip</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New User </button>


                         </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Img</td>
                        <td>From City</td>
                        <td>To City</td>
                        <td>Date</td>
                        <td>Price</td>
                        <td>seats_available</td>
                        <td>View</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($trip as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img src="{{ url('img/' . $item->image) }}" width="100px" height="100px"></td>
                            <td>{{ $item->fromCity }}</td>
                            <td>{{ $item->toCity }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->seats_availble }}</td>



                            <td>

                                <a href="{{ url('/trip/' . $item->id) }}" title="View trip"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View</button>
                                </a>
                            </td>
                            <td>

                                <a href="{{ url('/trip/' . $item->id . '/edit') }}" title="Edit trip"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i> Edit</button>
                                </a>
                            </td>
                            <td>

                                <form method="POST" action="{{ url('/trip' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                        onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

            </table>





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
