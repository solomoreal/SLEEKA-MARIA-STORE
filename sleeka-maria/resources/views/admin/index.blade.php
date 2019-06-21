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
                <div class="h4 mb-0 text-white text-uppercase text-center font-weight-bold">
                    <p>Good Day, {{Auth::user()->name}}.
                        <br>This is what is happening in your Store right now</p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Todays Sale</h5>
                                <span class="h2 font-weight-bold mb-0">{{$currency .' '.number_format(($todaySales/100),2)}}</span>

                                    <i class="ni ni-sound-wave float-right icon icon-shape bg-danger text-white rounded-circle shadow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Users</h5>
                                <span class="h2 font-weight-bold mb-0">{{$users}}</span>
                                    <i class="ni ni-user-run float-right icon icon-shape bg-warning text-white rounded-circle shadow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center mt-3 bg-dark">
                <div class="col">
                    <h3 class="mb-0 text-white">Recent Orders</h3>
                </div>
                <div class="text-right">
                <a href="{{route('allOrders')}}" class="btn btn-sm btn-dark text-white">
                        See All Orders
                    </a>
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
    </div>
   @endsection