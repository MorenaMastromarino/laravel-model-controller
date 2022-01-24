@extends('layouts.main');

@section('content')

  <div class="container">
    <h1 class="text-center my-3">Film</h1>

    <div class="row">
      
      @forelse ($movies as $movie )
      <div class="col-3 card">
        <h3>{{$movie->title}}</h3>
        <p><strong>Titolo originale: </strong>{{$movie->original_title}}</p>
        <p><strong>Nazionalità: </strong>{{$movie->nationality}}</p>
        <p><strong>Anno: </strong>{{$movie->date}}</p>
        <p><strong>Voto: </strong>{{$movie->vote}}</p>
        
      </div>
      @empty
      <h1>Non ci sono risultati</h1>
      @endforelse
    </div>
  </div>


@endsection


