<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    public function allOrders(){
        $orders = Order::latest()->get()->sortBy('status');
        return view('admin.all_orders',['orders' => $orders]);
    }
}
