<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cloudder;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
             return $products;
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
        
        $this->validate($request,[
            'product_name' => 'required|string',
            'description' => 'required|string',
            'shipment_price' => 'nullable|integer',
            'price' => 'required|integer',
            'image' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'side_view' => 'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'front_view' => 'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000'


        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->getRealPath();

            Cloudder::upload($image, null);

            $image_url = Cloudder::show(Cloudder::getPublicId());
        }

        if($request->hasFile('side_view')){
            $side_view = $request->file('side_view')->getRealPath();

            Cloudder::upload($side_view, null);

            $side_url = Cloudder::show(Cloudder::getPublicId());
        }

        if($request->hasFile('front_view')){
            $front_view = $request->file('front_view')->getRealPath();

            Cloudder::upload($front_view, null);

            $front_url = Cloudder::show(Cloudder::getPublicId());
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
            'colour_id' => $request->colour_id
        ]);
        $product->save();
        return $product;
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|string',
            'shipment_fee' => 'nullable|integer',
            'side_view' => 'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'front_view' => 'nullable|mimes:jpeg,bmp,jpg,png|between:1, 6000'

        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->getRealPath();

            Cloudder::upload($image, null);

            $image_url = Cloudder::show(Cloudder::getPublicId());
        }

        if($request->hasFile('side_view')){
            $side_view = $request->file('side_view')->getRealPath();

            Cloudder::upload($side_view, null);

            $side_url = Cloudder::show(Cloudder::getPublicId());
        }

        if($request->hasFile('front_view')){
            $front_view = $request->file('front_view')->getRealPath();

            Cloudder::upload($front_view, null);

            $front_url = Cloudder::show(Cloudder::getPublicId());
        }
        
    //simply delete the former image before updating it with the new one on the server to save space
        if($request->hasFile('image')){
            $url_id = $product->image_url;
            $url_arr = explode("/",$url_id);
            $url_last = count($url_arr)-1;
            $url_last_id = explode(".", $url_arr[$url_last]);
            $publicId = $url_last_id[0];
            Cloudder::destroyImage($publicId);
            $product->image_url = $image_url;
        }
        if($request->hasFile('side_view')){
            $url_id = $product->side_url;
            $url_arr = explode("/",$url_id);
            $url_last = count($url_arr)-1;
            $url_last_id = explode(".", $url_arr[$url_last]);
            $publicId = $url_last_id[0];
            Cloudder::destroyImage($publicId);
            $product->side_url = $side_url;
        }

        if($request->hasFile('front_view')){
            $url_id = $product->front_url;
            $url_arr = explode("/",$url_id);
            $url_last = count($url_arr)-1;
            $url_last_id = explode(".", $url_arr[$url_last]);
            $publicId = $url_last_id[0];
            Cloudder::destroyImage($publicId);
            $product->front_url = $front_url;
        }
        $product_all = $request->all();
        $product->fill($product_all)->update();
        return $product;
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //extracts the public id for image_url and use it to delete the image from cloudinary server 
        $url_id = $product->image_url;
        $url_arr = explode("/",$url_id);
        $url_last = count($url_arr)-1;
        $url_last_id = explode(".", $url_arr[$url_last]);
        $publicId = $url_last_id[0];
        Cloudder::destroyImage($publicId);
        //extracts the public id for side_url and use it to delete the image from cloudinary server
        $url_id = $product->side_url;
        $url_arr = explode("/",$url_id);
        $url_last = count($url_arr)-1;
        $url_last_id = explode(".", $url_arr[$url_last]);
        $publicId = $url_last_id[0];
        Cloudder::destroyImage($publicId);
        //extracts the public id for front_url and use it to delete the image from cloudinary server
        $url_id = $product->front_url;
        $url_arr = explode("/",$url_id);
        $url_last = count($url_arr)-1;
        $url_last_id = explode(".", $url_arr[$url_last]);
        $publicId = $url_last_id[0];
        Cloudder::destroyImage($publicId);

        //deletes the particular record from the database
        $product->delete();
        return $product;
    }
}
