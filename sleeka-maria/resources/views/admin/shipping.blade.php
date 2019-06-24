<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sleeka Maria | Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand pt-0" href="./index.html">
                <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.html">
                                <img src="./assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="ni ni-shop text-blue"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#collapseOrders" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOrders">
                            <i class="ni ni-delivery-fast text-blue"></i>Orders
                        </a>
                    </li>
                    <div class="collapse container" id="collapseOrders">
                        <li class="nav-item">
                            <a class="nav-link" href="orders.html">
                                New Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paid_order.html">
                                Paid Online
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pending_orders.html">
                                Pending Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rejected_orders.html">
                                Rejected Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cancelled_orders.html">
                                Cancelled Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="completed_orders.html">
                                Completed Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="all_orders.html">
                                All Orders
                            </a>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" href="#collapseProducts" data-toggle="collapse" aria-expanded="false" aria-controls="collapseProducts">
                            <i class="ni ni-bag-17 text-blue"></i>Products
                        </a>
                    </li>
                    <div class="collapse container" id="collapseProducts">
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                All Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_product.html">
                                Add Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="subcategory.html">
                                Sub-Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="colors.html">
                                Colors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sizes.html">
                                Sizes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="shipping.html">
                                Shipping
                            </a>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#collapseAdmin" data-toggle="collapse" aria-expanded="false" aria-controls="collapseAdmin">
                            <i class="ni ni-circle-08 text-blue"></i> Manage Admins
                        </a>
                    </li>
                    <div class="collapse container" id="collapseAdmin">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Add New Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Edit Admins
                            </a>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#collapseCustomers" data-toggle="collapse" aria-expanded="false" aria-controls="collapseCustomers">
                            <i class="ni ni-single-02 text-blue"></i>Customers
                        </a>
                    </li>
                    <div class="collapse container" id="collapseCustomers">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                View Customers
                            </a>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="ni ni-button-power text-blue"></i>Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h2 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Shipping</a>
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
            <div class="mt-3 mb-3">
                <div class="">
                    <p>4 Countries Available
                        <a class="float-right" href="#" data-toggle="modal" data-target="#countrymodal">
                            Add Country
                        </a>
                    </p>
                </div>
                <div class="">
                    <!-- Modal -->
                    <div class="modal fade" id="countrymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Country Name</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="input mt-3 mb-3">
                                        <input type="text" class="form-control" placeholder="New Country">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="category.html" type="button" class="btn btn-primary">Add Country</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <p>
                        <a class="" href="#" data-toggle="modal" data-target="#statemodal">
                            Add State
                        </a>
                    </p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="statemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">State Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input mt-3 mb-3">
                                    <select id="category" class="form-control">
                                        <option selected>No Country Selected</option>
                                        <option>Nigeria</option>
                                        <option>Togo</option>
                                        <option>America</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="New State">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="category.html" type="button" class="btn btn-primary">Add State</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group mt-3 mb-3">
                <select id="category" class="form-control">
                    <option selected>No Country Selected</option>
                    <option>Nigeria</option>
                    <option>Togo</option>
                    <option>America</option>
                </select>
                <select id="category" class="form-control">
                    <option selected>No State Selected</option>
                    <option>Rivers State</option>
                    <option>Lagos State</option>
                    <option>Abia State</option>
                </select>
                <input type="text" class="form-control" placeholder="Shipping Fee">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Add Shipping Fee</button>
                </div>
            </div>
            <div class="row align-items-center mt-3 bg-dark">
                <div class="col">
                    <h3 class="mb-0 text-white">Shipping Destinations</h3>
                </div>
                <div class="col text-right">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter
                        </button>
                        <div class="dropdown-menu" aria-labelledby="FilterOrder">
                            <a class="dropdown-item" href="#">Nigeria</a>
                            <a class="dropdown-item" href="#">Ghana</a>
                            <a class="dropdown-item" href="#">Benin</a>
                            <a class="dropdown-item" href="#">Togo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country</th>
                                <th scope="col">State</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td>
                                    Nigeria
                                </td>
                                <td>
                                    Lagos State
                                </td>
                                <td>
                                    #500
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Edit
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Destination</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="input mt-3 mb-3">
                                                        <select id="category" class="form-control">
                                                            <option selected>No Country Selected</option>
                                                            <option>Nigeria</option>
                                                            <option>Togo</option>
                                                            <option>America</option>
                                                        </select>
                                                        <select id="category" class="form-control">
                                                            <option selected>No State Selected</option>
                                                            <option>Rivers State</option>
                                                            <option>Lagos State</option>
                                                            <option>Abia State</option>
                                                        </select>
                                                        <input type="text" class="form-control" placeholder="Shipping Fee">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="category.html" type="button" class="btn btn-primary">Save changes</a>
                                                    <a href="category.html" type="button" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    2
                                </th>
                                <td>
                                    Nigeria
                                </td>
                                <td>
                                    Rivers State
                                </td>
                                <td>
                                    #800
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Edit
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Destination</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="input mt-3 mb-3">
                                                        <select id="category" class="form-control">
                                                            <option selected>No Country Selected</option>
                                                            <option>Nigeria</option>
                                                            <option>Togo</option>
                                                            <option>America</option>
                                                        </select>
                                                        <select id="category" class="form-control">
                                                            <option selected>No State Selected</option>
                                                            <option>Rivers State</option>
                                                            <option>Lagos State</option>
                                                            <option>Abia State</option>
                                                        </select>
                                                        <input type="text" class="form-control" placeholder="Shipping Fee">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="category.html" type="button" class="btn btn-primary">Save changes</a>
                                                    <a href="category.html" type="button" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td>
                                    Ghana
                                </td>
                                <td>
                                    Accra
                                </td>
                                <td>
                                    #1000
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Edit
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Destination</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="input mt-3 mb-3">
                                                        <select id="category" class="form-control">
                                                            <option selected>No Country Selected</option>
                                                            <option>Nigeria</option>
                                                            <option>Togo</option>
                                                            <option>America</option>
                                                        </select>
                                                        <select id="category" class="form-control">
                                                            <option selected>No State Selected</option>
                                                            <option>Rivers State</option>
                                                            <option>Lagos State</option>
                                                            <option>Abia State</option>
                                                        </select>
                                                        <input type="text" class="form-control" placeholder="Shipping Fee">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="category.html" type="button" class="btn btn-primary">Save changes</a>
                                                    <a href="category.html" type="button" class="btn btn-danger">Delete</a>
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
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="" class="font-weight-bold ml-1" target="_blank">Sleeka Maria</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>