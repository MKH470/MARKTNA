
@extends('layouts.app')

@section('content')


    <div class="container">
        <h2>Products</h2>

      <div class="row">
        <div class="col-md-2">
        <form action="{{route('category.product.view',[$slug])}}" method="GET">

            <!--foreach subcategories-->
            @foreach($subcategories as $subcategory)
           <input type="checkbox" name="subcategory[]" value="{{$subcategory->id}}" @if (in_array($subcategory->id,$check)) checked="checked" @endif><label>{{$subcategory->name}}</label><br/>
            @endforeach
           <!--end foreach-->

          <input type="submit" value="Filter" class="btn btn-info">
         </form>
         <hr/>
         <h4>Fitter by price</h4>
         <form action="{{route('category.product.view',[$slug])}}" method="GET">

            <!--foreach subcategories-->
        <p>
        <input type="number" min="0" name="min" value="{{old('min')}}" placeholder="minimum price" required ><br>
        <input type="number" min="0" name="max" value="{{old('max')}}" placeholder="maximum price" class="mt-2" required><br>
           <input type="hidden" name="categoryId" value="{{$category->id}}">
           <!--end foreach-->
          <input type="submit" value="Filter" class="btn btn-info mt-2">
        </p>
         </form>
         <hr/>
        <a href="{{route('category.product.view',[$slug])}}"> Back </a>
        </div>
      <div class="col-md-10">
        <div class="row">
      <!--foreach products-->
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name }}</b></p>
              <p class="card-text">
               {!!Str::limit($product->description,120)  !!}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('product.view',[$product->id])}}"> <button type="button" class="btn btn-sm btn-outline-success">View</button>
                 </a>
                 <a href="{{route('add.cart',[$product->id])}}" type="button" class="btn btn-sm btn-outline-primary">Add to card</a>
                </div>
                <small class="text-muted">{{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    <!--endforeach-->
      </div>
    </div>
</div>
</div>




@endsection
