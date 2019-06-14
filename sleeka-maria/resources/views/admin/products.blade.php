@extends('layouts.dashboard')
@section('content')
<div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">All Products</a>
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
        </div>
 

<div class="container">
        <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Glasses</a>
                    <a class="dropdown-item" href="#">Wrist Watch</a>
                    <a class="dropdown-item" href="#">Bracelet</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Necklace</a>
                </div>
            </div>
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search Products..." type="text">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($products) > 0)
                        @foreach ($products as $product)
                            
                        <tr>
                            <th scope="row">
                            <img width="150" height="100" src="{{$product->image_url}}" class="img-fluid">
                            </th>
                            <td>
                                {{$product->product_name}}
                            </td>
                            <td>
                                {{$product->category->category_name}}
                            </td>
                            <td>
                                {{$product->quantity}}
                            </td>
                            <td>
                            <a href="{{route('admin.viewProduct',['id' => $product->id])}}" class="btn btn-sm btn-primary">View Details</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                                                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    
@endsection
    
       
    