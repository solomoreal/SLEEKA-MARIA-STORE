@extends('layouts.dashboard')



@section('content')

    <div class="    main-content">

        <div class="container">
                
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                        <div class="container-fluid">
                            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Product Colour</a>
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
            <form action="{{route('colours.store')}}" method="POST">
                {{ csrf_field() }}
            <div class="input-group mt-3 mb-3">
                <input type="text" class="form-control" placeholder="Color Name" name="colour_name">
                <input type="color" class="form-control col-md-1" name="colour">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Add Color</button>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Color Name</th>
                                <th scope="col">Color</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($colours) > 0)
                            @foreach ($colours as $colour)
                                
                            
                            <tr>
                                <th scope="row">
                                    {{$count++}}
                                </th>
                                <td>
                                    {{$colour->colour_name}}
                                </td>
                                <td>
                                <span style="display: block; width: 40px; height: 40px; background-color: {{$colour->colour}}"></span>
                                </td>
                                <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_category" data-size="{{$colour->colour}}" data-size_id="{{$colour->id}}" data-colour="{{$colour->colour_name}}">
                                        Edit Color
                                    </button>
                                    @endforeach
                                    @endif
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Blue</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{route('colours.update', 'id')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{method_field('patch')}}
                                                    <div class="input-group mt-3 mb-3">
                                                        
                                                        <input type="text" value="" id="colour" name="colour_name" class="form-control" placeholder="New Sub-Category">
                                                        <input type="hidden" id="size_id" name="colour_id">
                                                        <input type="color" name="colour" id="size">
                                                    </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form> 
                                            <form action="{{route('colours.destroy','id')}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('delete')}}
                                                <input type="hidden" id="size_id" name="colour_id">
                                                    <button  type="submit" class="btn btn-danger">Delete Color</button>
                                            </form>        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                    {{$colours->links()}}
                </div>
            </div>
        </div>
@endsection