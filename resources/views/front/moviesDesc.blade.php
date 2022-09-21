<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>