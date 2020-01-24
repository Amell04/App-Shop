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
                <th scope="col">Categoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Descripcion-larga</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->long_description}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{ $product->featured_image_url}}" alt="" class="img-thumbnail"></td>
                  </tr> 
                @endforeach
            </tbody>
          </table>
    </div>
</div>
{{$products->links()}}
@endsection