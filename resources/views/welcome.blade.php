@extends('master')

@section('title', 'Welcome')
    
@section('upperButton')
  <a href= "/" class="btn btn-dark disabled">
    <i class="fa fa-arrow-left"></i>
      KEMBALI
  </a>
    <a href= "/genres" class="btn btn-warning">
    LIHAT SEMUA FILM
    </a>
@endsection

@section('content')
  <img src="{{asset('logo/'.'bee.png')}}" alt="" class="logo-bee">
  <div class="slogan fs-3 fw-semibold text-center">Sweeten your life with movies..</div>
@endsection