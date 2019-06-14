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
                                    <td>{{$currency.' '.number_format($product['price'],2)}}</td>
                                    <td><a href="{{route('removeItem', ['id' => $id])}}"><i class="fas fa-trash-alt fa-2x text-danger"></i></a></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><h3><b>Total</b></h3></td>
                                    <td id="price"><h4>{{$currency.''.number_format($totalPrice,2)}}</h4></td>
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
                @if(Session::has('cart') and Session::get('cart')->totalQty != null )
                <div class="row justify-content-center">
                    <div class="featured-product">
                        <div class="featured-title container">
                            <h2>Buyers who bought this item also bought:</h2>
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
                                            <img src="{{$relatedProduct->image_url}}"> 
                                            <h1 class="product-title">{{$relatedProduct->product_name}}</h1> 
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
                                                                ?             @if($relatedProduct->colours) 
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
        
                        </div>
                        
                    @endif 
                    @endif
                    </div>
                </div>
            
        @endsection