@extends('admin.layouts.main')
@section('title', 'all-order')
@section('content')

{{--
  //---
    @if(Session::has('success'))
<div class="col col-md-8 text-center">
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
</div>
@endif --}}
     <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Orders</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">orders</li>
              </ol>
            </div>
  <!-- DataTable with Hover -->
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Here you can see all orders </h6>
        <span class="float-right">

        </span>
      </div>
      <div class="table-responsive p-3">
        @if(count($orders) > 0)
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Date</th>
              <th>View</th>
              <th></th>

            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>View</th>
                <th></th>
            </tr>
          </tfoot>
          <tbody>

              @foreach($orders as $key =>  $order)
            <tr>
              <td><a href="#" >{{$key +1}}</a></td>
              <td>{{$order->user->name}}</td>
              <td>{{$order->user->email}}</td>
              <td>{{date('d-M-Y'),strtotime($order->created_at)}}</td>
              <td><a href="{{route('order.view',[$order->user_id,$order->id])}}" class="btn btn-primary">View Order</a></td>

            </tr>
            @endforeach
           @else
           <div class='col col-sm-12 text-center'>
            <p><strong>NO</strong> orders to display</p>
           </div>
           @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--Row-->

@endsection
