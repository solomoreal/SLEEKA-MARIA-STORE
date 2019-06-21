@extends('layouts.dashboard')
@section('content')


    <div class="main-content">
        <div class="container">
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">View Customer</a>
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
                
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                Full Name: <span class="float-right"> @if($customer->first_name)
                                    {{$customer->first_name. " " .$customer->last_name}} 
                                    @else
                                    {{$customer->name}}
                                    @endif</span><hr>
                            Phone Number: <span class="float-right">{{$customer->phone}}</span> <hr>
                                E-mail: <span class="float-right">
                                    {{$customer->email}}
                                </span><hr>
                                State: <span class="float-right">  {{$customer->state ? $customer->state->state_name : " "}} </span><hr>
                            Country: <span class="float-right">{{$customer->country ? $customer->country->country_name : " "}}</span>  <hr>
                            Local Government:  <span class="float-right">{{$customer->lga}}</span><hr>
                            Address: <span class="float-right">{{$customer->address}}</span><hr>
                            Status: <span class="float-right"> @if($customer->status == 1)
                                    Active
                                @else
                                    Disabled
                                @endif
                               </span>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    @if($customer->status == 1)
                                    <a class="btn btn-warning" href="{{route('changeUserStatus',['id' =>$customer->id])}}">Disable This Customer</a>
                                    
                                    @else
                                <a href="{{route('changeUserStatus',['id' => $customer->id])}}" class="btn btn-primary" >
                                            Reactivate this Customer
                                    </a>
                                    @endif
                                                               <hr>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
