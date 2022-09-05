<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;


class GenresController extends Controller
{
    //
    public function getAllGenres(){

        $genres = Genre::All();
        return view('genres.index', ["genres"=>$genres]);
    }
}
