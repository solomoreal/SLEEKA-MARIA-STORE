<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role = 'Admin'){
        $subcategories = Subcategory::latest()->paginate(10);
        $categories = Category::all();
        $count = 1;
        return view('admin.subcategory',compact(['subcategories', 'categories', 'count']));
        }
    }

    
    public function store(Request $request)
    { 
        if(Auth::user()->role = 'Admin'){  
        $this->validate($request,[
            'subcategory_name' => 'required',
            'category_id' => 'required|integer'
        ]);
        

        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $subcategory = new Subcategory();
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $category_id;
        $category->subcategories()->save($subcategory);
        return back()->with('success','SubCategory Created');
        }
    }

    
    public function update(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        //dd($request->all());
        $this->validate($request, [
            'subcategory_name' => 'required',
            'category_id' => 'required|integer'
        ]);

        $subcategory = Subcategory::findOrFail($request->subcategory_id);
        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $category_id;
        $category->subcategories()->save($subcategory);
        return redirect(route('subcategories.index'))->with('success','SubCategory Updated');
        }
    }

    
    public function destroy(Request $request, $id)
    {
        if(Auth::user()->role = 'Admin'){
        $subcategory = Subcategory::findOrFail($request->category_id);
        $subcategory->delete();
        return redirect(route('subcategories.index'))->with('success','SubCategory Removed');
        }
    }
}
