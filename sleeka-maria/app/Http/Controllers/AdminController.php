<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    public function allOrders(){
        $orders = Order::latest()->get()->sortBy('status');
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        dd($orders);
        return view('admin.all_orders',['orders' => $orders]);
    }
    public function generalOrdersQuery($status){
        $orders = Order::where('status', $status)->latest()->get();
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
    }

    public function pendingOrders(){
        $orders = $this->generalOrdersQuery('Pending');
        dd($orders);
        return view('admin.pending_orders', compact('orders'));
    }

    public function completedOrders(){
        $orders = $this->generalOrdersQuery('Completed');
        dd($orders);
        return view('admin.completed_orders', compact('orders'));
    }

    public function cancelledOrders(){
        $orders = $this->generalOrdersQuery('Cancelled');
        dd($orders);
        return view('admin.cancelled_orders', compact('orders'));
    }

    public function rejectedOrders(){
        $orders = $this->generalOrdersQuery('Rejected');
        dd($orders);
        return view('admin.rejected_orders', compact('orders'));
    }

    public function payOnDeliveryOrders(){
        $orders = $this->generalOrdersQuery('Pay on delivery');
        dd($orders);
        return view('admin.pay_on_delivery_orders', compact('orders'));
    }

    public function newOrders(){
        $orders = $this->generalOrdersQuery('New orders');
        dd($orders);
        return view('admin.new_orders', compact('orders'));
    }
}
