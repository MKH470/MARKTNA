@extends('admin.layouts.main')
@section('title', 'create_slider')
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
      <h1 class="h3 mb-0 text-gray-800">Create Slider</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active" aria-current="page">Create Category</li>
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

      <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
            <input type="file" class="form-control  @error('image') is-invalid @enderror " id="image"  name='image'>

            @error('image')
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
            <button type="submit" class="btn btn-primary btn-block">Uploade image</button>
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
