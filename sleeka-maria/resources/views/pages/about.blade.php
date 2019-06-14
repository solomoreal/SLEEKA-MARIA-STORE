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
                                    <h3>About SLEEKA-MARIA</h3>
                                    <a href="#contact" class="btn btn-outline-inf">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-us container mb-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="container my-md-5">
                            <h1>About <span> US</span></h1>
                            <hr>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, iste libero delectus
                                iusto officiis soluta magnam vel commodi dignissimos aliquam cum officia ad assumenda
                                dolores eius voluptatum asperiores neque ex omnis in ipsum? Libero unde natus laboriosam
                                eos adipisci temporibus asperiores, itaque dolore at! Aut, illum officia! At veritatis
                                maiores corporis beatae harum deserunt repellendus dolore! Quas perferendis
                                reprehenderit officiis, ratione maiores magnam nihil accusamus odit impedit quasi atque
                                dicta excepturi voluptate. A, ratione in deserunt, officiis, quia molestiae cum eligendi
                                quidem quibusdam cupiditate exercitationem numquam quisquam quod vero necessitatibus
                                sunt voluptatum atque quas corrupti commodi non? Mollitia, earum aspernatur tempore
                                beatae?</p>
                            <a href="{{route('index')}}" class="btn btn-outline-inf">Explore</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container py-md-5">
                            <div class="img-border">
                                <img src="{{asset('img/img.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="links container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
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

                <div class="cantact-form container mt-5" id="contact">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <h2>CONTACT US</h2>
                                <hr>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, quasi.</p>
                                <p>Warehouse address in Lagos</p>
                                <p class="Phone">+234 90764 454 232</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                            <form action="{{route('postContact')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputname">NAME</label>
                                            <input type="text" name="name" class="form-control" id="inputname" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputemail">EMAIL</label>
                                            <input type="email" name="email" class="form-control" id="inputemail"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputsubject">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="inputname" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputsubject">Subject</label>
                                            <input name="subject" type="text" class="form-control" id="inputname" placeholder="Subject">
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlTextarea1">Body</label>
                                            <textarea name="body" class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
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
    </div>


    @endsection