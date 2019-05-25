<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sleeka Maria | Dashboard-Orders</title>
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
                        <a class="nav-link active" href="#collapseOrders" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOrders">
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
                            <a class="nav-link active" href="paid_order.html">
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
                        <a class="nav-link" href="#collapseProducts" data-toggle="collapse" aria-expanded="false" aria-controls="collapseProducts">
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
                            <a class="nav-link" href="shipping.html">
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
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Paid Orders</a>
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
            
            <div class="container">
                <div class="row align-items-center mt-3 bg-dark">
                    <div class="col">
                        <h3 class="mb-0 text-white">Paid Orders</h3>
                    </div>
                    <div class="col text-right">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>
                            <div class="dropdown-menu" aria-labelledby="FilterOrder">
                                <a class="dropdown-item" href="#">Pending</a>
                                <a class="dropdown-item" href="#">Delivered</a>
                                <a class="dropdown-item" href="#">Cancelled</a>
                                <a class="dropdown-item" href="#">Regected</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price Per Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <tr>
                                    <th scope="row">
                                        #122344
                                    </th>
                                    <td>
                                        SunGlass
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        #1,450
                                    </td>
                                    <td>
                                        #3,450
                                    </td>
                                    <td>
                                        Pending
                                    </td>
                                    <td>
                                        <a href="order_item.html" class="btn btn-sm btn-primary">View Order</a>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        #164344
                                    </th>
                                    <td>
                                        Glass Frame
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        #1,450
                                    </td>
                                    <td>
                                        #1,450
                                    </td>
                                    <td>
                                        Delivered
                                    </td>
                                    <td>
                                        <a href="order_item.html" class="btn btn-sm btn-primary">View Order</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        #127554
                                    </th>
                                    <td>
                                        SunGlass
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        #1,450
                                    </td>
                                    <td>
                                        #7,450
                                    </td>
                                    <td>
                                        Cancelled
                                    </td>
                                    <td>
                                        <a href="order_item.html" class="btn btn-sm btn-primary">View Order</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        #876543
                                    </th>
                                    <td>
                                        Case
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        #1,450
                                    </td>
                                    <td>
                                        #2,000
                                    </td>
                                    <td>
                                        Pending
                                    </td>
                                    <td>
                                        <a href="order_item.html" class="btn btn-sm btn-primary">View Order</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        #994633
                                    </th>
                                    <td>
                                        SunGlass
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        #1,450
                                    </td>
                                    <td>
                                        #3,450
                                    </td>
                                    <td>
                                        Regected
                                    </td>
                                    <td>
                                        <a href="order_item.html" class="btn btn-sm btn-primary">View Order</a>
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