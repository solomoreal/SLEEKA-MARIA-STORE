@extends('layouts.main')

<div class="mt-8">
    @include('inc.messages')
</div>    

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
                            <h2>My Order Detail</h2>
                        </div>
                        @if($order)
                        <div class="container">
                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <th scope="">Order ID</th>
                                        <td>{{$order->order_id}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Quantity</th>
                                        <td>{{$order->quantity}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Payment date</th>
                                        <td>{{date('d/M/Y h:i:s',strtotime($order->paid_at))
                                            }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Status</th>
                                        <td>{{$order->status}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Total</th>
                                        <td><b>{{$currency .' '.number_format(($order->amount/100),2)}}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        @if($cart)
                        @foreach($cart->items as $item)
                        <div id="product-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{$item['item']['image_url']}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <th scope="">Products name</th>
                                                
                                                <td>{{$item['item']['product_name']}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Quantity</th>
                                                <td>{{$item['qty']}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Amount</th>
                                                <td>{{$currency .' '.number_format($item['price'],2)}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Color</th>
                                                <td>{{$item['colour']}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Size</th>
                                                <td>{{$item['size']}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <hr>
                    <a href="{{route('customerInvoice',['id' => $order->id])}}" class="btn btn-outline-inf">See Invoice</a>
                        <div class="complain-form mt-5">
                            <div class="container">
                                <h1>Contact Support </h1>
                                <hr>
                            <form action="{{route('postComplain')}}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputname">NAME</label>
                                        <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control" id="inputname" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputemail">ORDER ID</label>
                                            <input type="text" class="form-control" id="inputorderid"
                                        placeholder="Order ID" name="order_id" readonly value="{{$order->order_id}}">
                                        </div>
                                    <input type="hidden" name="phone" value="{{Auth::user()->phone}}">
                                        <div class="form-group col-md-12">
                                            <label for="inputemail">EMAIL</label>
                                        <input value="{{Auth::user()->email}}" type="email" class="form-control" id="inputemail"
                                               name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-12">
                                                <label for="inputemail">Subject</label>
                                            <input  type='text' class="form-control" id="inputemail"
                                                   name="subject" placeholder="Subject">
                                            </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlTextarea1">Write to us</label>
                                            <textarea name="body" class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" placeholder="Type here..!!"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-inf">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

       