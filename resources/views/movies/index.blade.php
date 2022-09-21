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
        <form method="post" action="/create-movie" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Name</label>
                <input type="text" class="form-control" name="movie_name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Description</label>
                <input type="text" class="form-control" name="movie_description">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Cover Image</label>
                <input type="file" class="form-control" name="movie_cover_image">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Embedd Movie Trailer</label>
                <input type="text" class="form-control" name="movie_trailer">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Director Name</label>
                <input type="text" class="form-control" name="movie_director_name">
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Release Date</label>
                <input type="date" class="form-control" name="movie_release_date">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Movie Director</th>
                    <th scope="col">Movire Release Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->movie_name}}</td>
                    <td>{{$item->movie_director_name}}</td>
                    <td>{{$item->movie_release_date}}</td>
                    <td><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>