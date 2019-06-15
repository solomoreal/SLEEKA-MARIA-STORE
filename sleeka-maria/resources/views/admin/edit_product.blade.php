@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Ladies Sexy Cat Eye Frames</a>
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
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/brand/item.jpg" class="img-fluid">
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="productCoverImage">Change Product Cover Image</label>
                                <input type="file" class="form-control-file" id="productCoverImage">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/brand/item.jpg" class="img-fluid">
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="productSideImage">Change Product Side Image</label>
                                <input type="file" class="form-control-file" id="productSideImage">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/img/brand/item.jpg" class="img-fluid">
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="productFrontImage">Change Product Front Image</label>
                                <input type="file" class="form-control-file" id="productFrontImage">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Product Name</label>
                        <input value="Ladies Sexy Cat Eye Frames" type="text" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Price</label>
                        <input value="#1,890" type="text" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="category">Category</label>
                        <select id="category" class="form-control">
                            <option selected>SunGlasses</option>
                            <option value="Wrist Watch">Wrist Watch</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="subcategory">Sub-Category</label>
                        <select id="subcategory" class="form-control">
                            <option selected>Ladies Glasses</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="quantity">Quantity</label>
                        <input type="number" value="3" class="form-control" id="quantity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="category">Color</label>
                        <select id="category" class="form-control" multiple="">
                            <option selected>Blue</option>
                            <option value="Red">Red</option>
                            <option value="Red">Yellow</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Description:</label>
                        <textarea class="form-control" rows="5" id="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, magni, tempore. Iure doloremque nemo saepe quod sapiente, tempore nihil incidunt modi ipsam amet animi recusandae quia, facere quo veniam, nobis.
                        </textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
                <button type="submit" class="btn btn-danger float-right">Delete this Product</button>
            </form>
        </div>
    </div>
    @endsection