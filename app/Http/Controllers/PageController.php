<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('film', compact('movies'));
    }
    public function homepage()
    {
        $title = 'Homepage';
        return view('homepage', compact('title'));
    }
}