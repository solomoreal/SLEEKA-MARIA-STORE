<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(Auth::user()->role = 'Admin'){
        $categories = Category::latest()->get();
        $count = 1;
        return view('admin.category')->withCategories($categories)->withCount($count);
        }
    }

    
    public function store(Request $request)
    {
        if(Auth::user()->role = 'Admin'){
        $this->validate($request,[
            'category_name' => 'required|string'
        ]);
        
        $category = new Category();
        $category->category_name = $request->category_name; 
        $category->save();
        return back();
        }

    }

    
    public function update(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $category = Category::findOrFail($request->category_id); 
        $category->category_name = $request->category_name;
        $category->update();
        return back();
        }
    }

    
    public function destroy(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $category = Category::findOrFail($request->category_id);
        $category->delete();
        return back();
        }
    }
}
