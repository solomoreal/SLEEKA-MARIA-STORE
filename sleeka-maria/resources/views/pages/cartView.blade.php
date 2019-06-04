@extends('layouts.main')
@section('content')
    <div class="wrapper">
        
        <div class="content-area">
            <div class="user-profile container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="profile-header">
                            <h2>My Carts</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="img/img2.jpg" width="50px" height="50px"> Bag</td>
                                        <td>
                                            <form>
                                                <div class="value-button" id="decrease" onclick="decreaseValue()"
                                                    value="Decrease Value"><b>-</b></div>
                                                <input type="number" id="number" value="0" />
                                                <div class="value-button" id="increase" onclick="increaseValue()"
                                                    value="Increase Value"><b>+</b></div>
                                            </form>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option>Size</option>
                                                <option name="c-1">Large</option>
                                                <option name="c-2">Xlarge</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option><b>Colors</b></option>
                                                <option name="c-1">White</option>
                                                <option name="c-2">Red</option>
                                            </select>
                                        </td>
                                        <td>$228.99</td>
                                        <td><i class="fas fa-trash-alt fa-2x text-danger"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/img2.jpg" width="50px" height="50px"> Bag</td>
                                        <td>
                                            <form>
                                                <div class="value-button" id="decrease" onclick="decreaseValue()"
                                                    value="Decrease Value"><b>-</b></div>
                                                <input type="number" id="number" value="0" />
                                                <div class="value-button" id="increase" onclick="increaseValue()"
                                                    value="Increase Value"><b>+</b></div>
                                            </form>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option>Size</option>
                                                <option name="c-1">Large</option>
                                                <option name="c-2">Xlarge</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option><b>Colors</b></option>
                                                <option name="c-1">White</option>
                                                <option name="c-2">Red</option>
                                            </select>
                                        </td>
                                        <td>$228.99</td>
                                        <td><i class="fas fa-trash-alt fa-2x text-danger"></i></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><h3><b>Total</b></h3></td>
                                        <td id="price"><h4>$499.99</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                    <a href="{{route('index')}}" class="btn btn-outline-inf btn-md">continue shopping</a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#" class="btn btn-outline-buy btn-md">checkout</a>
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