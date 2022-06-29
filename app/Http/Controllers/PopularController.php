<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovie = Http::withToken(config('services.mdb.token'))->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];

        $genresMovie = Http::withToken(config('services.mdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresMovie)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });

        return view('popular.index',compact('popularMovie', 'genres'));
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

        return view('popular.show', compact('movie'));
    }
}
