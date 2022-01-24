<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();
        
        // film usciti nel 1994
        // $movies = Movie::where('date','LIKE','1994%')->get();

        // film con voto maggiore di 8 in ordine alfabetico
        // $movies = Movie::where('vote', '>', '9')
        //     ->orderBy('title')->get();

        // ricerca con first
        // $movie = Movie::where('nationality', 'american')->first();

        // ricerca per id con find
        // $movie = Movie::find(5);    

        // return view('movies', compact('movies', 'movie'));
        
        return view('movies', compact('movies'));
    }
}
