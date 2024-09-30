{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Our Pastries</h1>
    <div class="row">
        @foreach($pastries as $pastry)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $pastry->image) }}" class="card-img-top" alt="{{ $pastry->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pastry->name }}</h5>
                        <p class="card-text">{{ $pastry->description }}</p>
                        <p class="card-text">Price: ${{ $pastry->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection --}}
