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
                            <img src="{{asset('storage/products/'.$product->image_url)}}"">
                            </div>
                            <div class="img">
                            <img src="{{asset('storage/products/'.$product->side_url)}}">
                            <img src="{{asset('storage/products/'.$product->front_url)}}">
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
                                <p class="price">#{{$product->serial_number}}</p>
                                <p class="price">{{$currency.' '.number_format($price,2)}}</p>
                                </div>
                            <form action="{{route('addToCart')}}" class="text-center" method="POST">
                                {{ csrf_field() }}
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <select name="colour" id="">
                                        <option>Colour</option>
                                        @if($colours)
                                        @foreach($colours as $colour)
                                    <option value="{{$colour->colour_name}}" name="colour">{{$colour->colour_name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <select name="size" id="">
                                        <option>Size</option>
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
                                        value="Increase Value"><b>+</b>

                                    </div>
                                    <div>
                                            <strong><a href="{{route('about')}}#contact">Contact Us For Bulk Purchase</a></strong>
                                    </div>

                                <div class="row justify-content-center text-center">
                                    <div class="col-sm-6 col-lg-10">
                                        <button type="submit" class="btn btn-outline-inf btn-block mt-4">ADD TO CART</button>
                                    </div>
                                </form>
                                    <div class="col-sm-6 col-lg-10 mt-2">
                                    <a href="{{route('getCart')}}" class="btn btn-outline-buy btn-block">VIEW CART AND CHECKOUT</a>
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

                            </div>
                        </div>
                    </div>
                    <div class="featured-product">
                        <div class="featured-title container">
                            <h2>You May also like this Products </h2>
                            <hr>
                        </div>
                        <div class="container">
                            @if($relatedProducts)
                            @foreach($relatedProducts->chunk(4) as $relatedProductsChunk)
                            <div class="row">
                                @foreach($relatedProductsChunk as $relatedProduct)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="container">
                                            <div  class="product-card">
                                            <a href="{{route('viewProduct', ['id' =>$relatedProduct->id])}}">
                                            <img src="{{asset('storage/products/'.$relatedProduct->image_url)}}">
                                            <h1 class="product-title">{{$relatedProduct->product_name}}</h1>
                                            </a>
                                            <del></del>
                                            <p class="price">{{$currency.' '.number_format(($relatedProduct->price/100),2)}}</p>
                                            <button class="add-to-cart" data-toggle="modal" data-target="#cart{{$relatedProduct->id}}">Add to Cart</button>
                                            <div class="modal fade" id="cart{{$relatedProduct->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                <input type="hidden" name="product_id" id="product_id" value="{{$relatedProduct->id}}">
                                                                            <select name="colour" id="">
                                                                                <option>Any Colour</option>
                                                                            @if($relatedProduct->colours)
                                                                                @foreach ($relatedProduct->colours as $colour)
                                                                                    <option value="{{$colour->colour_name}}">{{$colour->colour_name}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                            </select>
                                                                            <select name="size" id="">
                                                                                <option>Size</option>
                                                                                @if ($relatedProduct->sizes)
                                                                                   @foreach ($relatedProduct->sizes as $size)
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

                        </div>
                        @endforeach
                    <a href="{{route('viewByCategory',['id' => $relatedId])}}" class="see-all">See All <i class="fas fa-angle-double-right"></i></a>
                        </div>

                    @endif
                    </div>
                </div>
            </div>



