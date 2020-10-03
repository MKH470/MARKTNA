@extends('admin.layouts.main')
@section('title', 'subcreate_category')
@section('content')

{{--@if(Session::has('success'))

     <div class="col col-md-8 text-center">
    <div class="alert alert-success" role="alert">
         Session::get('success')
    </div>
</div>
@endif --}}
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Create Subcategory</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active" aria-current="page">Create Subcategor</li>
      </ol>
    </div>
    <div class="row">
        <div class="col-lg-8">
  <!-- Horizontal Form -->
  <div class="card ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"></h6>
      <div class="card-body">
      <!-- beging form--->

      <form action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Subcategory Name</label>
            <div class="col-sm-9">
            <input type="text" class="form-control @error('name')  is-invalid  @enderror " id="name" placeholder="enter name of category" name='name' value="{{old('name')}}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-3 col-form-label">Select category</label>
            <div class="col-sm-9">
            <select class="form-control  @error('category')  is-invalid  @enderror" id="exampleFormControlSelect1" name='category'>
                <option disabled selected value> -- select a category-- </option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                 @endforeach
            </select>
            @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
          </div>

        <div class="form-group row">
            <div class="col-sm-3">
            </div>
        <div class="col-sm-9">
            <button type="submit" class="btn btn-primary btn-block">subcreate category</button>
        </div>
        </div>
      </form>
      <!-- / form--->
      </div>

    </div>
  </div>

        </div>
    </div>

@endsection
