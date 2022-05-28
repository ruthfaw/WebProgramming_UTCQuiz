@extends('master')

@section('title', 'sameCategory')
    
@section('upperButton')
  <a href= "/details/{{$idMovie}}" class="btn btn-dark">
    <i class="fa fa-arrow-left"></i>
      KEMBALI
  </a>
    <a href= "/genres" class="btn btn-warning">
    LIHAT SEMUA FILM
    </a>
@endsection

@section('content')
    @foreach($genres as $genre)
        @if($genre->id == $idGenre) 
            <p class="movie-genres fw-semibold fs-4">{{$genre->name}}</p>
        @endif
    @endforeach
    
    <div class="all-movies row center">
        @foreach ($movies as $movie)  
            @if($movie->genre_id == $idGenre)
                <div class="card m-2" style="width: 18rem;">
                <img src="{{$movie->photo}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">
                        <span>{{$movie->title}}</span>
                        </p>
                        <div class="d-grid">
                            <a href="/details/{{$movie->id}}" class="btn btn-dark">LIHAT FILM</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>   
@endsection