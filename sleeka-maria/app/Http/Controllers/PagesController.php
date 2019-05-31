<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Size;
use App\Subcategory;
use App\Colour;
use App\Cart;


class PagesController extends Controller
{
    public function index(){
        $currency = '$'; 
        
        $products = Product::all()->take(8);
        return view('pages.index', compact(['products','currency']));
    }

    public function viewProduct($id){
        $product = Product::findOrFail($id);
        $price = $product->price/100;
        $colours = $product->colours;
        $sizes = $product->sizes;
        return view('pages.view', compact(['price','colours','sizes']))->withProduct($product);
    }

    public function addToCart(Request $request){
        //dd($request->all());
        $product_id = $request->product_id;
        $product = Product::findOrFail($product_id);
        $colour = $request->colour ? $request->colour : "Available";
        $size = $request->size ? $request->size : "normal";
        $qty = $request->quantity ? $request->quantity : 1;
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $colour, $size, $qty);

        $request->session()->put('cart', $cart);
        return redirect(route('index'));
    }

    public function reduceItemByOne($id, Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);
        return json_encode($request->session()->get('cart'));
        
    }

    public function removeItem(Request $request, $id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return json_encode($request->session()->get('cart'));
    }

    public function emptyCart(){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        Session::forget('cart');
        $cart = null;

      return json_encode(Session::get('cart'));
   }

    public function getCart(Request $request){
        //dd(request()->session()->get('cart'));
        
        if(!Session::has('cart')){
            return view('products.test_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $product = $cart->items;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
        return ;
    }
    
}
