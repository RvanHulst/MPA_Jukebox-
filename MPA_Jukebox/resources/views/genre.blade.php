@include('includes.header')
@include('includes.navbar')
<div class="container-fluid d-flex flex-wrap justify-content-evenly">
    @foreach ($allGenres as $genre)
    <div class="card" style="width: 18rem;">
       <img src={{ $genre->image }} class="card-img-top">
       <div class="card-body">
           <h5 class="card-title">{{ $genre->genre }}</h5>
           <a href="{{ url('/genre', $genre->id) }}" class="btn btn-primary">Go to {{ $genre->genre }}</a>
       </div>
    </div>
    @endforeach
</div>
@include('includes.footer')