@extends('layout')

@section('content') 
<h1 class="text-center">Registro de Categorias</h1>
<hr>
<br>
<div class="container">
    <div class="row">
        <a  href="{{url('/Admin/product/create') }}" class="btn btn-primary btn-round">Nuevo Producto</a> 
       
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                        <td class="text-center">{{$categorie->id}}</td>
                            <td>{{$categorie->name}}</td>
                            <td >{{$categorie->description}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection