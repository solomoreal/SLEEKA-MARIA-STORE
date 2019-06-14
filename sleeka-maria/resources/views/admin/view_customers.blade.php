@extends('layouts.dashboard')
@section('content')
    

    <div class="main-content">
        <div class="container">
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Customers</a>
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
                <div class="row align-items-center mt-3">
                    <div class="col">
                        <h3 class="mb-0 h2">LIST OF CUSTOMERS</h3>
                    </div>
                   
            </div>
            <div class="container">
                <div class="row align-items-center mt-3 bg-dark">
                    <div class="col">
                        <h3 class="mb-0 text-white">CUSTOMERS</h3>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone NO.</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($customers)
                                @foreach($customers as $customer)
                                
                                <tr>
                                    <th scope="row">
                                        @if($customer->first_name)
                                        {{$customer->first_name. " " .$customer->last_name}} 
                                        @else
                                        {{$customer->name}}
                                        @endif
                                    </th>
                                    <td>
                                            {{$customer->phone}} 
                                    </td>
                                    <td>
                                            {{$customer->email}}
                                    </td>
                                    <td>
                                            {{$customer->country}}
                                    </td>
                                    <td>
                                        {{$customer->state}}
                                </td>
                                    <td>
                                    <a href="#" class="btn btn-sm btn-primary">View Details</a>
                                    
                                </tr>
                                @endforeach
                                @endif
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
           @endsection