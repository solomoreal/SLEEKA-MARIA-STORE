<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;
use App\Category;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::latest()->get();
        $categories = Category::all();
        $count = 1;
        return view('admin.subcategory',compact(['subcategories', 'categories', 'count']));
    }

    
    public function store(Request $request)
    {   
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
        return redirect(route('subcategories.index'));
    }

    
    public function update(Request $request, $id)
    {
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
        return redirect(route('subcategories.index'));
    }

    
    public function destroy(Request $request, $id)
    {
        $subcategory = Category::findOrFail($request->category_id);
        $subcategory->delete();
        return redirect(route('subcategories.index'));
    }
}
