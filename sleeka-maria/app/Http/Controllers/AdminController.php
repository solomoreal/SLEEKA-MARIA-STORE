<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Product;
use App\Category;
use App\Colour;
use DB;
use Illuminate\Support\Carbon;
use function Opis\Closure\unserialize;
use Illuminate\Support\Facades\Auth;
use Carbon\CarbonPeriod;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allOrders(){
        if(Auth::user()->role = 'Admin'){
        $orders = Order::latest()->paginate(10);
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        //dd($orders);
        return view('admin.all_orders',['orders' => $orders]);
    }
    }

    

    public function orderItem($id){
        if(Auth::user()->role = 'Admin'){
        $order = Order::findOrfail($id);
        $cart = unserialize($order->cart);
        return view('admin.order_item', compact(['order', 'cart']));
        }
    }

    public function viewCustomer($id){
        if(Auth::user()->role = 'Admin'){
        $customer = User::findOrfail($id);
        return view('admin.view_customer', compact(['customer']));
        }
    }
    public function generalOrdersQuery($status){
        if(Auth::user()->role = 'Admin'){
        $orders = Order::where('status', $status)->latest()->paginate(10);
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return $orders;
    }
        //dd($orders);
    }

    public function pendingOrders($status){
        if(Auth::user()->role = 'Admin'){
        $orders = $this->generalOrdersQuery($status);
       //dd($orders);
        return view('admin.pending_orders', compact('orders'));
        }
    }

    public function completedOrders($status){
        if(Auth::user()->role = 'Admin'){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.completed_orders', compact('orders'));
        }
    }

    public function cancelledOrders($status){
        if(Auth::user()->role = 'Admin'){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.cancelled_orders', compact('orders'));
        }
    }

    public function rejectedOrders($status){
        if(Auth::user()->role = 'Admin'){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.rejected_orders', compact('orders'));
        }
    }

    public function inProgress($status){
        if(Auth::user()->role = 'Admin'){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.in_progress', compact('orders'));
        }
    }

    public function newOrders(){
        if(Auth::user()->role = 'Admin'){
            $todaySales = DB::table('orders')->where('created_at', '>=', Carbon::today())->sum('amount');
            $currency = '₦';
            $users = count(User::where('role','Customer')->get());
        $orders = Order::latest()->paginate(5);
        return view('admin.index', compact(['orders','users','todaySales','currency']));
        }
    }

    public function changeStatus($id, $status){
        if(Auth::user()->role = 'Admin'){
        $order = Order::findOrFail($id);
        $order->status = $status;
        $order->update();
        return back()->with('success','Changed');
        }
    }

    public function changeUserStatus($id){
        if(Auth::user()->role = 'Admin'){
        $user = User::findOrFail($id);
        $user->status == 1 ? $user->status = 0 : $user->status = 1;
        $user->update();
        return back()->with('success','Changed');
        }
    }

    public function viewCustomers(){
        if(Auth::user()->role = 'Admin'){
        $customers = User::where('role','Customer')->latest()->paginate(10);
        return view('admin.view_customers',compact(['customers']));
        }
    }

    public function viewProduct($id){
        if(Auth::user()->role = 'Admin'){
        $product = Product::findOrFail($id);
        return view('admin.view_product',compact('product'));
        }
    }

    public function editProduct($id){
        if(Auth::user()->role = 'Admin'){
        $product = Product::findOrfail($id);
        $categories = Category::all();
        $colours = Colour::all();

        return view('admin.edit_product',compact(['product','categories','colours']));
        }
    }

    public function promoteProduct($id){
        if(Auth::user()->role = 'Admin'){
        $product = Product::findOrFail($id);
        $product->promote == 1 ? $product->promote = 0 : $product->promote = 1;
        
        $product->update();
        return back()->with('success','Product will now appear in featured section');
        }
     }
}
