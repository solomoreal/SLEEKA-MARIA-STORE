@extends('layouts.main')
@section('content')
    <div class="wrapper">
        <div class="content-are">

            <div class="checkout container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container checkout-table">
                            <!--Breadcrumbs-->
                            <ul class="breadcrumb">
                                <li><a href="view.html">view product</a></li>
                                <li><a href="checkout.html">shiping information</a></li>
                            </ul>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has('cart'))
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product['item']['product_name']}}</td>
                                        <td>{{$product['qty']}}</td>
                                        <td>{{$product['item']['price']/100}}</td>
                                        <td>{{$product['price']}}</td>
                                    
                                    </tr>
                                    @endforeach
                                    @endif
                                    
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><b>TOTAL</b></td>
                                    <td><b>{{$totalPrice}}</b></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="container checkout-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Contact Information</h5> 
                                </div>
                                <div class="col-md-6">
                                <p> Already have an account? <a href="{{route('login')}}">Login</a></p>
                                </div>
                            </div>
                        <form action="{{route('pay')}}" method="POST" accept-charset="UTF-8">
                            {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" required class="form-control" name="first_name" placeholder="First name ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" required class="form-control" name="last_name" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" required class="form-control" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" required class="form-control" name="phone" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Keep me up to date on news and exclusive offers
                                        </label>
                                    </div>
                                </div>

                                <hr>

                                <h5 class="mt-md-5">Shipping Address</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apartment, street, or floor">
                                </div>
                                <div class="form-group">
                                    <select id="inputState" required class="form-control" name="country">
                                        <option selected>Country/Region</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" required name="city" class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="inputState" class="form-control" name="state">
                                            <option selected>Choose State</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="amount" value="{{$totalPriceCheckout}}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="{{$totalQty}}">
                                <input type="hidden" name="" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> 
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" required type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            <p>I have read and agree to the <a href="#">Terms & Conditions</a></p>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-inf">Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        @endsection