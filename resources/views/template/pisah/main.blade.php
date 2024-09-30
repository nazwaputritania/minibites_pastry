<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/kue.jpeg')}}" class="d-block w-100" alt="Slide 1" style="margin: 20px;">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="Slide 2" style="margin: 20px;">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="Slide 3" style="margin: 20px;">
        </div>
    </div>
</div>

  
 <!-- Header-->
 <header style="background-color: #CD3449; padding: 5rem 0;">     
    <div class="container" style="padding: 2rem 6rem; max-width: 1200px;">         
        <div class="text-center text-white">             
            <h1 class="display-4 fw-bolder">Welcome to MiniBites!</h1>             
            <p class="lead fw-normal text-white-50 mb-0">A litte bliss in every bite</p>         
        </div>     
    </div> 
</header>

<div class="container my-5">
<div class="card" style="width: 18rem;">
    <img src="asset{{asset('images/kue.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">lotus</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Add Cart</a>
    </div>
  </div>
</div>


@extends('template.master')

@section('content')
<div class="container my-5">
    <div class="row">
        @if(isset($pastries) && $pastries->count() > 0)
            @foreach ($pastries as $pastry)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $pastry->image) }}" class="card-img-top" alt="{{ $pastry->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pastry->name }}</h5>
                            <p class="card-text">{{ $pastry->deskripsi }}</p>
                            <p class="card-text">Price: ${{ $pastry->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center">Tidak ada data pastry tersedia.</p>
        @endif
    </div>
</div>
@endsection