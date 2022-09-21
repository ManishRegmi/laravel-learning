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
            @foreach($movies as $item)
            <div class="col-lg-4">
                <div class="card">
                    <div class="image">
                        <a href="/movie-description/{{$item->id}}">
                            <img src="{{$item->movie_cover_image}}" width="100%" alt="">
                        </a>
                    </div>
                    <div class="info p-4">
                        <h6>{{$item->movie_name}}</h6>
                        <h6>{{$item->movie_release_date}}</h6>
                        <h6>{{$item->movie_director_name}}</h6>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>