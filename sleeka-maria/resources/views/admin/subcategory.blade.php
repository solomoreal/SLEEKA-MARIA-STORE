    @extends('layouts.dashboard')
    @section('content')
    <div class="main-content">
        <div class="container">
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">SubCategory</a>
                            <!-- User -->
                            <ul class="navbar-nav align-items-center d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                                            <span class="avatar avatar-sm rounded-circle">
                                                <img alt="Image placeholder" src="{{asset('img/theme/team-4-800x800.jpg')}}">
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
                                        <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         <i class="ni ni-button-power text-blue"></i>{{ __('Logout') }}
                                     </a>
        
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
            <div class="header bg-gradient-primary pt-md-7">
            </div>
        </div>
        <div class="container">
        <form action="{{route('subcategories.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="input-group mt-3 mb-3">
                <input type="text" name="subcategory_name" class="form-control" placeholder="New Sub-Category">
                <div class="input-group-prepend">
                    @if(count($categories) > 0)
                    <select id="category" class="form-control" name="category_id" >
                        <option selected>Select Category</option>
                        @foreach($categories as $category)
                    <option name="category_id" value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Add Sub-Category</button>
                </div>
            </div>
        </form>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sub-Category</th>
                                <th scope="col">Category</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($subcategories) > 0)
                            
                                @foreach($subcategories as $subcategory)
                            
                             <tr>
                                <th scope="row">
                                    {{$count++ }}
                                </th>
                                <td>
                                    {{$subcategory->subcategory_name}}
                                </td>
                                <td>
                                    {{$subcategory->category->category_name}}
                                    
                                </td>
                                <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-cat_id="{{$subcategory->category->id}}" data-cat_name="{{$subcategory->category->category_name}}" data-subcat_name="{{$subcategory->subcategory_name}}" data-subcat_id="{{$subcategory->id}}"
                                     data-target="#edit_category" >
                                        Edit Sub-Category
                                    </button>
                                    @endforeach
                                    @endif
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Women Wrist Watch</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('subcategories.update','id')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{method_field('patch')}}
                                                    <div class="input-group mt-3 mb-3">
                                                        <input name="subcategory_name" type="text" id="subcat_name" class="form-control" placeholder="New Sub-Category">
                                                        <input type="hidden" id="subcat_id" name="subcategory_id">
                                                        <div class="input-group-prepend">
                                                            <select name="category_id" id="category" class="form-control">
                                                                <option selected id="cat_id">Select Category</option>
                                                            @if(count($categories) > 0)
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                            @endforeach
                                                            @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                                <form action="{{route('subcategories.destroy','id')}}" method="post">
                                                        {{ csrf_field() }}
                                                        {{method_field('delete')}}
                                                        <input type="hidden" name="category_id" id="subcat_id">
                                                            <button type="submit" class="btn btn-danger">Delete SubCategory</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                    {{$subcategories->links()}}
                </div>
            </div>
        </div>
        @endsection
        