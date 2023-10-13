<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie', compact('movies'));
    }
    public function movieDetail($id)
    {
        $movie = Movie::find($id);
        return view('movieDetail', compact('movie'));
    }
    public function homepage()
    {
        $title = 'Homepage';
        return view('homepage', compact('title'));
    }
}