<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'App Shop') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/aseets/js/app.js') }}" defer></script>

    <!--Scripts de Creative-->
    <script src="{{ asset('/aseets/js/jquery.min.js')}}" defer></script>
	<script src="{{ asset('/aseets/js/bootstrap.min.js')}}" defer></script>
	<script src="{{ asset('/aseets/js/material.min.js')}}" defer></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/aseets/js/nouislider.min.js')}}"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('/aseets/js/bootstrap-datepicker.js')}}"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('/aseets/js/material-kit.js')}}"></script>



    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">



    <!-- Styles -->
    
    <link href="{{ asset('/aseets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- CSS Files Creative -->
    <link href="{{ asset('/aseets/css/material-kit.css') }}" rel="stylesheet">



</head>
<body>
    <div id="app">
        <div class="header header-filter" style="background-image: url('../aseets/img/city.jpg'); background-size: cover; background-position: top center;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul  class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   
                                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/home') }}">Dashboard</a>
                                        </li>
            
                                    </ul>
                                   
                                    
                                    @if (auth()->user()->admin)
                                    <li>
                                        <a  href="{{url('/Admin/product/') }}" class="btn btn-primary btn-round">Gestionar Productos</a> 
                                    </li>
                                @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
