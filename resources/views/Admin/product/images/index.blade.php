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
                    <button type="button" class="btn btn-danger bmd-btn-fab">
                        <i class="material-icons">grade</i>
                    </button>
                   </form>
                   </div>
                 </div>
                </div>
                @endforeach      
             
         </div>
        </div> 
    </div>

 

@endsection