<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid d-flex flex-wrap justify-content-evenly">
        @foreach ($genres as $genre)
        <div class="card" style="width: 18rem;">
            <img src={{ $genre->image }} class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $genre->genre }}</h5>
                <a href="#" class="btn btn-primary">Go to {{ $genre->genre }}</a>
            </div>
        </div>
        @endforeach
        </div>
    </body>
</html>


