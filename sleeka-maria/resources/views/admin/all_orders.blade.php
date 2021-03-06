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
                                                <img alt="Image placeholder" src="{{asset('img/theme/team-4-800x800.jpg')}}">
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
                                        <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         <i class="ni ni-button-power text-blue"></i>{{ __('Logout') }}
                                     </a>
        
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
            <div class="header bg-gradient-primary pt-md-7">
            </div>
            <div class="container">
                <div class="row align-items-center mt-3">
                    <div class="col">
                        <h3 class="mb-0 h2">View Orders from any Date</h3>
                    </div>
                    <div class="col text-right">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>
                            <div class="dropdown-menu" aria-labelledby="FilterOrder">
                                <a class="dropdown-item" href="{{route('pendingOrders',['status' => 'Pending'])}}">Pending Orders</a>
                                <a class="dropdown-item" href="{{route('completedOrders',['status' => 'Delivered'])}}">Completed Orders</a>
                                <a class="dropdown-item" href="{{route('inProgress',['status' => 'In Progress'])}}">In Progress</a>
                                <a class="dropdown-item" href="{{route('rejectedOrders',['status' => 'Rejected'])}}">Rejected</a>
                                <a class="dropdown-item" href="{{route('cancelledOrders',['status' => 'Cancelled'])}}">Cancelled</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center mt-3 bg-dark">
                    <div class="col">
                        <h3 class="mb-0 text-white">All Orders</h3>
                    </div>
                    <div class="col text-right">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>
                            <div class="dropdown-menu" aria-labelledby="FilterOrder">
                                <a class="dropdown-item" href="#">Pending</a>
                                <a class="dropdown-item" href="#">Delivered</a>
                                <a class="dropdown-item" href="#">Cancelled</a>
                                <a class="dropdown-item" href="#">Regected</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    {{-- <th scope="col">paid At</th> --}}
                                    <th scope="col">Quantity</th>
                                    {{-- <th scope="col">Price Per Item</th> --}}
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($orders)
                                @foreach($orders as $order)
                                
                                <tr>
                                    <th scope="row">
                                        {{$order->order_id}}
                                    </th>
                                    
                                        {{-- {{$order->paid_at}}  --}}
                                    
                                    <td>
                                            {{$order->quantity}} 
                                    </td>
                                    {{-- <td> --}}
                                        {{-- {{$cart['item']['price']/100}} --}}
                                    {{-- </td> --}}
                                    <td>
                                            {{$order->amount/100}}
                                    </td>
                                    <td>
                                            {{$order->status}}
                                    </td>
                                    <td>
                                    <a href="{{route('orderItem', ['id' => $order->id])}}" class="btn btn-sm btn-primary">View Order</a>
                                    
                                </tr>
                                @endforeach
                                @endif
                               
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
           
           @endsection