<x-headeruserprofiel></x-headeruserprofiel>



<x-nav></x-nav>
<!-- Sidenav -->
<div class="navbar-top">

    <div class="sidenav" style="color: white">
        <div class="profile">
            <img src="assets/imgs/user.jpg" alt="" width="100" height="100">

            <div class="name">
                {{ $data->name }}
            </div>

        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="userprofile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="trips">Your Trips</a>
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
</div>
<!-- Main -->
{{-- @extends('layouts.user') --}}

<div class="main">
    <h2>profile</h2>
    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table style="color: white">
                <tbody>

                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{ $data->name }}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $data->email }}</td>
                    </tr>

                    <tr>
                        <td>phone</td>
                        <td>:</td>
                        <td>{{ $data->phone }}</td>
                    </tr>
                    <tr>
                        <td>National ID</td>
                        <td>:</td>
                        <td>{{ $data->national }}</td>
                    </tr>


                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>{{ $data->city }}</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>










