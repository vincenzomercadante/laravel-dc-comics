<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comics(){
        $comics = config("db");

        return view("home", compact("comics"));
    }

    public function tv(){
        return view("tv");
    }

    public function characters(){
        return view("characters");
    }

    public function movies(){
        return view("movies");
    }

    public function games(){
        return view("games");
    }

    public function collectibles(){
        return view("collectibles");
    }

    public function videos(){
        return view("videos");
    }

    public function fans(){
        return view("fans");
    }

    public function shop(){
        return view("shop");
    }

    public function news(){
        return view("news");
    }
     
    public function comic_details($index){
        $comic = config('db.' . $index);
        return view("comic_details", compact("comic"));
    }
}
