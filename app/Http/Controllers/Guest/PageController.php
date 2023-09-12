<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Leggi tutte le istanze di Book
        $movies = Movie::all();   // SELECT * FROM books + Esecuzione query
        

        return view('movies.home', compact('movies'));
    }
}
