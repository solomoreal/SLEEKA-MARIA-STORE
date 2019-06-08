<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    public function allOrders(){
        $orders = Order::latest()->get()->sortBy('status');
        dd($orders);
        return view('admin.all_orders',['orders' => $orders]);
    }
    public function generalOrdersQuery($status){
        $orders = Order::where('status', $status)->latest()->get();
        return $orders;
    }

    public function pendingOrders(){
        $orders = $this->generalOrdersQuery('Pending');
        dd($orders);
        return view('admin.pending_orders', compact('orders'));
    }
}
