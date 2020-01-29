@extends('layouts.app')

@section('content') 
<div class="wrapper">
    <div class="header header-filter" style="background-image: url('../aseets/img/examples/city.jpg');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <a  href="{{url('/Admin/product/create') }}" class="btn btn-primary btn-round">Nuevo Producto</a> 
                       
                        <select class="browser-default custom-select">
                            <option selected>Open this select menu</option>
                            @foreach( $products as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                          </select>
                        <br>
                
                    </div>
                </div>
                

                </div>
                <div class="description text-center">
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="profile-tabs">
                            <div class="nav-align-center">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="active">
                                        <a href="#studio" role="tab" data-toggle="tab">
                                            <i class="material-icons">camera</i>
                                            Studio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#work" role="tab" data-toggle="tab">
                                            <i class="material-icons">palette</i>
                                            Work
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#shows" role="tab" data-toggle="tab">
                                            <i class="material-icons">favorite</i>
                                            Favorite
                                        </a>
                                    </li>
                                </ul>
                                <!--Tabla de datos-->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Descripcion</th>
                                            <th class="text-center">Categoria</th>
                                            <th class="">Precio</th>
                                            <th class="text-right">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product )
                                        <tr>
                                            <td class="text-center">{{$product->id}}</td>
                                                <td>{{$product->name}}</td>
                                                <td >{{$product->description}}</td>
                                                <td>{{$product->category ? $product->category->name: 'General'}}</td>
                                                <td class="text-right">&dollar; {{$product->price}}</td>
                                                <td class="td-actions text-right">
                                                    <a rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-info"></i>
                                                    </a>
                                                    <a  href="{{url('/Admin/product/'.$product->id.'/images')}}" rel="tooltip" title="Edit Profile" class="btn btn-warning btn-simple btn-xs">
                                                        <i class="fa fa-photo"></i>
                                                    </a>
                                                        <a   href="{{url('/Admin/product/'.$product->id.'/edit')}}" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                       
                                                        @if($product->condicion ==1)
                                                        
                                                            <a href="" data-target="#modal-delete-{{$product->id}}" data-toggle="modal"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        @else
                                                        
                                                           <a href="" data-target="#modal-activate-{{$product->id}}" data-toggle="modal"><button class="badge badge-warning">Activar</button></a>
                                                        
                                                        @endif                   
                                                        
                                                </td>
                                                
                                            </tr>
                                            @include('Admin.product.modal')
                                            @include('Admin.product.modalactive')
                                        @endforeach
                                    </tbody>
                                </table>
 

                            </div>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{$products->links()}}
    @include('Admin.includes.footer')
@endsection