@extends('front.master.main')
@section('content')

<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{asset('banners/inception_movie_poster_banner_01.jpg')}}" class="d-block w-100" alt="Sunset Over the City" />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{asset('banners/The-Finest-Hours-Banner-movie-trailers-40025062-1200-638.jpg')}}" class="d-block w-100" alt="Canyon at Nigh" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

<!-- slider -->
<div class="container mt-4">
    <div class="row">
        @foreach($movies as $item)
        <div class="col-lg-2">
            <div class="card">
                <div class="image">
                    <a href="/movie-description/{{$item->id}}">
                        <img src="{{$item->movie_cover_image}}" width="100%" alt="">
                    </a>
                </div>
                <div class="info p-4">
                    <span>{{$item->movie_name}}</span><br>
                    <span>{{$item->movie_release_date}}</span><br>
                    <span>{{$item->movie_director_name}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection