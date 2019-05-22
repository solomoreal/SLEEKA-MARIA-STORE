<?php

namespace App\Http\Controllers;

use App\Size;
use App\Category;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sizes = SIze::latest()->get();
        $sizes = Size::find(1);

        return $sizes->category;
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
            'size' => 'required',
            'category_id' => 'required'
        ]);

        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $size = new Size();
        $size->size = $request->size;
        $size->category_id = $category_id;
        $category->sizes()->save($size);
        return $size;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        return $size;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        return $size;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $this->validate($request, [
            'size' => 'required',
            'category_id' => 'required'
        ]);

        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $size->size = $request->size;
        $size->category_id = $category_id;
        $category->sizes()->update($size);
        return $size;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();
        return $size;
    }
}
