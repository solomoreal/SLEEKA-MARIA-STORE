@extends('layouts.main')
@section('content')
    

    <div class="wrapper">
        
        <div class="content-area">
            <div class="user-profile container">
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-md-3 mx-auto">
                        <div class="user-nav">
                            <ul>
                            <li><a href="{{route('profile')}}">My Orders</a></li>
                                <div class="dropdown-divider"></div>
                            <li><a href="{{route('editProfile',['id' => Auth::user()->id])}}" class="active">Edit Account</a></li>
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
                            <h2>Edit Profile</h2>
                        </div>
                        <div class="edit-profile container">
                            @if(Auth::user())
                        <form class="mt-5" action="{{route('updateProfile')}}" method="POST">
                            @csrf
                            @method('put')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="text" value="{{$user->first_name}}" required name="first_name" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <input type="text" value="{{$user->last_name}}" required name="last_name" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="email" value="{{$user->email}}" name="email" required class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <input type="text" value="{{$user->phone}}" name="phone" required class="form-control" placeholder="Phone number">
                                    </div>
                                </div>

                                <h5 class="mt-md-5">Personal Address</h5>
                                <div class="form-group">
                                <input type="text" value="{{$user->address}}" name="address" class="form-control" placeholder="Apartment, street, or floor">
                                </div>
                                @if($countries)
                                <div class="form-group">
                                    <select id="country" data-route="{{route('fetchStates')}}" name="country_id" required class="form-control">
                                    <option value="{{$user->country->id}}" selected>{{$user->country->country_name}}</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="text" name="lga" value="{{$user->lga}}" required class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select id="states" name="state_id" class="form-control">
                                                <option value="{{$user->state->id}}" selected>{{$user->state->state_name}}</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-inf">Send</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>


        @endsection