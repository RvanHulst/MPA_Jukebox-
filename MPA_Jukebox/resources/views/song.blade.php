@include('includes.header')
@include('includes.navbar')
<!-- Page Content -->
<div class="container">
  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
     <img src={{ $song->image }} class="card-img-top">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">{{ $song->name }}</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Song Details</h3>
      <ul>
        <li class="list-group-item">Artist/Band: {{ $song->artistband }}</li>
        <li class="list-group-item">Song duration: {{ $song->duration }}</li>
        <li class="list-group-item">Song Genre: {{ $song->genre->genre }}</li>
        <li class="list-group-item"> <a href="{{ url('/playlist', $song->id)}}" class="card-link btn btn-success">Add song</a></li>
      </ul>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@include('includes.footer')