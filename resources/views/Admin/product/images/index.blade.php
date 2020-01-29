@extends('layout')

@section('content') 
<br>
    <div class="container">
        <div class="section text-center">
        <h2 class="title"> Imagenes del producto "{{ $product->name }}" </h2>
         <br>
         <div class="panel panel-default">
            <div class="panel-body">
                <form action="" method="POST" required enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="photo" required>
                   <button type="submit" class="btn btn-primary btn-round">Subir nueva Imagen</button> 
                   <a  href="{{url('/Admin/product') }}" class="btn btn-primary btn-round">Volver al listado de productos</a> 
                </form>
            </div>
          </div>
          <br>
         <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4">
                <div class="panel panel-default">
                   <div class="panel-body">
                   <img src="{{$image->url}}" width="250">
                   <form action="" method="post">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                   <input type="hidden" name="image_id" value="{{ $image->id }}">
                    <button type="submit" class="btn btn-danger btn-round">Eliminar Imagen</button>
                    @if ($image->featured)
                    <button  class="btn btn-primary btn-fab btn-fab-mini btn-round" rel="tooltip" title="imagen destacada de este producto">
                        <i class="material-icons">favorite</i>
                        <button>
                    @else
                    <a type="button" href="{{ url('Admin/product/'.$product->id.'/images/select/'.$image->id) }}">
                        <i class="material-icons">favorite</i>
                    @endif
                        
                   </form>
                   </div>
                 </div>
                </div>
                @endforeach      
             
         </div>
        </div> 
    </div>

 

@endsection