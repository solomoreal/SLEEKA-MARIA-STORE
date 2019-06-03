@extends('layouts.main')
@section('content')
    
    <div class="wrapper">
       
        <div class="content-area">
            <div class="user-profile container">
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-md-3 mx-auto">
                        <div class="user-nav">
                            <ul>
                                <li><a href="profile.html" class="active">My Orders</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="edit_profile.html">Edit Account</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="reset_password.html">Reset password</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-header">
                            <h2>My Orders</h2>
                        </div>
                        <div class="container">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Order Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>$228.99</td>
                                        <td>@mdo</td>
                                        <td><a class="btn btn-sm btn-danger text-white">Cancelled</a></td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>$228.99</td>
                                        <td>@fat</td>
                                        <td><a class="btn btn-sm btn-danger text-white">Cancel</a></td>
                                    </tr>
                                    <tr>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>$228.99</td>
                                        <td>Total</td>
                                        <td><a class="btn btn-sm btn-danger text-white">Cancelled</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="featured-product">
                        <div class="featured-title container">
                            <h2>Buyers who bought this item also bought:</h2>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="container">
                                        <div class="product-card">
                                            <a href="view.html">
                                                <img src="img/watches/wrist1.0.jpg">
                                                <h1 class="product-title">Unisex Wristwatch</h1>
                                            </a>
                                            <del>$199.99</del>
                                            <p class="price">$299.99</p>
                                            <button class="add-to-cart" href="#">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="container">
                                        <a href="">
                                            <div href="#" class="product-card">
                                                <img src="img/watches/watch1/1.jpg">
                                                <h1 class="product-title"> Steel Men's Wrist</h1>
                                                <del>$199.99</del>
                                                <p class="price">$299.99</p>
                                                <button class="add-to-cart" href="#">Add to Cart</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="container">
                                        <a href="">
                                            <div href="#" class="product-card">
                                                <img src="img/watches/watch1/2.jpg">
                                                <p class="product-title">Unisex Bracelet Wristwatch</p>
                                                <del>$199.99</del>
                                                <p class="price">$299.99</p>
                                                <button class="add-to-cart" href="#">Add to Cart</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="container">
                                        <a href="">
                                            <div href="#" class="product-card">
                                                <img src="img//watches/watch1/rea.jpg">
                                                <div class="product-text">
                                                    <h1 class="product-title">Watch For Women- Brown</h1>
                                                    <del>$199.99</del>
                                                    <p class="price">$299.99</p>
                                                    <button class="add-to-cart" href="#">Add to Cart</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="seeall.html" class="see-all">See All <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
        