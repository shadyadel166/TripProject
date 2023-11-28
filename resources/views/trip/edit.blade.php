@extends('trip.app')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Trip</div>
        <div class="card-body">
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
            <form action="{{ url('update', $trip->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $trip->id }}" />
                <label>From City</label>
                <input type="text" name="fromCity" id="fromCity" value="{{ $trip->fromCity }}" class="form-control">
                <label>To City</label>
                <input type="text" name="toCity" id="toCity" value="{{ $trip->toCity }}" class="form-control">
                <label>Date</label>
                <input type="date" name="date" id="date" value="{{ $trip->date }}" class="form-control">
                <label>price</label>
                <input type="text" name="price" id="price" value="{{ $trip->price }}" class="form-control">
                <label>chair</label>
                <input type="text" name="seats_available" id="seats_available" value="{{ $trip->seats_available }}" class="form-control">
                <label>Image</label>
                <input type="file" name="image" id="image" value="{{ $trip->image }}" class="form-control">
                <input type="submit" value="Update" class="btn btn-success">
            </form>

        </div>
    </div>

@endsection
