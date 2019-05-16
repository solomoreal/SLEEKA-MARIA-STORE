<?php

namespace App\Http\Controllers;

use App\Colour;
use Illuminate\Http\Request;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colours = Colour::all();
        return $colours;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'colour_name' => 'required|string'
        ]);

        $colour = new Colour();
        $colour->colour_name = $request->colour_name;
        $colour->save();
        return $colour;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function show(Colour $colour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function edit(Colour $colour)
    {
        return $colour;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colour $colour)
    {
        $this->validate($request, [
            'colour_name' => 'required|string'
        ]);

        $colour->colour_name = $request->colour_name;
        $colour->updatr();
        return $colour;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colour  $colour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colour $colour)
    {
        $colour->delete();
        return $colour;
    }
}
