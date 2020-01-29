<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/aseets/js/nouislider.min.js')}}"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('/aseets/js/bootstrap-datepicker.js')}}"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('/aseets/js/material-kit.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/aseets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/aseets/css/material-kit.css') }}" rel="stylesheet">
     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <title></title>
  </head>
  <body>
    

    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- Scripts -->
     <script src="{{ asset('/aseets/js/app.js') }}" defer></script>

     <!--Scripts de Creative-->
     <script src="{{ asset('/aseets/js/jquery.min.js')}}" defer></script>
   <script src="{{ asset('/aseets/js/bootstrap.min.js')}}" defer></script>
   <script src="{{ asset('/aseets/js/material.min.js')}}" defer></script>
  
  </body>
</html>