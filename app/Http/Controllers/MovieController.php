<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function viewWelcome(){
        return view('welcome');
    }

    public function viewMovie(){
        $movies = Movie::all();
        return view('genres', ['movies'=>$movies]);
    }

    public function viewDetails($id){
        $movieDetails = Movie::find($id);
        $episode = Episode::where('movie_id', '=', $id)->paginate(3);
        return view('details', ['details'=>$movieDetails, 'episodes'=>$episode]);
    }

    public function viewSameCategory($idMovie, $idGenre){
        $movies = Movie::all();
        $genres = Genre::all();
        return view('sameCategory', ['movies'=>$movies, 'genres'=>$genres, 'idMovie'=>$idMovie, 'idGenre'=>$idGenre]);

        // $movies = Movie::where('genre_id', $id)->get();
        // return view('sameCategory', ['movies'=>$movies]);
    }

}
