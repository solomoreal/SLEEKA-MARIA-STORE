@extends('layouts.main')

@section('content')
    <div class="wrapper">
        
        <div class="col s12 content-area mt-5">
            <div class="row">
                <div class="container mt-5">
                    <div id="sr-prev" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/img.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-sm-block">
                                    <h3 class="text-white">Help Desk</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-us container mb-5">
                <div class="row">
                    <div class="col-lg-10 col-10 mx-auto">
                        <h1>How to shop</h1>
                        <hr>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi consequuntur praesentium, ipsa aperiam ex odit. Tempora ullam ipsa corporis provident ea. Culpa quis unde quaerat, debitis quisquam voluptas harum suscipit architecto quia temporibus numquam aperiam maxime velit itaque, repellat nihil facere magni nulla quas. Blanditiis cupiditate dolorum, porro voluptatum dolores inventore possimus ex quidem molestias officiis ullam mollitia quia aliquid rerum quasi atque eum, explicabo placeat quos. Non eligendi possimus molestias quos velit ipsam error temporibus debitis modi! Cupiditate repellat deleniti aut nam a alias possimus, commodi fugit magni veniam, cum illum quo voluptas ipsum. Quam possimus deleniti non rem!</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-10 col-10 mx-auto">
                        <h1>Help | FAQ's</h1>
                        <hr id="help">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi consequuntur praesentium, ipsa aperiam ex odit. Tempora ullam ipsa corporis provident ea. Culpa quis unde quaerat, debitis quisquam voluptas harum suscipit architecto quia temporibus numquam aperiam maxime </p>

                        <div class="cantact-form container mt-5">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="container">
                                        <h2>CONTACT US</h2>
                                        <hr>
                                        <p> <b>The best sales and supply agency.</b> <br/> </p>
                                        <p> mile 2 , third mainland bridge, Lagos</p>
                                        <p class="Phone">+234 90764 454 232, 08065543216</p>
                                    <a href="{{route('about')}}#contact">Contact us</a>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="container">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputname">NAME</label>
                                                    <input type="text" class="form-control" id="inputname" placeholder="Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputemail">EMAIL</label>
                                                    <input type="email" class="form-control" id="inputemail"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="exampleFormControlTextarea1">Write to us</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-inf">Send</button>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

   