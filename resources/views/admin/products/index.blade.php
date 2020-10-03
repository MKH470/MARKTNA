@extends('admin.layouts.main')
@section('title', 'all-products')
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
              <h1 class="h3 mb-0 text-gray-800">Products</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">products</li>
              </ol>
            </div>
  <!-- DataTable with Hover -->
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Here you can see all products </h6>
        <span class="float-right">
            <a href="{{route('product.create')}}" >+ Add new</a>
        </span>
      </div>
      <div class="table-responsive p-3">
        @if(count($products) > 0)
<table class="table align-items-center table-flush table-hover" id="dataTable">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Category</th>
      <th>Subcategory</th>
      <th>Action</th>
      <th></th>
      <th></th>

    </tr>
  </thead>
  <tfoot>
    <tr>
        <th>#</th>
        <th>image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Subcategory</th>
        <th>Action</th>
        <th></th>
        <th></th>
    </tr>
  </tfoot>
  <tbody>

      @foreach($products as $key =>  $product)
    <tr>
      <td><a href="#" >{{$key +1}}</a></td>
      <td><img src="{{Storage::url($product->image)}}" width="100" ></td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}$</td>
      <td>{{$product->category->name}}</td>
      <td>{{$product->subcategory->name}}</td>
      <td><a href="{{ route('product.show',[$product->id]) }}" class="btn btn-warning">View</a></td>

      <td><a href="{{ route('product.edit',[$product->id]) }}" class="btn btn-primary">Edit</a></td>
      <td>
      <form action="{{ route('product.destroy',[$product ->id]) }}" method="POST" onsubmit="return confirmDelete()">
        @csrf
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger"> Delete</button>
          </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@else
    <div class='col col-sm-12 text-center'>
     <p><strong>NO</strong> products to display</p>
     <br>
   <a href="{{route('product.create')}}" class="btn btn-primary">Create product</a>
   @endif
      </div>
    </div>
  </div>
</div>
<!--Row-->

@endsection
