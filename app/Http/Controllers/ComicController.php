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
                $comic->$key = $key == 'price' ? '$' . $comics_detail  : $comics_detail;
            }
        }

        // save the comic in database
        $comic->save();

        return redirect()->route("comics.show", $comic)->with('message-style', 'alert-success')->with('message-text', 'Comic created succesfully');
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
     */
    public function edit(Comic $comic)
    {
        return view('comics-update', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, Comic $comic)
    {

        // request array data
        $comic_info = $request->all();

        // modify price data in string
        $comic_info['price'] = '$' . $comic_info['price'];

        // fill the model and save the new data
        $comic->update($comic_info);

    
        return redirect()->route('comics.show', compact('comic'))->with('message-style', 'alert-success')->with('message-text', 'Comic modified succesfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        // delete the selected comic from database
        $comic->delete();

        return redirect()->route('comics.index')->with('message-style', 'alert-danger')->with('message-text', 'Comic deleted correctly');;

    }
}
