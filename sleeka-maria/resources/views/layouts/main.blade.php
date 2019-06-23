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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    
        @include('inc.navbar')
            @yield('messages') 
            @yield('content')
        @include('inc.main_footer') 
        <script>
            $(document).ready(function(){
               console.log('seach me');
               
               $("#searcher").on("keyup", function(){
                var route = $(this).data("route")
                var homeUrl = $(this).data()
                var text = $(this).val();
               if($(this).val().length >= 0){
                   $.ajax({
                       url: route,
                       data:{name:$(this).val()},
                       type:'get',
                   }).done(function(data){
                       var products = data.products;
                       if(text.length === 0){
                            products = [];
                           $('#search_results').innerHTML =" " ;
                        }

                        
                       console.log(products);
                    //    if($(this).val.length === 0){
                    //        products = [];
                    //        $('#search_results').innerHTML = " ";
                    //    }
                       $('#search_results').html('');
                       $('#search_results').append('<table>');
                       products.map((product,index,products)=>{
                            $('#search_results').append("<tr class='mt-20'><td>"+product.product_name+' '+(product.price/100)+ "</td><td> <a class='btn btn-info' href='/viewProduct/"+product.id+"'>view</a></tr>");
                           });
        
                   $('#search_results').append('</table>');
                                          
                   });
               }
           });
            })
        
       
       
       
       </script>

       <script>
           $(document).ready(function(){
    $("#country").on("change", function(){
        var route = $(this).data("route")
        console.log('Country Selected');
            $.ajax({
                
                url: route,
                data:{country_id:$(this).val()},
                type:'get',
            }).done(function(data){
                var states = data.states;
                
                console.log(states);
                $.each(states, function(key, element) {
                    $('#states').append(`<option value="${element.id}">` + element.state_name + '</option>');
                });

                
                
            });
        })
    });

       </script>
    
</body>
</html>
