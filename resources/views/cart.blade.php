
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
<table id="cart" class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th>Remove</th>
    </tr>
  </thead>
  <tbody>
  @if($cart)
  @php
  $key=1;
  @endphp
  @foreach($cart->items as $product)

    <tr>
      <th scope="row">{{$key++}}</th>
      <td><img src="{{Storage::url($product['image'])}}" width="100"></td>
      <td>{{$product['name']}}</td>
      <td>${{$product['price']}}</td>
      <td>
      <form action="{{route('update.cart',$product['id'])}}" method="post">
        @csrf
       	<input type="number" min='1' name="qty" value='{{$product['qty']}}'>
      	<button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-sync"></i> update</button>
        </form>
      </td>

      <td>
        <form action="{{route('cart.remove',$product['id'])}}" method="POST">
        @csrf
      	<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
        </form>
      </td>
    </tr>

  @endforeach

  </tbody>
</table>
<hr>
<div class="card-footer" method="post">

	<button class="btn btn-warning">Continue Shopping</button>

	<span style="margin-left:300px;">${{$cart->totalPrice}}</span>
<a href="{{route('cart.checkout',[$cart->totalPrice])}}" class="btn btn-info float-right">Checkout</a>
    </div>
      @else
      <div class="card-footer" method="post">
      <button class="btn btn-warning">Continue Shopping</button>
      <span style="margin-left:300px;"><b>NO </b> items in your cart</span>

     </div>
@endif

</div>
@endsection
