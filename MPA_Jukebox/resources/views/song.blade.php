<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid d-flex flex-wrap justify-content-evenly">
        @foreach ($songs as $song)
        <div class="card" style="width: 20rem;">
            <img src={{ $song->image }} class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ $song->name }}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Artist/Band: {{ $song->artistband }}</li>
              <li class="list-group-item">Song duration: {{ $song->duration }}</li>
              <li class="list-group-item">Song Genre: {{ $song->genre }}</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link btn btn-success">Card link</a>
              <a href="#" class="card-link btn btn-danger">Another link</a>
            </div>
          </div>
        @endforeach
        </div>
    </body>
</html>



