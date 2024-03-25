<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::paginate(12);

        return view("home", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view("comics-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save the request in a variable
        $comics_details = $request->all();
        
        // new istance of comic model
        $comic = new Comic();
        
        // iteration for all the comics details & fill the object
        foreach ($comics_details as $key => $comics_detail) {
            if($key != '_token'){
                $comic->$key = $key == 'price' ? $comics_detail . '$' : $comics_detail;
            }
        }

        // save the comic in database
        $comic->save();

        return redirect()->route("comics.show", $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show(Comic $comic)
    {
        return view("comic_details", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
