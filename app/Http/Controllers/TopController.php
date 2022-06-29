<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TopController extends Controller
{
    public function index()
    {
        $topMovie = Http::withToken(config('services.mdb.token'))->get('https://api.themoviedb.org/3/movie/top_rated')->json()['results'];

        $genresMovie = Http::withToken(config('services.mdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresMovie)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });

        return view('rated.index',compact('topMovie', 'genres'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.mdb.token'))->get('https://api.themoviedb.org/3/movie/'.$id. '?append_to_response=credits,videos,images')->json();

        return view('rated.show', compact('movie'));
    }
}
