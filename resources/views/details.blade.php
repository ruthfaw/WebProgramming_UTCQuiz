@extends('master')

@section('title', 'details')
    
@section('upperButton')
    <a href= "/genres" class="btn btn-dark">
      <i class="fa fa-arrow-left"></i>
        KEMBALI
    </a>
    <a href= "/genres" class="btn btn-warning">
      LIHAT SEMUA FILM
  </a>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-movie" src="{{$details->photo}}" alt="">
            </div>
            <div class="movie-desc col">
                <div class="desc-title fw-semibold fs-4">{{$details->title}}</div><br>
                <div class="desc-ratings">
                    @if($details->rating == 5)
                      <img src="{{asset('ratings/'.'rating5.png')}}" alt="" class="ratings">
                    @elseif($details->rating == 4)
                      <img src="{{asset('ratings/'.'rating4.png')}}" alt="" class="ratings">
                    @elseif($details->rating == 3)
                      <img src="{{asset('ratings/'.'rating3.png')}}" alt="" class="ratings">
                    @elseif($details->rating == 2)
                      <img src="{{asset('ratings/'.'rating2.png')}}" alt="" class="ratings">
                    @else
                      <img src="{{asset('ratings/'.'rating1.png')}}" alt="" class="ratings">
                    @endif   
                </div><br>
                <div class="desc-about">{{$details->description}}</div> <br>
                <div class="desc-genre">Category : <a href="/sameCategory/{{$details->id}}-{{$details->genre_id}}">{{$details->genre->name}}</a></div> <br>
            </div>
            <div class="movie-episode col">
                <div class="eps-title fs-5 fw-semibold">EPISODE</div>
                <div class="eps-list">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">episode</th>
                            <th scope="col">judul</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($episodes as $episode)
                              <tr>
                                <th scope="row">episode {{$episode->episode}}</th>
                                <td>{{$episode->title}}</td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>

                      <div class="d-flex justify-content-center align-items-center flex-column m-3">
                        {{$episodes->links()}}
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection