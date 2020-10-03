
@extends('layouts.app')

@section('content')

<div class="container">

<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
			<section class="gallery-wrap">
			<div class="img-big-wrap">
			  <div> <a href="#">
			  	<img src="{{Storage::url($product->image)}}" width="450"></a>
			  </div>
			</div>

			</section>
		</aside>

		<aside class="col-sm-7">
			<section class="card-body p-5">
				<h3 class="title mb-3">{{$product->name}}</h3>
                  <p class="price-detail-wrap">
                     <span class="price h3 text-danger">
                        <span class="currency">{{$product->price}} $</span>
                    </span>
                  </p> <!-- price-detail-wrap .// -->
                <h3>Description</h3>
                <p>{!! $product->description !!} </p>
                <h3>Additional information</h3>
                <p>{!! $product->additional_info !!}</p>
                <hr>
                <br/>
                <a href="{{route('add.cart',[$product->id])}}" class="btn btn-lg btn-outline-primary text-uppercase"> + Add to cart </a>
                
            </section>
         </aside>
	    </div>
    </div>
    <div class="jumbotron">
        <h4>You may like</h4>
        <div class="row">
            @if(count($getProductFromSameCategory) > 0 )
            @foreach($getProductFromSameCategory as $product)
          <div class="col-md-4">

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

            @endif
        </div>
    </div>
</div>
@endsection
