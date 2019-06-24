<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">SLEEKA-MARIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggle"
                aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbartoggle">
                <form class="form-inline m-auto">
                    <div class="input-group">
                    <input type="text" class="form-control" id="searcher" data-url ="{{url('/')}}" data-route="{{route('searchProducts')}}" placeholder="Search for products"
                            aria-label="Search" aria-describedby="basic-addon1" width="200%">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fas fa-search"></i></span>
                                    
                        </div>
                        
                    </div>
                </form>
                <ul class="navbar-nav ml-auto text-center">
                    {{-- <li class="nav-item active"> --}}
                    {{-- <a class="nav-link" href="{{route('index')}}">Home<span class="sr-only">(current)</span></a> --}}
                    {{-- </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                           @if($categories) 
                            @foreach($categories as $category) 
                              <a class="dropdown-item" href="{{route('viewByCategory', ['id' => $category->id])}}">{{$category->category_name}}</a> 
                            <div class="dropdown-divider"></div>
                            @endforeach
                            @endif 
                            
                        </div>
                    </li>
                <li><a class="nav-link" href="{{route('getCart')}}" id="card-info"><i
                                class="fas fa-shopping-cart"></i><span class="cart">:(<span id="list-item"><span
                                class="badge badge-light">{{Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span></span> items)</span></a>
                    </li>
                    @if (Route::has('about'))
                    <li class="nav-item">
                    <a class="nav-link " href="{{route('about')}}#contact">{{ __('Contact') }}</a>
                    </li>
                @endif
                    @guest
                            <li class="nav-item">
                                <a class="nav-link login" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                                                    @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                @if(Auth::user()->role == 'Admin')
                                                <a class="dropdown-item" href="{{route('products.index')}}"> Dashboard</a>
                                                @else
                                                <a class="dropdown-item" href="{{route('profile')}}"> Dashboard</a>
                                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest

                </ul>
            </div>
        </div>
    </nav>
    
</header>
<div class='col-md-4 m-auto' id='search_results' >
    
</div>
    