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
                                    <div class="col-md-12">
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
                                                <hr>
                                            <p>Tu carrito presenta {{ auth()->user()->cart->details->count() }} productos. </p>
                                               <div class="container">
                                                   <div class="row">
                                                       <div class="col-md-12 ">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Imagen</th>
                                                                    <th class="">Nombre</th>                                                       
                                                                    <th >Precio</th>
                                                                    <th>Cantidad</th>
                                                                    <th class="">Sub-Total</th>
                                                                    <th class="">Opciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach (auth()->user()->cart->details as $detail) 
                                                                <tr>
                                                                    <td>
                                                                      <img src=" {{ $detail->product->featured_image_url }}" height="50">
                                                                    </td>
                                                                        <td class="text-left">
                                                                           <a target="_blank" href="{{ url('/product/'.$detail->product->id) }}"> {{ $detail->product->name }}</a> 
                                                                        </td>                                                           
                                                                        <td class="text-left">$ {{ $detail->product->price }}</td>
                                                                        <td >
                                                                        <td class="text-left"> {{ $detail->quantity }}</td>
                                                                        <td class="text-left"> ${{ $detail->quantity * $detail->product->price }}</td>
                                                                         <form action="{{ url('/cart') }}" method="post">
                                                                                {{ csrf_field() }}
                                                                                {{ method_field('DELETE')}}
                                                                             <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                                                                <a rel="tooltip" title="View Profile"  class="btn btn-info btn-simple btn-xs" 
                                                                                href="{{ url('/product/'.$detail->product->id) }}" target="_blank">
                                                                                    <i class="fa fa-info"></i>
                                                                                </a>
                                                                                <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>                
                                                                            </form>
                                                                                                                                 
                                                                                
                                                                        </td>
                                                                        
                                                                    </tr>
                                                            
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        <div class="text-center">
                                                        <form action="{{ url('/order')}}" method="post">
                                                            {{ csrf_field() }}

                                                                <button type="submit" class="btn btn-success btn-round">
                                                                    <i class="material-icons">done</i> Realizar Pedido
                                                                </button>

                                                            </form>
                                                           
                                                        </div>
                                                        
                                                       </div>
                                                   
                                                   </div>
                                               </div>
                                              

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
