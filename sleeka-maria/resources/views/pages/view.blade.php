@extends('layouts.main')
@section('content')
@endsection
    <div class="wrapper">
        
        <div class="content-are">

            <div class="view-product container">
                <!--Breadcrumbs-->
                <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="view.html">{{$product->product_name}}</a></li>
                </ul>
                <h2 class=""></h2>
                <div class="product-img">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6">
                            <div class="view-product-img">
                            <img src="{{$product->image_url}}">
                            </div>
                            <div class="img">
                            <img src="{{$product->side_url}}">
                            <img src="{{$product->front_url}}">
                            </div>
                            <div class="row justify-content-center product-description mt-5">
                                <div class="col-sm-6 col-lg-10">
                                    <h2>Description</h2>
                                    <hr>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="product-details">
                                <div class="prod mt-mg-5">
                                <h2>{{$product->product_name}}</h2>
                                <p class="price">{{$price}}</p>
                                </div>
                            <form action="{{route('addToCart')}}" class="text-center" method="POST">
                                {{ csrf_field() }}
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <select name="colour" id="">
                                        <option>Select Color</option>
                                        @if($colours)
                                        @foreach($colours as $colour)
                                    <option value="{{$colour->colour_name}}" name="colour">{{$colour->colour_name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <select name="size" id="">
                                        <option> Select Size</option>
                                        @if($sizes)
                                            @foreach ($sizes as $size)
                                                <option value="{{$size->size}}">{{$size->size}}</option>  
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="value-button" id="decrease" onclick="decreaseValue()"
                                        value="Decrease Value"><b>-</b></div>
                                    <input type="number" name="quantity" id="number" value="0" />
                                    <div class="value-button" id="increase" onclick="increaseValue()"
                                        value="Increase Value"><b>+</b></div>
                                
                                <div class="row justify-content-center text-center">
                                    <div class="col-sm-6 col-lg-10">
                                        <button type="submit" class="btn btn-outline-inf btn-block mt-4">ADD TO CART</button>
                                    </div>
                                </form>
                                    <div class="col-sm-6 col-lg-10 mt-2">
                                        <a href="checkout.html" class="btn btn-outline-buy btn-block">BUY IT NOW</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center mt-5">
                                    <div class="socail-link">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-square">Share</i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter-square">Twitter</i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram">Follow</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <ul class="comment-section">

                                        <li class="comment user-comment">

                                            <div class="info">
                                                <a href="#">Anie Silverston</a>
                                                <span>4 hours ago</span>
                                            </div>

                                            <a class="avatar" href="#">
                                                <img src="img/avatar_user_1.jpg" width="35" alt="Profile Avatar"
                                                    title="Anie Silverston" />
                                            </a>

                                            <p>Suspendisse gravida sem?</p>

                                        </li>

                                        <li class="comment author-comment">

                                            <div class="info">
                                                <a href="#">Jack Smith</a>
                                                <span>3 hours ago</span>
                                            </div>

                                            <a class="avatar" href="#">
                                                <img src="img/avatar_author.jpg" width="35" alt="Profile Avatar"
                                                    title="Jack Smith" />
                                            </a>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                gravida sem sit amet molestie portitor.</p>

                                        </li>

                                        <li class="comment user-comment">

                                            <div class="info">
                                                <a href="#">Bradley Jones</a>
                                                <span>1 hour ago</span>
                                            </div>

                                            <a class="avatar" href="#">
                                                <img src="img/avatar_user_2.jpg" width="35" alt="Profile Avatar"
                                                    title="Bradley Jones" />
                                            </a>

                                            <p>Suspendisse gravida sem sit amet molestie portitor?</p>

                                        </li>

                                        <li class="comment author-comment">

                                            <div class="info">
                                                <a href="#">Jack Smith</a>
                                                <span>1 hour ago</span>
                                            </div>

                                            <a class="avatar" href="#">
                                                <img src="img/avatar_author.jpg" width="35" alt="Profile Avatar"
                                                    title="Jack Smith" />
                                            </a>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisee
                                                gravida sem sit amet molestie porttitor.</p>

                                        </li>

                                        <li class="write-new">

                                            <form action="#" method="post">

                                                <textarea placeholder="Write your comment here"
                                                    name="comment"></textarea>

                                                <div>
                                                    <img src="img/avatar_user_2.jpg" width="35"
                                                        alt="Profile of Bradley Jones" title="Bradley Jones" />
                                                    <button type="submit">Submit</button>
                                                </div>

                                            </form>

                                        </li>

                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="featured-product">
                        <div class="featured-title container">
                            <h2>Products you met like</h2>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="container">
                                        <a href="">
                                            <div href="#" class="product-card">
                                                <img src="img/watches/footwears/1 (2).jpg">
                                                <h1 class="product-title">Fashion Foot Wear</h1>
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
                                                <img src="img/watches/footwears/1.jpg">
                                                <h1 class="product-title">Casual Loafers Shoe</h1>
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
                                                <img src="img/watches/footwears/1 (2).jpg">
                                                <h1 class="product-title">Fashion Foot Wear</h1>
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
                                                <img src="img/watches/footwears/1.jpg">
                                                <h1 class="product-title">Men Casual Loafers Shoe</h1>
                                                <del>$199.99</del>
                                                <p class="price">$299.99</p>
                                                <button class="add-to-cart" href="#">Add to Cart</button>
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


        