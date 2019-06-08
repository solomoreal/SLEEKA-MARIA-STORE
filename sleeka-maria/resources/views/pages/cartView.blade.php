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
                                        <th scope="col">Remove Item</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has('cart'))
                                    @foreach($products as $id => $product)
                                    <tr>
                                    <td><img src="{{$product['item']['image_url']}}" width="50px" height="50px"> {{$product['item']['product_name']}}</td>
                                        <td>
                                            <form action="{{route('addToCart')}}" method="POST">
                                                        {{ csrf_field() }}
                                            <a href="{{route('reduceByOne',['id' =>$id])}}" class="value-button" id="decrease" onclick="decreaseValue()"
                                                    value="Decrease Value"><b>-</b></a>
                                            <input type="number" id="number" value="{{$product['qty']}}" />
                                            <input type="hidden" name="id" value="{{$id}}">
                                            <input type="hidden" name="product_id" value="{{$product['item']['id']}}">
                                            <input type="hidden" name="colour" value="{{$product['colour']}}">
                                            <input type="hidden" name="size" value="{{$product['size']}}">
                                            <button class="value-button" id="increase" type="submit" onclick="increaseValue()"
                                                    value="Increase Value"><b>+</b></button>
                                            </form>
                                        </td>
                                        <td>
                                            <strong>{{$product['size']}}</strong>
                                        </td>
                                        <td>
                                            <b>{{$product['colour']}}</b>
                                        </td>
                                    <td>{{$product['price']}}</td>
                                    <td><a href="{{route('removeItem', ['id' => $id])}}"><i class="fas fa-trash-alt fa-2x text-danger"></i></a></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><h3><b>Total</b></h3></td>
                                    <td id="price"><h4>{{$totalPrice}}</h4></td>
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
                    @if(Session::has('cart') and Session::get('cart')->totalQty != null )
                    <div class="col-lg-2">
                    <a href="{{route('emptyCart')}}" class="btn btn-md btn-danger">Empty Cart</a>
                    </div>
                    <div class="col-lg-3">
                    <a href="{{route('checkout')}}" class="btn btn-outline-buy btn-md">checkout</a>
                    </div>
                    @endif
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