@extends('layouts.app')
    
@section('content')

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                   
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
                <li>
                    
                <li>
                    
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('../aseets/img/examples/city.jpg');"></div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="profile">
                        <div class="row">
                            <div class="col-md-offset-5">
                                <div class="avatar">
                                    <img src="{{ $product->featured_image_url}}" class="img-circle img-responsive img-raised">
                                    </div>
                            </div>
                            
                        <div class="name text-center">
                        <h3 class="title text-center">{{$product->name}}</h3>
                        <h6>{{$product->category->name}}</h6>
                        </div>
                        @if (session('notification'))
                            <div class="alert alert-success" role="alert">
                                {{ session('notification') }}  
                            </div>
                            @endif
                    </div>
                </div>
                <div class="description text-center">
                <p>{{$product->long_description}}</p>
                </div>
                <!-- Boton de anadir al carrito de compras -->
                <div class="text-center">
                    <button class="btn btn-info btn-round" data-toggle="modal" data-target="#modalAdd">
                        <i class="material-icons">add</i> añadir al carrito de compras
                      </button>
                </div>
                <!-- Button trigger modal -->
  
  <!-- Modal -->

                
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="profile-tabs">
                            <div class="nav-align-center">

                                <div class="tab-content gallery">
                                    <div class="tab-pane active" id="studio">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @foreach ($imgL as $image)
                                               <img src="{{ $image->url }}" class="img-rounded" />
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                @foreach ($imgR as $image)
                                               <img src="{{ $image->url }}" class="img-rounded" />
                                                @endforeach
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

</div>
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Selecione la cantidad que desea agregar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="{{ url('/cart')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="modal-body">
                <input type="number" name="quantity" value="1" class="form-control">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancerlar</button>
                <button type="submit" class="btn btn-primary">Añadir al carrito</button>
              </div>
        </form>

      </div>
    </div>
  </div>

@endsection
