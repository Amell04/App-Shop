@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        @if ($errors->any())
           <div class="alert alert-danger">
             <ul>
               @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
               @endforeach
             </ul>
           </div>             
        @endif
        <h1 class="text-center">Registro de Productos</h1>
        <hr>
      <form action="{{url('/Admin/product')}}" method="POST">
          {{ csrf_field() }}
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" name="name" class="form-control" id="" aria-describedby="" placeholder="Nombre">                
            </div>
          </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Descripcion</label>
                  <input type="text " name="description" class="form-control" id="" placeholder="Descripcion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Otra Descripcion</label>
                  <textarea class="form-control"  name="long_description" placeholder="Here can be your nice text" rows="5"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Precio</label>
                  <input type="number" name="price" class="form-control" id="" placeholder="Precio">
                </div>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <select name="categoria_id" id="" >
                    <option value="">--Categorias--</option>
                    @foreach($categories as $item)
                  <option value="{{$item['id']}}">{{$item['name']}}</option>
                 @endforeach
                  </select>
                </div>
              </div>
              </div>
              <button type="submit" class="btn btn-success">Guardar</button>
              <a  href="{{url('/Admin/product') }}" class="btn btn-danger btn-round">Volver al listado de productos</a> 
            </form>
      </div>
    </div>
  </div>
</div>
 
@endsection