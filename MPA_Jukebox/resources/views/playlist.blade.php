@include('includes.header')
@include('includes.navbar')
<div class="container-fluid d-flex flex-wrap justify-content-evenly">
    @foreach ($playlist as $song)
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ url('/song', $song->id) }}">{{ $song->name }}</a></h5>
          <p class="card-text">Artist/Band: {{ $song->artistband }} - Song Genre: {{ $song->genre->genre }}</p>
          <p class="card-text"><small class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis, autem unde! Accusantium ut cumque perspiciatis consequatur nesciunt sapiente, consequuntur pariatur, rerum minima magnam qui, facilis doloribus expedita neque rem soluta.</small></p>
          <p class="card-text"><small class="text-muted">Song duration: {{ $song->duration }}</small></p>
        </div>
        <div class="card-footer bg-transparent">Footer</div>
      </div>

    @endforeach
</div>
@include('includes.footer')