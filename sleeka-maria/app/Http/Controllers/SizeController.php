<?php

namespace App\Http\Controllers;

use App\Size;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(Auth::user()->role = 'Admin'){
        $categories = Category::all();
        $count = 1;
        $sizes = Size::latest()->paginate(8);
        return view('admin.sizes', compact(['categories','count','sizes']));
        }
    }

    
    public function store(Request $request)
    {
        if(Auth::user()->role = 'Admin'){
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
        return back()->with('success','New Size Added');
        }
    }

    
    public function update(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $this->validate($request, [
            'size' => 'required',
            'category_id' => 'required|integer'
        ]);

        $size = Size::findOrFail($request->size_id);
        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $size->size = $request->size;
        $size->category_id = $category_id;
        $category->sizes()->save($size);
        return redirect(route('sizes.index'))->with('success','Size Updated');
        }
    }

    
    public function destroy(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $size = Size::findOrFail($request->size_id);
        $size->delete();
        return redirect(route('sizes.index'))->with('success','Size Removed');
        }
    }
}
