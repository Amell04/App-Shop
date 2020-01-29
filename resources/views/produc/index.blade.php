@extends('layouts.app')

@section('content') 
<body class="landing">
  <nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
          <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="../components-documentation.html" target="_blank">
              Components
            </a>
          </li>
          <li>
         
          </li>
              <li>
                  <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
            <i class="fa fa-twitter"></i>
          </a>
              </li>
              <li>
                  <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
            <i class="fa fa-facebook-square"></i>
          </a>
              </li>
        <li>
                  <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
            <i class="fa fa-instagram"></i>
          </a>
              </li>
          </ul>
        </div>
    </div>
  </nav>

  <div class="wrapper">
      <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
      </div>

  <div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Productos</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>
            </div>

          <div class="section text-center">
        <div class="team">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ $product->featured_image_url}}" alt="img-thumbnail" class=" img-raised img-circle">
                <h4 class="title">
                  <a href="{{url('/product/'.$product->id)}}">{{$product->name}}</a>
                </h4>
                <p class="description">{{$product->description}}</p>
                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
              </div>
          </div>
          @endforeach
      </h4>
              </div> 
          
          </div>
</div>
        </div>

            </div>

  </div>
</div>
</body>
@include('Admin.includes.footer')
@endsection