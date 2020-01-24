@extends('layout')

@section('content')
<h1 class="text-center">Editar de Producto Seleccionado</h1>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <form action="{{url('/Admin/product/'.$product->id.'/edit')}}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="name" class="form-control" id="" aria-describedby="" placeholder="Nombre" value="{{$product->name}}">                
                </div>
                <div class="form-group">
                  <label for="">Descripcion</label>
                  <input type="text " name="description" class="form-control" id="" placeholder="Descripcion" value="{{$product->description}}">
                </div>
                <div class="form-group">
                  <label for="">Otra Descripcion</label>
                  <textarea class="form-control"  name="long_description" placeholder="Here can be your nice text" rows="5" value="">{{$product->long_description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="">Precio</label>
                  <input type="number" step="0.01" name="price" class="form-control" id="" placeholder="Precio" value="{{$product->price}}">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
               <a href="{{('/Admin/product')}}" class="btn btn-danger">Cancelar</a>
              </form>
        </div>
            
        </div>
    </div>
@endsection