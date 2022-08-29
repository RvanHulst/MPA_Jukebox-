@include('includes.header')
@include('includes.navbar')
<div class="container-fluid d-flex flex-wrap justify-content-evenly">
    <div class="card mb-3">
        @foreach ($playlists as $playlist)
        <h1 class="list-group-item text-center">Playlist Name: {{$playlist->name}}</h1>
        <form method="get" action="{{ url('/changeNameForPlaylist')}}">
            @csrf
            <div class="card-body">
            <input name="playlistName" value="{{$playlist->name}}">
                <input type="hidden" name="oldPlaylistName" value="{{$playlist->name}}">
              <input class="btn btn-success" value="Change Playlist Name" type="submit">
            </div>
        </form>
        <br>  
            @foreach ($playlist->songs as $song)
            <div class="card mb-3">
                <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/song', $song->id) }}">{{ $song->name }}</a></h5>
                <p class="card-text">Artist/Band: {{ $song->artistband }} - Song Genre: {{ $song->genre->genre }}</p>
                <p class="card-text"><small class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis, autem unde! Accusantium ut cumque perspiciatis consequatur nesciunt sapiente, consequuntur pariatur, rerum minima magnam qui, facilis doloribus expedita neque rem soluta.</small></p>
                <p class="card-text"><small class="text-muted">Song duration: {{ $song->duration }}</small></p>
                </div>
                <form action="/deleteSongFromPlaylist" method="post">
                    @csrf
                    <input type="hidden" name="song_id" value="{{$song->id}}">
                    <input type="hidden" name="playlist_id" value="{{$playlist->id}}">
                    <input type="submit"class="card-link btn btn-danger" value="Delete">
                  </form>
            </div>
            <br> 
            @endforeach
            <br>
        @endforeach
    </div>
</div>



@include('includes.footer')