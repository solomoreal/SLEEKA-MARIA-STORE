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
use DB;
use App\Order;
use Paystack;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    
    public function index(){
        //category display in the nav bar
        $categories = category::all();
        $currency = '₦'; 
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
        $categories = Category::all();
        $product = Product::findOrFail($id);
        $price = $product->price/100;
        $colours = $product->colours;
        $sizes = $product->sizes;
        $relatedId = $product->category_id;
        $relatedCategory = Category::findOrfail($relatedId);
        $relatedProducts = $relatedCategory->products->take(4);
        return view('pages.view', compact(['price','colours','sizes','categories','relatedProducts','relatedId']))->withProduct($product);
    }

    

    public function profile(){
       // if(Auth::user()){
        $categories = Category::all();
        return view('pages.profile',compact(['categories']));
        //}
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

    public function searchProduct(Request $request){
        $name = $request->name;
         $searchProducts = DB::table('products')->where('product_name','like',"%$name%" )->get();
        return response()->json(['products' => $searchProducts]);
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
    public function getCart(Request $request){
        //dd(request()->session()->get('cart'));
        $categories = Category::all();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
        return  view('pages.cartView', compact(['categories','products','totalPrice','totalQty']));
    }

    public function reduceItemByOne($id, Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);
        return back();
        
    }

    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return back();
    }

    public function emptyCart(){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        Session::forget('cart');
        $cart = null;

      return redirect(route('index'));
   }

   public function checkout(){
    $categories = Category::all();
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $products = $cart->items;
    $totalPrice = $cart->totalPrice;
    $totalPriceCheckout = $cart->totalPrice*100;
    $totalQty = $cart->totalQty;
    return  view('pages.checkout', compact(['categories','products','totalPrice','totalQty','totalPriceCheckout']));
   }

       /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        request()->metadata = json_encode(request()->all());
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        $paymentDetails = Paystack::getPaymentData();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        if($paymentDetails){
            $order = new Order();
            $order->reference_id = $paymentDetails['data']['reference'];
            $order->amount = $paymentDetails['data']['amount'];
            $order->state = $paymentDetails['data']['metadata']['state'];
            $order->address = $paymentDetails['data']['metadata']['address'];
            $order->fullName = $paymentDetails['data']['metadata']['fullName'];
            $order->email = $paymentDetails['data']['metadata']['email'];
            $order->paid_at = $paymentDetails['data']['paidAt'];
            $order->currency = $paymentDetails['data']['currency'];
            $order->cart = serialize($cart);
            $order->status = "Pending";
            $order->save();
        }
        $this->emptyCart();

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then red
        //redirect or do whatever you want
    }

    
    
}
