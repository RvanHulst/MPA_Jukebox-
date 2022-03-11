<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid d-flex flex-wrap justify-content-evenly">
        @foreach ($genres as $genre)
        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/1920/1080" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $genre->genre }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go to {{ $genre->genre }}</a>
            </div>
        </div>
        @endforeach
        </div>
    </body>
</html>


