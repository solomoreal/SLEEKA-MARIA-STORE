<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Size;
use App\Subcategory;
use App\Colour;
use App\Cart;
use Session;


class PagesController extends Controller
{
    public function index(){
        //category display in the nav bar
        $categories = category::all();
        $currency = '$'; 
        //Adult frame subcategory and products on index page
        $glass_cat = $this->subcategoryQuery('Adult Frames');
        $category = $glass_cat->first();
        $glasses = $category->products->take(4);
        //Kid Frames Subcategory and products
        $kids_frame_cats = $this->subcategoryQuery('Kids Frames');
        //dd($kids_frame_cats);
        $k_frame_cat = $kids_frame_cats->first();
        $kFrames = $k_frame_cat->products->take(4);
        $products = Product::all()->where('promote', 1)->take(8);
        return view('pages.index', compact(['products','currency','category','glasses','categories','kFrames','k_frame_cat']));
    }
    public function subcategoryQuery($subcategroy){
        $allSubcats = Subcategory::where('subcategory_name', $subcategroy)->get();
        //$subcats = $allSubcats->take(4);
        //$subcat = $subcats->first();
        
        return $allSubcats;
    }

    public function categoryQuery($categroy){
        $allCats = category::where('category_name', $categroy);
        //$cats= $allCats->take(4);
        //$cat = $allCats->first();
        
        return $allCats;
    }

    public function viewProduct($id){
        $categories = category::all();
        $product = Product::findOrFail($id);
        $price = $product->price/100;
        $colours = $product->colours;
        $sizes = $product->sizes;
        return view('pages.view', compact(['price','colours','sizes','categories']))->withProduct($product);
    }

    

    public function profile(){
        $categories = category::all();
        return view('pages.profile',compact(['categories']));
    }
    public function viewByCategory($id){
        $categories = category::all();
        $category = Category::findOrFail($id);
        $products = $category->products->take(4);
        return view('pages.see_all',compact(['category','products','categories']));
    }

    public function viewBySubcategory($id){
        $categories = Category::all();
        $category = Subcategory::findOrFail($id);
        $products = $category->products->take(4);
        return view('pages.see_all',compact(['category','products','categories']));
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
        return back();
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

      return redirect(route('index'));
   }

    public function getCart(Request $request){
        dd(request()->session()->get('cart'));
        
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
