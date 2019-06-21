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
            @if($ads)
            
            <div class="container">
                <div class="row mt-3">
                    <div class="col-sm-5">
                      <div class="card">
                        <div class="card-body">
                        <img src="{{asset('storage/ads/'.$ads->image_url)}}" class="img-fluid">
                        </div>
                      </div>
                    </div>
                <div class="col-sm-7">
                  <div class="card">
                    <div class="card-body">
                        <h2>
                      <br>
                        Advert Name: {{$ads->ads_name}} <br>
                        
                      </h2>
                      <hr>
                </div>
                  </div>
                  </div>
                <a href="{{route('ads.edit',['id' => $ads->id])}}" class="btn btn-default">Edit</a>
                  <form action="{{route('ads.destroy',['id' => $ads->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-warning float-right">
                            delete
                    </button>
                  
                  @endif
                
            </div>
            </div>
            @endsection