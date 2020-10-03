@extends('admin.layouts.main')
@section('title', 'all-slider-image')
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
              <h1 class="h3 mb-0 text-gray-800">Slider Images</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">catagories</li>
              </ol>
            </div>
  <!-- DataTable with Hover -->
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Here you can see all images for slider </h6>
        <span class="float-right">
            <a href="{{route('slider.create')}}"> + Add new</a>
        </span>
      </div>
      <div class="table-responsive p-3">
        @if(count($sliders) > 0)
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>#</th>>
              <th>image</th>
              <th></th>

            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>#</th>
                <th>image</th>
          </tfoot>
          <tbody>

              @foreach($sliders as $key =>  $slider)
            <tr>
              <td><a href="#" >{{$key +1}}</a></td>
              <td><img src="{{Storage::url($slider->image)}}" width="100" ></td>
              <td>
              <form action="{{route('slider.destroy',[$slider->id])}}" method="POST" onsubmit="return confirmDelete()">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
           @else
           <div class='col col-sm-12 text-center'>
            <p><strong>NO</strong> images to display</p>
            <br>
          <a href="{{route('slider.create')}}" class="btn btn-primary">uploade image</a>

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
