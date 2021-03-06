@extends('layouts.dashboard')
@section('content')


    <div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">{{$product->product_name}} - #{{$product->serial_number}}</a>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{asset('img/theme/team-4-800x800.jpg')}}">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">
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
            <div class="container">
                <div class="row mt-3">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                            <img src="{{asset('storage/products/'.$product->image_url)}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                            <img src="{{asset('storage/products/'.$product->side_url)}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                            <img src="{{asset('storage/products/'.$product->front_url)}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                Serial Number: <span class="float-right"> #{{$product->serial_number}} </span><hr>
                            Product Name: <span class="float-right">{{$product->product_name}}</span> <hr>
                                Availabale Colors: <span class="float-right">
                                    @foreach($product->colours as $colour)
                                        <span class="badge">{{$colour->colour_name}}</span>
                                    @endforeach

                                </span><hr>
                                Available Quantity: <span class="float-right"> {{$product->quantity}} </span><hr>
                            Product Price: <span class="float-right">{{$product->price}}</span>  <hr>
                            Category:  <span class="float-right">{{$product->category->category_name}}</span><hr>
                            Sub-Category: <span class="float-right">{{$product->subcategory ?$product->subcategory->subcategory_name : " "}}</span><hr>
                            Description: <span class="float-right">{{$product->description}}</span>  <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    @if($product->promote)
                                    <a href="{{route('promote',['id'=> $product->id])}}" class="btn btn-success">
                                        Remove From featured Section
                                    </a>
                                    @else
                                    <a href="{{route('promote',['id' =>$product->id])}}" class="btn btn-success ">
                                            Add To Featured section
                                    </a>
                                    @endif
                                    <form action="{{route('products.destroy',['id' =>$product->id])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-warning float-right">
                                            delete
                                    </button>
 
                                    </form>
                                    <a href="{{route('editProduct',['id' =>$product->id])}}" class="btn btn-success mt-5">
                                        Edit
                                </a>                           <hr>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
