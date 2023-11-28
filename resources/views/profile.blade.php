<x-headeruserprofiel></x-headeruserprofiel>



<x-nav></x-nav>
<!-- Sidenav -->
<div class="navbar-top">

<div class="sidenav">
    <div class="profile">
        <img src="assets/imgs/user.jpg" alt="" width="100"
            height="100">

        <div class="name">
            sahdy adel
        </div>
        <div class="job">
            Web Developer
        </div>
    </div>

    <div class="sidenav-url">
        <div class="url">
            <a href="userprofile" class="active">Profile</a>
            <hr align="center">
        </div>
        <div class="url">
            <a href="trip">Your Trips</a>
            <hr align="center">
        </div>
        <div class="url">
            <a href="contactUs">Help</a>
            <hr align="center">
        </div>
    </div>
    <ul>

        <li>
            <a href="landingpage"> <i class="fa fa-sign-out-alt fa-2x"></i>
            </a>
        </li>
    </ul>
</div>
<!-- End -->

<!-- Main -->
{{-- @extends('layout.user') --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($data)
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $data->phone }}</td>
                            </tr>
                            <tr>
                                <th>National ID</th>
                                <td>{{ $data->national }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $data->city }}</td>
                        </table>
                    @else
                        <p>No data found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





</div>
<x-footer></x-footer>












































