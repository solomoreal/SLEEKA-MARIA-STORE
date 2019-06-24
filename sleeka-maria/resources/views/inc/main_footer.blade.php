<footer class="container-fluid bg-footer">
    <div class="row">
        <div class="col-sm-2">
            <h6>HELP</h6>
            <ul class="ul-list">
                <li>
                <a href="{{route('about')}}">ABOUT US</a>
                </li>
                <li>
                    <a href="{{route('help')}}">HOW TO SHOP</a>
                </li>
                <li>
                    <a href="{{route('about')}}#contact">CONTACT US</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-3">
            <h6>POLICIES</h6>
            <ul class="ul-list">
                <li>
                    <a href="{{route('policy')}}#delivery">DELIVERY & RETURN POLICY</a>
                </li>
                <li>
                    <a href="{{route('policy')}}#t&c">TERMS & CONDITIONS</a>
                </li>
                <li>
                    <a href="{{route('policy')}}#privacy">PRIVACY</a>
                </li>
                <li>
                <a href="{{route('policy')}}#security">SECURITY POLICY</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-7">
            <div class="form-container">
                <h6>Be in the know</h6>
                <p>Sign up for the latest news, offers and styles</p>
                <form action="#">
                    <div class="input-group">
                        <input class="btn btn-lg" name="email" id="email" type="email" placeholder="Your Email"
                            required>
                        <button class="btn btn-lg" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="card-payment">
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid">
    <div class="row bg-small">
       <div class="col-md-4 mx-auto">
            <p>Powered by <a href="bithubph.herokuapp.com">BitHub</a></p>
       </div>
       <div class="col-md-4 mx-auto">
            <p class="text-align-end">Sleeka-Maria &copy; 2019</p>
       </div>
    </div>
</div>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>  --}}
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>