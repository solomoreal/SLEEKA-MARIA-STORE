<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Size;
use App\Subcategory;
use App\Colour;
use Cloudder;
use Illuminate\Support\Facades\Auth;
use App\Order;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role = 'Admin'){
        $products = Product::latest()->paginate(10);
        return view('admin.products')->withProducts($products);
    }
}

        public function create()
    {
        if(Auth::user()->role = 'Admin'){
            $categories = Category::latest()->get();
            $colours = Colour::latest()->get();

            return view('admin.add_product', compact(['categories','colours']));
        }

    }


    public function store(Request $request)
    {
        //dd($request->all());
        if(Auth::user()->role = 'Admin'){
        $this->validate($request,[
            'product_name' => 'required|string',
            'description' => 'required|string',
            'shipment_price' => 'nullable|integer',
            'price' => 'required|integer',
            'quantity' => 'integer',
            'image' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'side_view' => 'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'front_view' => 'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'serial_number' => 'nullable|integer',


        ]);

        
        if($request->hasFile('image')){
            //get file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            $title = $request->product_name;
            //file name to store
            $image_url = $title.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/products', $image_url);
        }else{
            $image_url = 'noimage.jpg';
        }

        

        if($request->hasFile('side_view')){
            //get file name with extension
            $fileNameWithExt = $request->file('side_view')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('side_view')->getClientOriginalExtension();
            $title = $request->product_name;
            //file name to store
            $side_url = $title.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('side_view')->storeAs('public/products', $side_url);
        }else{
            $side_url = 'noimage.jpg';
        }

        
        if($request->hasFile('front_view')){
            //get file name with extension
            $fileNameWithExt = $request->file('front_view')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('front_view')->getClientOriginalExtension();
            $title = $request->product_name;
            //file name to store
            $front_url = $title.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('front_view')->storeAs('public/products', $front_url);
        }else{
            $front_url = 'noimage.jpg';
        }


        $product = new Product([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price * 100,
            'shipment_price' => $request->shipment_price * 100,
            'image_url' => $image_url,
            'side_url' => $side_url,
            'front_url' => $front_url,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'quantity' => $request->quantity,
            'promote' => 1,
            'serial_number' => $request->serial_number,
        ]);
        $product->save();
        $product->colours()->sync($request->colour_id, false);
        $product->sizes()->sync($request->size_id, false);
        return redirect(route('products.index'))->with('success','Product Added');
        }
    }
    public function fetchCategories(Request $request){
        if(Auth::user()->role = 'Admin'){
        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $categoryRelation = ['subcategories' => $category->subcategories, 'sizes' => $category->sizes];
        return response()->json(['category' => $categoryRelation]);
    }
}


    


    public function update(Request $request, Product $product)
    {   //dd($request->all());
        if(Auth::user()->role = 'Admin'){
            //dd($request->all());   
        $this->validate($request,[
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|image',
            //'shipment_fee' => 'nullable|integer',
            'side_view' => 'nullable|image',
            'front_view' => 'nullable|image',
            'serial_number' => 'nullable',

        ]);
       // dd($request->all());

        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $title = $request->product_name;
            $image_url = $title.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/products', $image_url);
            
        }
        if($request->file('image')){
            if($product->image_url != 'noimage.jpg'){
                Storage::delete('public/products/'.$product->image_url);
                $product->image_url = $image_url;
            }
        }
        

            
    
        

        if($request->hasFile('side_view')){
            //get file name with extension
            $fileNameWithExt = $request->file('side_view')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('side_view')->getClientOriginalExtension();
            $title = $request->product_name;
            //file name to store
            $side_url = $title.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('side_view')->storeAs('public/products', $side_url);
            }
        if($request->file('side_view')){
        if($product->side_url != 'noimage.jpg'){
            Storage::delete('public/products/'.$product->side_url);
            $product->side_url = $side_url;
        }
    }
        
        
        if($request->hasFile('front_view')){
            //get file name with extension
            $fileNameWithExt = $request->file('front_view')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('front_view')->getClientOriginalExtension();
            $title = $request->product_name;
            //file name to store
            $front_url = $title.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('front_view')->storeAs('public/products', $front_url);
        }

        if($request->file('front_view')){
        if($product->front_url != 'noimage.jpg'){
            Storage::delete('public/products/'.$product->front_url);
            $product->front_url = $front_url;
        }
    }

            $product->promote = 0;
            $product->product_name = $request->product_name;
            $product->description = $request->description;
            $product->price = $product->price == $request->price ? $request->price : $request->price * 100;
            $request->shipment_price = $request->shipment_price * 100;
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->quantity = $request->quantity;
            $product->serial_number = $request->serial_number;
    //dd($request->all());
        $product->update();
        isset($request->colour_id) ? $product->colours()->sync($request->colour_id) : $product->colours()->sync([]) ;
        isset($request->size_id) ? $product->sizes()->sync($request->size_id) : $product->sizes()->sync([]);
        return back()->with('success','product updated');

    }
}



    public function destroy(Product $product)
    {
        if(Auth::user()->role = 'Admin'){
        //extracts the public id for image_url and use it to delete the image from cloudinary server
        if($product->image_url != 'noimage.jpg'){
            Storage::delete('public/products/'.$product->image_url);
        }
        if($product->side_url != 'noimage.jpg'){
            Storage::delete('public/products/'.$product->side_url);
        }
        if($product->front_url != 'noimage.jpg'){
            Storage::delete('public/products/'.$product->front_url);
        }
        //deletes the particular record from the database
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product Deleted');
    }
}


}
