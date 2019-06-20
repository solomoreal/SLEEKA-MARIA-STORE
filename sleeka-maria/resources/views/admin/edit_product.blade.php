@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">{{$product->product_name}}</a>
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
                                <div class=" dropdown-header noti-title">
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
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/products/'.$product->image_url)}}" class="img-fluid">
                        </div>
                    <form action="{{route('products.update',['id' => $product->id])}}" method="POST">
                        {{ csrf_field() }}
                        @method('put')
                            <div class="form-group">
                                <label for="productCoverImage">Change Product Cover Image</label>
                            <input name="image"  type="file" class="form-control-file" id="productCoverImage">
                            </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/products/'.$product->side_url)}}" class="img-fluid">
                        </div>
                        
                            <div class="form-group">
                                <label for="productSideImage">Change Product Side Image</label>
                            <input name="side_view" type="file" class="form-control-file" id="productSideImage">
                            </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/products/'.$product->front_url)}}" class="img-fluid">
                        </div>
                        
                            <div class="form-group">
                                <label for="productFrontImage">Change Product Front Image</label>
                            <input name="front_view" type="file" class="form-control-file" id="productFrontImage">
                            </div>
                        
                    </div>
                </div>
            </div>
            
                    <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Product Name</label>
                            <input type="text" class="form-control" id="inputEmail4" value="{{$product->product_name}}" name="product_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Price</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Product Price" value="{{$product->price}}" name="price">
                            </div>
        
                            <div class="form-group col-md-6">
                                    <label for="inputPassword4">Serial Number</label>
                                    <input type="number" class="form-control" id="inputPassword4" placeholder="Enter Product Serial number" value="{{$product->serial_number}}" name="serial_number">
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category">Category</label>
                            <select id="cat" data-route="{{route('fetchCategories')}}" class="form-control" name="category_id">
                            <option selected value="{{$product->category->id}}">{{$product->category->category_name}}</option>
                                    @if($categories)
                                        @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="subcategory">Sub-Category</label>
                                <select id="subcat" class="form-control" name="subcategory_id">
                                <option value={{$product->subcategory ? $product->subcategory->id : " " }}>{{$product->subcategory ? $product->subcategory->subcategory_name : " "}}</option>
                                </select>
                                
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="quantity">Quantity</label>
                                <input value="{{$product->quantity}}" type="number" class="form-control" id="quantity" name="quantity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="size">Sizes</label>
                                <select id="size" class="form-control select2-mul" multiple="" name="size_id[]">
                                     
                                </select>
                                
                                
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
                                
                                
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description">Description:</label>
                        <textarea class="form-control" rows="5" id="description" name="description">{{$product->description}}</textarea>
                        </div>
                        
               <button type="submit" class="btn btn-primary">Update Product</button>
                <button type="submit" class="btn btn-danger float-right">Delete this Product</button>
            </form>
        </div>
    </div>
    @endsection
    @section('script')
    <script src="{{asset('js/select2.min.js')}}"></script> 
    <script>
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($product->colours()->allRelatedIds()) !!}).trigger('change');

        $('.select2-mul').select2();
        $('.select2-mul').select2().val({!! json_encode($product->sizes()->allRelatedIds()) !!}).trigger('change'); 
    </script>
    @endsection