@extends('layouts.dashboard')
@section('content')
<div class="main-content">
        <div class="container">
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Orders</a>
                            <!-- User -->
                            <ul class="navbar-nav align-items-center d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle">
                                                <img alt="Image placeholder" src="{{asset('assets/img/theme/team-4-800x800.jpg')}}">
                                            </span>
                                            <div class="media-body ml-2 d-none d-lg-block">
                                                <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome!</h6>
                                        </div>
                                        
                                        <div class="dropdown-divider"></div>
                                    <a href="{{route('logout')}}" class="dropdown-item">
                                            <i class="ni ni-user-run"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
            <div class="header bg-gradient-primary pt-md-7">
            </div>
        </div>
        <div class="container">
        <form action="{{route('sizes.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="input-group mt-3 mb-3">
                <input type="text" class="form-control" name="size" placeholder="Enter Size...">
                <select id="category" name="category_id" class="form-control">
                    <option selected >Select Category</option>
                @if($categories)
                @foreach ($categories as $category)    
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
                @endif
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Add Size</button>
                </div>
            </div>
        </form>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Size</th>
                                <th scope="col">Category</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if($sizes)
                            @foreach($sizes as $size)
                            <tr>
                                <th scope="row">
                                    {{$count++}}
                                </th>
                                <td>
                                    {{$size->size}}
                                </td>
                                <td>
                                    {{$size->category->category_name}}
                                </td>
                                <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_category" data-size="{{$size->size}}" data-size_id="{{$size->id}}">
                                        Edit Size
                                    </button>
                            @endforeach
                            @endif
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Small</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('sizes.update', 'id')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{method_field('patch')}}
                                                    <div class="input mt-3 mb-3">
                                                        <input type="text" name="size" id="size" class="form-control" placeholder="Size Name...">
                                                        <input type="hidden" name="size_id" id="size_id">
                                                        <select name="category_id" id="category" class="form-control">
                                                            <option selected>Category</option>
                                                        @if($categories)
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                        @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button href="category.html" type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            <form action="{{route('sizes.destroy', 'id')}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('delete')}}
                                                <input type="hidden" name="size_id" id="size_id">
                                                    <button href="category.html" type="submit" class="btn btn-danger">Delete Size</button>
                                            </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
@endsection
        