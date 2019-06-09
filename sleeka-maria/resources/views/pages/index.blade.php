
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
                                    <button class="add-to-cart" data-toggle="modal" data-target="#cart{{$product->id}}">Add to Cart</button>
                                    <div class="modal fade" id="cart{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            
                </div>
                    @endif
            </div>
              @if($category)      <!--Adult Frames-->
            <div class="featured-product">
                <div class="featured-title container">
                <h2>{{$category->subcategory_name}}</h2>
                    <hr>
                </div>
                <div class="container">
                    @foreach ($glasses->chunk(4) as $glassesChunk)
                    <div class="row">
                        @foreach ($glassesChunk as $glass)
                             <div class="col-lg-3 col-sm-6">
                            <div class="container">
                                <div class="product-card">
                                    <a href="{{route('viewProduct', ['id' =>$glass->id])}}">
                                    <img src="{{$glass->image_url}}">
                                    <h1 class="product-title">{{$glass->product_name}}</h1>
                                    </a>
                                   <!-- <del>$199.99</del> -->
                                <p class="price">{{$currency}}{{ $glass->price/100}}</p>
                                <button class="add-to-cart" data-toggle="modal" data-target="#cart{{$glass->id}}">Add to Cart</button>
                                <div class="modal fade" id="cart{{$glass->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                    <input type="hidden" name="product_id" id="product_id" value="{{$glass->id}}">
                                                                <select name="colour" id="">
                                                                    <option>Any Colour</option>
                                                                @if($glass->colours)
                                                                    @foreach ($glass->colours as $colour)
                                                                        <option value="{{$colour->colour_name}}">{{$colour->colour_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                                </select>
                                                                <select name="size" id="">
                                                                    <option>Size</option>
                                                                    @if ($glass->sizes)
                                                                       @foreach ($glass->sizes as $size)
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
                <a href="{{route('viewBySubcategory', ['id' => $category->id])}}" class="see-all">See All <i class="fas fa-angle-double-right"></i></a>
                
        </div>
        @endif
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
            @if($kFrames)
            <div class="featured-product">
                    <div class="featured-title container">
                    <h2>{{$k_frame_cat->subcategory_name}}</h2>
                        <hr>
                    </div>
                    <div class="container">
                        @foreach ($kFrames->chunk(4) as $kidFrameChunk)
                        <div class="row">
                            @foreach ($kidFrameChunk as $glass)
                                 <div class="col-lg-3 col-sm-6">
                                <div class="container">
                                    <div class="product-card">
                                        <a href="{{route('viewProduct', ['id' =>$glass->id])}}">
                                        <img src="{{$glass->image_url}}">
                                        <h1 class="product-title">{{$glass->product_name}}</h1>
                                        </a>
                                       <!-- <del>$199.99</del> -->
                                    <p class="price">{{$currency }}{{ $glass->price/100}}</p>
                                    <button class="add-to-cart" data-toggle="modal" data-target="#cart{{$glass->id}}">Add to Cart</button>
                                    <div class="modal fade" id="cart{{$glass->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                        <input type="hidden" name="product_id" id="product_id" value="{{$glass->id}}">
                                                                    <select name="colour" id="">
                                                                        <option>Any Colour</option>
                                                                    @if($glass->colours)
                                                                        @foreach ($glass->colours as $colour)
                                                                            <option value="{{$colour->colour_name}}">{{$colour->colour_name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    </select>
                                                                    <select name="size" id="">
                                                                        <option>Size</option>
                                                                        @if ($glass->sizes)
                                                                           @foreach ($glass->sizes as $size)
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
                    
                        <a href="{{route('viewBySubcategory', ['id' => $k_frame_cat->id])}}" class="see-all">See All <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
    @endif
                
            
    <!-- modal -->

    </div>
@endsection