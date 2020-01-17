@extends('layout')

@section('content')
<div class="container">
<h1 class="text-center">Productos existentes</h1>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Descripcion-larga</th>
                <th scope="col">Precio</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->long_description}}</td>
                    <td>{{$product->price}}</td>
                  </tr> 
                @endforeach
            </tbody>
          </table>
    </div>
</div>
{{$products->links()}}
@endsection