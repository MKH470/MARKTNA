@extends('layouts.app')

@section('content')

 <div class="container">

 	<div class="row justify-content-center">
         <div class="text-center col-md-8">
         <h2> Hi {{Auth::user()->name}}!!</h2>
         <p>Here you can see all your history orders</p>
         </div>
 		<div class="col-md-8">
            @if(count($carts)>0)
 			@foreach($carts as $cart)
 			<div class="card mb-3">
 				<div class="card-body">
 					@foreach($cart->items as $item)
 					<span class="float-right">
 						<img src="{{Storage::url($item['image'])}}" width="100">
 					</span>

 					<p><b>Name:</b> {{$item['name']}}</p>
 					<p><b>Price:</b> ${{$item['price']}}</p>
                     <p><b>Qty:</b> {{$item['qty']}}</p>
                    <hr/>
 					@endforeach

 				</div>

 			<p>
 				<button type="button" class="btm btn-warning" style="color: #fff;">
 					<span class="badge badge-light">
                    <b>Total price:</b> ${{$cart->totalPrice}}
 					</span>
 				</button>
 			</p>
 			<br>
             @endforeach
             @else
             <div class="card mb-3">
                 <div class="card-body">
                    <p><b>No</b> orders to display</p>

                 </div>
              </div>
              @endif
 		</div>
 	</div>



 </div>

 @endsection
