@extends('master')

@section('title', 'genres')
    
@section('upperButton')
  <a href= "/" class="btn btn-dark">
    <i class="fa fa-arrow-left"></i>
      KEMBALI
  </a>
    <a href= "/genres" class="btn btn-warning">
    LIHAT SEMUA FILM
    </a>
@endsection

@section('content')
    <p class="movie-genres fw-semibold fs-4">DRAMA</p>
    <div class="all-movies row center">
        @foreach ($movies as $movie)
            @if($movie->genre_id == 1)
                <div class="card mb-3" style="width: 18rem;">
                <img src="{{$movie->photo}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">
                        <span>{{$movie->title}}</span>
                        </p>
                        <div class="d-grid">
                            <a href="/details/{{$movie->id}}" class="btn btn-dark"></i>LIHAT FILM</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <p class="movie-genres fw-semibold fs-4">TV SHOW</p>
    <div class="all-movies row center">
        @foreach ($movies as $movie)
            @if($movie->genre_id == 2)
                <div class="card mb-3" style="width: 18rem;">
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

    <p class="movie-genres fw-semibold fs-4">KIDS</p>
    <div class="all-movies row center">
        @foreach ($movies as $movie)
            @if($movie->genre_id == 3)
                <div class="card mb-3" style="width: 18rem;">
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




