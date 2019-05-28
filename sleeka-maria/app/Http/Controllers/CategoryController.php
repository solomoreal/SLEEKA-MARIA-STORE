<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::latest()->get();
        $count = 1;
        return view('admin.category')->withCategories($categories)->withCount($count);
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required|string'
        ]);
        
        $category = new Category();
        $category->category_name = $request->category_name; 
        $category->save();
        return redirect(route('categories.index'));

    }

    
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($request->category_id); 
        $category->category_name = $request->category_name;
        $category->update();
        return redirect(route('categories.index'));
    }

    
    public function destroy(Request $request, $id)
    {
        
        $category = Category::findOrFail($request->category_id);
        $category->delete();
        return redirect(route('categories.index'));
    }
}
