<?php

namespace App\Http\Controllers;

use App\Models\actor;
use App\Models\language;
use App\Models\film;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function autores(){
        $listActores = actor::all();
        return view('autores',compact('listActores'));
    }

    public function films(){
        $listFilm = film::all();
        return view('films',compact('listFilm'));
    }

    public function lenguajes(){
        $listLanguages = language::all();        
        return view('lenguajes',compact('listLanguages'));
    }
}
