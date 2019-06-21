@extends('layouts.main')
@section('content')
    <div class="wrapper">

        <div class="col s12 content-area mt-5">

            <div class="featured-product">
                <div class="featured-title container">
                    @if($category->category_name)
                <h2>{{$category->category_name}}</h2>
                @else
                <h2>{{$category->subcategory_name}}</h2>
                @endif
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
                                    <img class="img" src="{{asset('storage/products/'.$product->image_url)}}">
                                    <h1 class="product-title">{{$product->product_name}}</h1>
                                    </a>
                                    <!--<del>$199.99</del> -->
                                    <p class="price">#{{$product->serial_number}}</p>
                                <p class="price">{{$currency.''.number_format(($product->price/100),2)}}</p>
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

            <!--New Products Ads Card-->
            <div id="products-ads" class="mt-5">
                    <div class="container">
                        @if($ads)
                        @foreach($ads->chunk(2) as $adsChunk)
                        <div class="row bg-ads">
                            @foreach($adsChunk as $ad)
                            <div class="col-lg-6 col-sm-6">
                                <img src="{{asset('storage/ads/'.$ad->image_url)}}" alt="" width="100%" height="100%">
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
    
        </div>

        </div>
        @endsection
