<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/8c5opp06yhp8szxp81mmtiuxtn0e9h7tn80hiv7mx2mus8th/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <div class="container mt-4">
        <form method="post" action="/update-movie/{{$movie->id}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Name</label>
                <input type="text" class="form-control" name="movie_name" value="{{$movie->movie_name}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Description</label>
                <textarea name="movie_description">{{$movie->movie_description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Cover Image</label>
                <input type="file" class="form-control" name="movie_cover_image" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Embedd Movie Trailer</label>
                <input type="text" class="form-control" name="movie_trailer" value="{{$movie->movie_trailer}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Director Name</label>
                <input type="text" class="form-control" name="movie_director_name" value="{{$movie->movie_director_name}}">
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Release Date</label>
                <input type="date" class="form-control" name="movie_release_date" value="{{$movie->movie_release_date}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>