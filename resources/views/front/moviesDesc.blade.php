@extends('front.master.main')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset($movie->movie_cover_image)}}" width="100%" alt="">
        </div>
        <div class="col-lg-6">
            <h5>Movie Name: {{$movie->movie_name}}</h5>
            <h5>Movie Release Date: {{$movie->movie_release_date}}</h5>
            <h5>Movie Diretor: {{$movie->movie_director_name}}</h5>
            <h5>Description: {!!$movie->movie_description!!}</h5>

            <div class="trailer">
                <h4>Watch Trailer</h4>
                {!!$movie->movie_trailer!!}
            </div>

        </div>
    </div>
</div>
@endsection