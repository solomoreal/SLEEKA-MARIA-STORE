<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand pt-0" href="./index.html">
                <img src="{{asset('img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
            </a>
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.html">
                                <img src="{{asset('img/brand/blue.png')}}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('newOrders')}}">
                            <i class="ni ni-shop text-blue"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">
                                <i class="ni ni-shop text-blue"></i>view website
                            </a>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#collapseOrders" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOrders">
                            <i class="ni ni-delivery-fast text-blue"></i>Orders
                        </a>
                    </li>
                    <div class="collapse container" id="collapseOrders">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('newOrders')}}">
                                New Orders
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="{{route('inProgress',['status' => 'In Progress'])}}">
                                In Progress
                            </a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('pendingOrders',['status' => 'Pending'])}}">
                                Pending Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('rejectedOrders',['status' => 'Rejected'])}}">
                                Rejected Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cancelledOrders',['status' => 'Cancelled'])}}">
                                Cancelled Orders
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('completedOrders',['status' => 'Delivered'])}}">
                                Completed Orders
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('allOrders')}}">
                                All Orders
                            </a>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#collapseProducts" data-toggle="collapse" aria-expanded="false" aria-controls="collapseProducts">
                            <i class="ni ni-bag-17 text-blue"></i>Products
                        </a>
                    </li>
                    <div class="collapse container" id="collapseProducts">
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">
                                All Products
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('products.create')}}">
                                Add Product
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('subcategories.index')}}">
                                Sub-Categories
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('colours.index')}}">
                                Colors
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('sizes.index')}}">
                                Sizes
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="shipping.html">
                                Shipping
                            </a>
                        </li> --}}  
                    </div>
                <!--    <li class="nav-item">
                        <a class="nav-link" href="#collapseAdmin" data-toggle="collapse" aria-expanded="false" aria-controls="collapseAdmin">
                            <i class="ni ni-circle-08 text-blue"></i> Manage Admins
                        </a>
                    </li>
                    <div class="collapse container" id="collapseAdmin">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Add New Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Edit Admins
                            </a>
                        </li>
                    </div> -->
                    <li class="nav-item">
                            <a class="nav-link" href="#collapseCustom" data-toggle="collapse" aria-expanded="false" aria-controls="collapseCustomers">
                                <i class="ni ni-single-02 text-blue"></i>Adverts
                            </a>
                        </li>
                        <div class="collapse container" id="collapseCustom">
                            
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('ads.create')}}">
                                    Create New Ads
                            </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{route('ads.index')}}">
                                            See all adds
                                    </a>
                                    </li>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#collapseCustomers" data-toggle="collapse" aria-expanded="false" aria-controls="collapseCustomers">
                            <i class="ni ni-single-02 text-blue"></i>Customers
                        </a>
                    </li>
                    <div class="collapse container" id="collapseCustomers">
                        
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('viewCustomers')}}">
                                View Customers
                            </a>
                        </li>
                    </div>

                    <li class="nav-item">
                                <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 <i class="ni ni-button-power text-blue"></i>{{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>