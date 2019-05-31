
@extends('layouts.main')
@section('content')
    <div class="wrapper">
        
        <div class="col s12 content-area">
            <div class="row">
                <div id="sr-prev" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="20000">
                            <img src="./img/img1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-sm-block">
                                <h3>Welcome to SLEEKA-MARIA</h3>
                                <a href="#" class="btn btn-outline-inf">Explore</a>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="./img/img.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-sm-block">
                                <h3>Welcome to SLEEKA-MARIA</h3>
                                <a href="#" class="btn btn-outline-inf">Explore</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-sm-block">
                                <h3>Welcome to SLEEKA-MARIA</h3>
                                <a href="#" class="btn btn-outline-inf">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="featured-product">
                <div class="featured-title container">
                    
                    @if($products)
                    <h2>Featured Collections</h2>
                    <hr>
                </div>
                <div class="container">
                    @foreach($products->chunk(4) as $productChunk)
                    <div class="row">
                        @foreach($productChunk as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="container">
                                    <div href="#" class="product-card">
                                    <a href="{{route('viewProduct', ['id' =>$product->id])}}">
                                        <img class="img" src="{{$product->image_url}}">
                                        <h1 class="product-title">{{$product->product_name}}</h1>
                                        </a>
                                       <!-- <del>$199.99</del> -->
                                    <p class="price">{{$currency}} {{$product->price/100}}</p>
                                    <button class="add-to-cart" data-toggle="modal" data-target="#cart">Add to Cart</button>
                                    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <form action="{{route('addToCart')}}" class="text-center" method="POST">
                                                                {{ csrf_field() }}
                                                        <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                                                                    <select name="colour" id="">
                                                                        <option>Any Colour</option>
                                                                    @if($product->colours)
                                                                        @foreach ($product->colours as $colour)
                                                                            <option value="{{$colour->colour_name}}">{{$colour->colour_name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    </select>
                                                                    <select name="size" id="">
                                                                        <option>Size</option>
                                                                        @if ($product->sizes)
                                                                           @foreach ($product->sizes as $size)
                                                                    <option value="{{$size->size}}">{{$size->size}}</option>
                                                                           @endforeach 
                                                                        @endif
                                                                    </select>
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-6">
                                                                            <button type="submit" class="btn-btn btn-block btn-outline-inf mt-md-3">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    
                      @endforeach 
                </div> 
                    @endforeach
                    <a href="seeall.html" class="see-all">See All <i class="fas fa-angle-double-right"></i></a>
                </div>
                    @endif
            </div>
                    
                    
                
        

            <!--Wrist Watches-->
            <div class="featured-product">
                <div class="featured-title container">
                    <h2>ADULT FRAMES</h2>
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

            <!--New Products Ads Card-->
            <div id="products-ads" class="mt-5">
                <div class="container">
                    <div class="row bg-ads">
                        <div class="col-lg-6 col-sm-6">
                            <img src="./img/ads/NG_W20_MFL_DOUBLEBANNER6.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <img src="./img/ads/NG_Floor-banners-MW-(2).jpg" alt="" width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Wears-->
            <div class="featured-product">
                <div class="featured-title container">
                    <h2>KID FRAMES</h2>
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

            
    <!-- modal -->

    </div>
@endsection