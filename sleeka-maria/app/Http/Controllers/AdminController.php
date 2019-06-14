<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Product;
use function Opis\Closure\unserialize;

class AdminController extends Controller
{
    public function allOrders(){
        $orders = Order::latest()->paginate(5)->sortBy('status');
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        //dd($orders);
        return view('admin.all_orders',['orders' => $orders]);
    }

    public function orderItem($id){
        $order = Order::findOrfail($id);
        $cart = unserialize($order->cart);
        return view('admin.order_item', compact(['order', 'cart']));
    }
    public function generalOrdersQuery($status){
        $orders = Order::where('status', $status)->latest()->get();
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return $orders;

        //dd($orders);
    }

    public function pendingOrders($status){
        $orders = $this->generalOrdersQuery($status);
       //dd($orders);
        return view('admin.pending_orders', compact('orders'));
    }

    public function completedOrders($status){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.completed_orders', compact('orders'));
    }

    public function cancelledOrders($status){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.cancelled_orders', compact('orders'));
    }

    public function rejectedOrders($status){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.rejected_orders', compact('orders'));
    }

    public function inProgress($status){
        $orders = $this->generalOrdersQuery($status);
        //dd($orders);
        return view('admin.in_progress', compact('orders'));
    }

    public function newOrders(){
        $orders = $this->generalOrdersQuery('New orders');
        dd($orders);
        return view('admin.new_orders', compact('orders'));
    }

    public function changeStatus($id, $status){
        $order = Order::findOrFail($id);
        $order->status = $status;
        $order->update();
        return back();
    }

    public function viewCustomers(){
        $customers = User::where('role','Customer')->latest()->get();
        return view('admin.view_customers',compact(['customers']));
    }

    public function viewProduct($id){
        $product = Product::findOrFail($id);
        return view('admin.view_product',compact('product'));
    }
}
