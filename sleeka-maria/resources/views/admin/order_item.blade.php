@extends('layouts.dashboard')
@section('content')
    

    <div class="main-content">
        <div class="container">
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Orders</a>
                            <!-- User -->
                            <ul class="navbar-nav align-items-center d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle">
                                                <img alt="Image placeholder" src="{{asset('assets/img/theme/team-4-800x800.jpg')}}">
                                            </span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome!</h6>
                                        </div>
                                        
                                        <div class="dropdown-divider"></div>
                                    <a href="{{route('logout')}}" class="dropdown-item">
                                            <i class="ni ni-user-run"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
            <div class="header bg-gradient-primary pt-md-7">
            </div>
            @if($order)
            <div class="mt-5">
                Order Id: {{$order->order_id}} <br>
                Customer name: {{$order->full_name}} <br>
                Amount: {{$order->amount/100}} <br>
                Quantity: {{$order->quantity}} <br>
                Paid At : {{date('d/M/Y h:i:s',strtotime($order->paid_at))
                }} <br>
                Country: {{$order->country}} <br>
                State: {{$order->state}} <br>
                City: {{$order->city}} <br>
                Delivery Address: {{$order->address}} <br>
                Current Status : <strong>{{$order->status}} </strong> <br>

            </div>
            @foreach($cart->items as $item)
            <div class="container">
                <div class="row mt-3">
                    <div class="col-sm-5">
                      <div class="card">
                        <div class="card-body">
                        <img src="{{$item['item']['image_url']}}" class="img-fluid">
                        </div>
                      </div>
                    </div>
                <div class="col-sm-7">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Cart ID: {{$item['item']['id']}} <br>
                        Item: {{$item['item']['product_name']}} <br>
                        Color: {{$item['colour']}} <br>
                        Size: {{$item['size']}} <br>    
                        Quantity: {{$item['qty']}} <br>
                        Price : {{$item['price']}} <br>            
                       
                      </h4>
                      <hr>
                </div>
                  </div>
                  </div>
                  @endforeach
                  <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Change Status
                        </button>
                        <div class="dropdown-menu" aria-labelledby="FilterOrder">
                        <a class="dropdown-item" href="{{route('changeStatus',['id' =>$order->id, 'status' => 'Pending'])}}">Pending</a>
                          <a class="dropdown-item" href="{{route('changeStatus',['id' =>$order->id, 'status' => 'Delivered'])}}">Delivered</a>
                          <a class="dropdown-item" href="{{route('changeStatus',['id' =>$order->id, 'status' => 'Cancelled'])}}">Cancelled</a>
                          <a class="dropdown-item" href="{{route('changeStatus',['id' =>$order->id, 'status' => 'Rejected'])}}">Rejected</a>
                          <a class="dropdown-item" href="{{route('changeStatus',['id' =>$order->id, 'status' => 'In Progress'])}}">In Progress</a>
                        </div>
                      </div>
                  @endif
                
            </div>
            </div>
            @endsection