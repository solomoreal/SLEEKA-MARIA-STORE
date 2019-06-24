<?php

namespace App\Http\Controllers;

use App\Colour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
    {
        if(Auth::user()->role = 'Admin'){
        $colours = Colour::latest()->paginate(10);
        $count = 1;
        return view('admin.colors', compact(['colours', 'count']));
        }
    }

    public function store(Request $request)
    {
        if(Auth::user()->role = 'Admin'){
        $this->validate($request, [
            'colour_name' => 'required|string',
            'colour' => 'required'

        ]);

        $colour = new Colour();
        $colour->colour_name = $request->colour_name;
        $colour->colour = $request->colour;
        $colour->save();
        return back()->with('success', 'New Colour Added');
        }

    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $colour = Colour::findOrFail($request->colour_id); 
        $colour->colour = $request->colour;
        $colour->colour_name = $request->colour_name;
        $colour->update();
        return redirect(route('colours.index'))->with('success', 'Colour Updated');
        }
    }

    
    public function destroy(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $colour = Colour::findOrFail($request->colour_id);
        $colour->delete();
        return redirect(route('colours.index'))->with('success', 'Deleted');
        }
    }
}
