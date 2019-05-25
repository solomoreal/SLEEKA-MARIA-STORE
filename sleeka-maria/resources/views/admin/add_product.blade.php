@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Add New Product</a>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
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
                    <form>
                        <div class="form-group">
                            <label for="productCoverImage">Add Cover Image for Product </label>
                            <input type="file" class="form-control-file" id="productCoverImage">
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form>
                        <div class="form-group">
                            <label for="productCoverImage">Add Front Image for Product</label>
                            <input type="file" class="form-control-file" id="productCoverImage">
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form>
                        <div class="form-group">
                            <label for="productCoverImage">Add Side Image for Product</label>
                            <input type="file" class="form-control-file" id="productCoverImage">
                        </div>
                    </form>
                </div>
            </div>
            <form>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Product Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Price</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Product Price">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category">Category</label>
                        <select id="category" class="form-control">
                            <option selected>No Category Selected</option>
                            <option>SunGlasses</option>
                            <option>Wrist Watchs</option>
                            <option>Bracelets</option>
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                            New Category
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Category Name</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="New Category">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="category.html" type="button" class="btn btn-primary">Add Category</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="subcategory">Sub-Category</label>
                        <select id="subcategory" class="form-control">
                            <option selected>No Category Selected</option>
                            <option>Ladies Glasses</option>
                            <option>Men Glasses</option>
                            <option>Children Glasses</option>
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCente">
                            New Sub-Category
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Sub-Category Name</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="New Sub-Category">
                                            <div class="input-group-prepend">
                                                <select id="category" class="form-control">
                                                    <option selected>SunGlasses</option>
                                                    <option value="Wrist Watch">Wrist Watch</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="category.html" type="button" class="btn btn-primary">Add Sub-Category</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="size">Sizes</label>
                        <select id="size" class="form-control" multiple="">
                            <option selected>No Size Selected</option>
                            <option>small</option>
                            <option>medium</option>
                            <option>Large</option>
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCen">
                            New Size
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Size Name</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="New Size">
                                            <div class="input-group-prepend">
                                                <select id="category" class="form-control">
                                                    <option selected>SunGlasses</option>
                                                    <option value="Wrist Watch">Wrist Watch</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="category.html" type="button" class="btn btn-primary">Add Size</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="category">Color</label>
                        <select id="category" class="form-control" multiple="">
                            <option selected>Blue</option>
                            <option value="Red">Red</option>
                            <option value="Red">Yellow</option>
                        </select>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCent">
                            New Color
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">New Color</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group mt-3 mb-3">
                                            <input type="text" class="form-control" placeholder="Color Name">
                                            <input type="color" class="form-control col-md-1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="category.html" type="button" class="btn btn-primary">Add Color</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="5" id="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
    @endsection