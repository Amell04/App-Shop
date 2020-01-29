@extends('layouts.app')

@section('content')
                <div class="wrapper">
                    <div class="header header-filter" style="background-image: url('../aseets/img/examples/city.jpg');"></div>
            
                    <div class="main main-raised">
                        <div class="profile-content">
                            <div class="container">
            
                                </div>
                                <h2 class="description text-center">
                                    Dashboard
                                </h2>
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="profile-tabs">
                                            <div class="nav-align-center">
                                                <ul class="nav nav-pills" role="tablist">
                                                    <li class="active">
                                                            <a href="#work" role="tab" data-toggle="tab">
                                                                <i class="material-icons">dashboard</i>
                                                                Carrito de Compras
                                                            </a>
                                                        </li>
                                                        <li>
                                                        <a href="#studio" role="tab" data-toggle="tab">
                                                            <i class="material-icons">list</i>
			                                                 Pedidos realizados 
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                               @foreach (auth()->user()->cart->details as $detail)
                                               <ul>
                                               <li>{{ $detail }}</li>
                                               </ul>
                                                   
                                               @endforeach
                                            </div>
                                        </div>
                                        <!-- End Profile Tabs -->
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>



                    @include('Admin.includes.footer')
@endsection
