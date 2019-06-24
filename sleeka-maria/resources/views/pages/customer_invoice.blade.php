<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>SLEEKA-MARIA</title>
</head>

<body>
    <div class="wrapper">

        <div class="content-area">
            <div class="back-button">
            <a href="{{route('orderDetails',['id' => $order->id])}}" class="btn-outline-inf">previous page</a>
            </div>
            <div class="recipt">
                <div class="recipt-header">
                    <div class="invoice">
                        <h1>Invoice</h1>
                        <!-- <h5>Paymant receipt</h5> -->
                        <div class="invoice-id">
                            <div class="order-id">
                                <h6>Order ID</h6>
                            <p>{{$order->order_id}}</p>
                            </div>
                            <div class="date">
                                <h6>Date Issued</h6>
                                <p>{{date('d/M/Y h:i:s',strtotime($order->paid_at))}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="logo">
                        <h1>LOGO</h1>
                    </div>
                </div>
                <div class="receipt-body">
                    <div class="body-title">
                        <div class="billed">
                            <h6>Billed to:</h6>
                            <ul>
                            <li>{{$order->full_name}}</li>
                            <li>{{$order->address}}</li>
                            <li>{{$order->city. ' , ' .$order->state. ' , '. $order->country}}</li>
                            </ul>
                        </div>
                        <div class="comp">
                            <h6>Issued By:</h6>
                            <ul>
                                <li>Sleeka Maria Store</li>
                                <li>sleekamaria.com</li>
                                <li>support@sleekamaria.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="receipt-table">
                        <div class="container">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="">Item</th>
                                        <th scope="col">Unit cost</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Colour</th>
                                        <th scope="col">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->items as $item)
                                    <tr>
                                        <td>{{$item['item']['product_name']}}</td>
                                        <td>{{$currency .' '.number_format(($item['item']['price']/100),2) }}</td>
                                        <td>{{$item['qty']}}</td>
                                        <td>{{$currency .' '.number_format($item['price'],2)}}</td>
                                        <td>{{$item['colour']}}</td>
                                        <td>{{$item['size']}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="receipt-footer">
                        <div class="total">
                            <h4>Invoice total</h4>
                        <h3>{{$currency .' '.number_format($cart->totalPrice,2)}}</h3>
                        </div>
                    </div>
                </div>
                <button class="btn-print" onclick="window.print()">Print</button>
            </div>
            
        </div>

        
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>