@extends('layouts.dashboard')
@section('style')
<link type="text/css" href="{{asset('css/select2.min.css')}}" rel="stylesheet">
  
@endsection
@section('content')
    <div class="main-content">
        <div class="container">
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Add New Product</a>
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
                    </nav>            <div class="header bg-gradient-primary pt-md-7">
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-4">
                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="productCoverImage">Add Cover Image for Product </label>
                            <input type="file" name="image" class="form-control-file" id="productCoverImage">
                        </div>
                    
                </div>
                <div class="col-sm-4">
                    
                        <div class="form-group">
                            <label for="productCoverImage">Add Front Image for Product</label>
                            <input type="file" name="front_view" class="form-control-file" id="productCoverImage">
                        </div>
                    
                </div>
                <div class="col-sm-4">
                    
                        <div class="form-group">
                            <label for="productCoverImage">Add Side Image for Product</label>
                            <input type="file" class="form-control-file" id="productCoverImage" name="side_view">
                        </div>
                    
                </div>
            </div>
            
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Product Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product Name" name="product_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Price</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Product Price" name="price">
                    </div>

                    <div class="form-group col-md-6">
                            <label for="inputPassword4">Serial Number</label>
                            <input type="number" class="form-control" id="inputPassword4" placeholder="Enter Product Serial number" name="serial_number">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category">Category</label>
                    <select id="cat" data-route="{{route('fetchCategories')}}" class="form-control" name="category_id">
                            <option selected>No Category Selected</option>
                            @if($categories)
                                @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                            New Category
                        </a>
                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="subcategory">Sub-Category</label>
                        <select id="subcat" class="form-control" name="subcategory_id">
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCente">
                            New Sub-Category
                        </a>
                        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="size">Sizes</label>
                        <select id="size" class="form-control select2-multi" multiple="" name="size_id[]">
                             
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCen">
                            New Size
                        </a>
                        
                    </div>
                    <div class="form-group col-md-3">
                        <label for="colour">Color</label>
                        <select id="colour" class="form-control select2-multi" multiple="multiple" name="colour_id[]">
                        @if($colours)
                            @foreach($colours as $colour)
                               <option value="{{$colour->id}}" style="display: block; width: 100%; height: 10px; background-color: {{$colour->colour}}">{{$colour->colour_name}}  </option>
                             @endforeach
                        @endif
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCent">
                            New Color
                        </a>
                        
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
    <!--Category Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Category Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('categories.store')}}" method="POST">
                            @csrf
                    <div class="modal-body">
                        <div class="input mt-3 mb-3">
                            <input type="text" name="category_name" class="form-control" placeholder="New Category">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <!--SubCategory Modal -->
    <div class="modal fade" id="exampleModalCente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sub-Category Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('subcategories.store')}}" method="POST">
                            {{ csrf_field() }}                
                    <div class="modal-body">
                        <div class="input mt-3 mb-3">
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Sub-Category</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Colour Modal -->
        <div class="modal fade" id="exampleModalCent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">New Color</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('colours.store')}}" method="POST">
                                {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="input-group mt-3 mb-3">
                                <input type="text" name="colour_name" class="form-control" placeholder="Color Name">
                                <input type="color" name="colour" class="form-control col-md-1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Color</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Size Modal -->
            <div class="modal fade" id="exampleModalCen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Size Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('sizes.store')}}" method="POST">
                                    {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="input mt-3 mb-3">
                                    <input type="text" name="size" class="form-control" placeholder="New Size">
                                    <div class="input-group-prepend">
                                        <select id="category" class="form-control" name="category_id">
                                            <option selected>select category</option>
                                            @if($categories)
                                            @foreach ($categories as $category)    
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Size</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    @endsection
    @section('script')
    <script src="{{asset('js/select2.min.js')}}"></script> 
    <script>
        $('.select2-multi').select2()
    </script>
    @endsection