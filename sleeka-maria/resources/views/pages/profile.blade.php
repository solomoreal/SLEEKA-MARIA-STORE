@extends('layouts.main')
@section('content')
    
    <div class="wrapper">
       
        <div class="content-area">
            <div class="user-profile container">
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-md-3 mx-auto">
                        <div class="user-nav">
                            <ul>
                            <li><a href="{{route('profile')}}" class="active">My Orders</a></li>
                                <div class="dropdown-divider"></div>
                            <li><a href="{{route('editProfile',['id'=> Auth::user()->id
                                ])}}">Edit Account</a></li>
                                <div class="dropdown-divider"></div>
                                {{-- <li><a href="reset_password.html">Reset password</a></li> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
                                        <th scope="">Order Id</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($orders)
                                    @foreach($orders as $order)
                                    
                                    <tr>
                            
                                    <td>{{$order->order_id}}</td> 
                                    <td>{{$order->quantity}}</td>
                                    <td>{{$currency .' '. number_format(($order->amount/100),2)}}</td>

                                    <td>{{$order->status}}</td>
                                    <td><a href="{{route('orderDetails',['id' => $order->id])}}" class="btn btn-sm btn-danger text-white">View details</a></td>
                                    </tr>
                                
                                    @endforeach
                                    @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if(count($orders) > 0)
                <div class="row justify-content-center">
                        <div class="featured-product">
                            <div class="featured-title container">
                                <h2>Buyers who bought this item also bought:</h2>
                                <hr>
                            </div>
                            <div class="container">
                                  
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
                                                 <p class="price">{{$relatedProduct->price/100}}</p> 
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
                        </div>
            </div>
        </div>
    </div>

                       
@endsection
    
    
    