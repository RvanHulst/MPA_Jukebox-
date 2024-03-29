@include('includes.header')
@include('includes.navbar')
    <div class="container-fluid d-flex flex-wrap justify-content-evenly">
      @foreach ($allSongs as $song)
      <div class="card" style="width: 20rem;">
        <img src={{ $song->image }} class="card-img-top">
        <div class="card-body">
        <h5 class="card-title"> <a href="{{ url('/song', $song->id) }}">{{ $song->name }} </a></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Artist/Band: {{ $song->artistband }}</li>
              <li class="list-group-item">Song duration: {{ $song->duration }}</li>
              <li class="list-group-item">Song Genre: {{ $song->genre->genre }}</li>
            </ul>
            <div class="card-body">
              <a href="{{ url('/playlist', $song->id)}}" class="card-link btn btn-success">Add song</a>
            </div>
            @if(Auth::user())
            <form method="get" action="{{ url('/saveToPlaylist', $song->id)}}">
              @csrf
              <div class="card-body">
                  <select name="playlistName">
                    @foreach($allPlaylists as $playlist) <option>{{$playlist->name}}</option> @endforeach
                  </select>
                  <input name="song_id" type="hidden" value="{{$song->id}}">
                <input class="btn btn-success" value="Add song to playlist" type="submit">
              </div>
           </form>
            @endif
      </div>
      @endforeach
    </div>
@include('includes.footer')