@extends('layouts.dashboard')
@section('content')

<div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Product Categories</a>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{asset('img/theme/team-4-800x800.jpg')}}">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">
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
            <form action="{{route('categories.store')}}" method="POST">
            <div class="input-group mt-3 mb-3">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="category_name" placeholder="New Category">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Add Category</button>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($categories) > 0)
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">
                                    {{$count++ }}
                                </th>
                                <td>
                                    {{$category->category_name}}
                                </td>
                                <td>
                                <button class="btn btn-primary btn-sm" data-cat_id="{{$category->id}}" data-cat_name="{{$category->category_name}}" data-toggle="modal" data-target="#edit_category">
                                        Edit Category
                                </button>
                                   @endforeach
                                   @endif 
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Wrist Watch</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('categories.update','id')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{method_field('patch')}}
                                                    <input id="edit_cat" type="text" class="form-control"  name="category_name">
                                                    <input id="cat_edit_id" type="hidden" name="category_id">
                                                
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                                <form action="{{route('categories.destroy','id')}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('delete')}}
                                                    <input type="hidden" name="category_id" id="cat_id">
                                                        <button type="submit" class="btn btn-danger">Delete Category</button>
                                                </form>
                                                                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection