<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SLEEKA MARIA STORE') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/argon.css?v=1.0.0')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
        @include('inc.side_bar')
            @yield('content')
        @include('inc.footer') 

        <script>
            $("#edit_category").on("show.bs.modal", function(event) {
            
                var button = $(event.relatedTarget); // Button that triggered the modal
                var cat_id = button.data("cat_id");
                var cat_name = button.data("cat_name");
                var subcat_name = button.data("subcat_name");
                var subcat_id = button.data("subcat_id");
                var size = button.data("size");
                var size_id = button.data("size_id");
                var colour = button.data("colour");
                
        
                var modal = $(this);
                //modal.find(".modal-title").text("New message to " + recipient);
                modal.find(".modal-footer #cat_id").val(cat_id);
                modal.find(".modal-footer #subcat_id").val(subcat_id);
                modal.find(".modal-body #cat_edit_id").val(cat_id);
                modal.find(".modal-body #edit_cat").val(cat_name);
                modal.find(".modal-body #subcat_id").val(subcat_id);
                modal.find(".modal-body #subcat_name").val(subcat_name);
                modal.find(".modal-body #size").val(size);
                modal.find(".modal-body #size_id").val(size_id);
                modal.find(".modal-footer #size_id").val(size_id);
                modal.find(".modal-body #colour").val(colour);
            });
      </script>
        
        
    
</body>
</html>
