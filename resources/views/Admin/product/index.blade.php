@extends('layout')

@section('content') 
<h1 class="text-center">Registro de Productos</h1>
<hr>
<br>
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
                                <a type="button"  class="badge badge-primary">Info</a>
                                <a type="button" href="{{url('/Admin/product/'.$product->id.'/images')}}" class="badge badge-warning">Imagen</a>
                                    <a type="button"  href="{{url('/Admin/product/'.$product->id.'/edit')}}" class="badge badge-info">Editar</a>
                                   
                                    @if($product->condicion ==1)
                                    
                                        <a href="" data-target="#modal-delete-{{$product->id}}" data-toggle="modal"><button class="badge badge-danger">Eliminar</button></a>
                                    
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

 
{{$products->links()}}
@endsection