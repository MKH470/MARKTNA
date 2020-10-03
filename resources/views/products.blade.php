@extends('layouts.app')

@section('content')
<div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible col-sm-8 text-center" role="alert">
            {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
    <main role="main">
          <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                        <div class="carousel-item {{$key==0 ?'active':''}} ">
                        <img class="d-block w-100" src="{{Storage::url($slider->image)}}" >

                        </div>

                @endforeach


                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
          <br/>
        <h2>Products</h2>
        @foreach(App\Category::all() as $catecory)
    <a href="{{route('category.product.view',[$catecory->slug])}}" class="btn btn-secondary">{{$catecory->name}}</a>
        @endforeach

        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row">
                @if(count($products) > 0 )
                @foreach($products as $product)
              <div class="col-md-4">

                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{Storage::url($product->image)}}" alt="Card image cap" height="200" style="width: 100%">
                    <div class="card-body">
                    <p class="card-text"><b>{{$product->name}}</b></p>
                      <p class="card-text">{{Str::limit($product->description,120)}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="{{route('product.view',[$product->id])}}"  class="btn btn-sm btn-outline-success">View</a>
                        <a href="{{route('add.cart',[$product->id])}}"  class="btn btn-sm btn-outline-primary">Add to card</a>
                        </div>
                        <small class="text-muted">{{$product->price}} $</small>
                      </div>
                    </div>
                  </div>
              </div>
              @endforeach

                @endif
            </div>
           <a href="{{route('products.list')}}" type="button" class="btn btn-success float-center">More Products</a>

          </div>
        </div>


<div class="jumbotron">
    <div id="carouselExampleFade" class="carousel slide " data-ride="carousel">
<div class="carousel-inner">

 <div class="carousel-item active">
  <div class="row">
      @foreach( $randomActiveProducts as $product)
      <div class="col-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{Storage::url($product->image)}}" alt="Card image cap" height="200" style="width: 100%">
                <div class="card-body">
                <p class="card-text"><b>{{$product->name}}</b></p>
                  <p class="card-text">{{Str::limit($product->description,120)}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="{{route('product.view',[$product->id])}}" type="button" class="btn btn-sm btn-outline-success">View</a>
                    <a href="{{route('add.cart',[$product->id])}}" type="button" class="btn btn-sm btn-outline-primary">Add to card</a>
                    </div>
                    <small class="text-muted">{{$product->price}} $</small>
                  </div>
                </div>
              </div>
    </div>

      @endforeach

  </div>
 </div>

 <div class="carousel-item">
  <div class="row">
    @foreach( $randomItemProducts as $product)
    <div class="col-4">
      <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="{{Storage::url($product->image)}}" alt="Card image cap" height="200" style="width: 100%">
              <div class="card-body">
              <p class="card-text"><b>{{$product->name}}</b></p>
                <p class="card-text">{{Str::limit($product->description,120)}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <a href="{{route('product.view',[$product->id])}}" type="button" class="btn btn-sm btn-outline-success">View</a>
                  <a href="{{route('add.cart',[$product->id])}}" type="button" class="btn btn-sm btn-outline-primary">Add to card</a>
                  </div>
                  <small class="text-muted">{{$product->price}} $</small>
                </div>
              </div>
            </div>
  </div>

    @endforeach

  </div>
 </div>



</div>
<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>
  </div>
      </main>



</div>
@endsection
