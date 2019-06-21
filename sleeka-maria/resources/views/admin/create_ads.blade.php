@extends('layouts.dashboard')
@section('style')
<link type="text/css" href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  
@endsection
@section('content')
    <div class="main-content">
        <div class="container">
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Create New Ads</a>
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
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-6">
                <form action="{{route('ads.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="productCoverImage">Add Cover Image </label>
                            <input type="file" name="image" class="form-control-file" id="productCoverImage">
                        </div>
                    
                </div>
            </div>
                
                <div class="row form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Advert Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="title" name="ads_name">
                    </div>
                </div>
                    
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    <!--Category Modal -->
    
                </div>
    @endsection
    