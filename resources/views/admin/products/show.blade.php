@extends('admin.layouts.single')
@section('title', 'all-category')
@section('content')
<div style="margin-top: 100px;"></div>
<div class="row">
    <div class="col-sm-8">
        <div class="card" >
            <div class="card-body text-dark">
                <span class="float-right">| {{$product->category->name}} |</span>

            <h4 class="card-title text-color">{{ $product->name}}</h4>
            <br><br/>
              <h5 class="card-subtitle mb-2 text-muted">Description</h5>
              <p class="card-text border-0">{!! $product->description!!}</p>
              <br/>
              <br/>
              <h5 class="card-subtitle mb-2 text-muted">Additional Info</h5>
              <p class="card-text border-0">{!! $product->additional_info!!}</p>
              <hr>
              <div style="margin-bottom: 50px">
              <a href="{{ route('product.edit',[$product->id]) }}" class="btn btn-primary">Edit</a>
              <a href="{{ route('product.index') }}" class="card-link">Go Back</a>
              </div>

            </div>
            <div class="pt-50"></div>
          </div>
    </div>
    <div class="col-sm-4 border-bottom-0 ">
        <figure class="figure shadow p-3 mb-5 bg-white rounded">
        <img src="{{Storage::url($product->image)}}" class="figure-img img-fluid rounded" alt="product image" >
            <figcaption class="figure-caption text-left">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Price: </strong> {{$product->price}}$</li>
                    <li class="list-group-item"><strong>Category: </strong>{{$product->category->name}}</li>
                    <li class="list-group-item"><strong>Subcategory: </strong>{{$product->subcategory->name}}</li>
                  </ul>
            </figcaption>
          </figure>
    </div>
  </div>

@endsection
