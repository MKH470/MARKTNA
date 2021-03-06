@extends('admin.layouts.main')
@section('title', 'create_product')
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
      <h1 class="h3 mb-0 text-gray-800">Update Category</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">update product</li>
      </ol>
    </div>
    <div class="row">
        <div class="col-lg-9">
  <!-- Horizontal Form -->
  <div class="card ">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"></h6>
      <div class="card-body">
      <!-- beging form--->

      <form action="{{route('product.update',[$product->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group row">
            <label for="name" class="col-sm-9 col-form-label">
             Name</label>
            <input type="text" class="form-control @error('name')  is-invalid  @enderror " id="name" placeholder="enter name of product" name='name' value="{{$product->name}}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="image" class="col-sm-9 col-form-label">Image</label>
            <input type="file" class="form-control  @error('image') is-invalid @enderror " id="image"  name='image'>

            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-9 col-form-label">
            Price ($)</label>
            <input type="text" class="form-control @error('price')  is-invalid  @enderror " id="price" placeholder="enter price of product" name='price' value="{{$product->price}}">
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-9 col-form-label">Description</label>
            <textarea class="form-control  @error('description') is-invalid @enderror" id="summernote" rows="6" name="description" >{!! $product->description !!}</textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="additional_info" class="col-sm-9 col-form-label">Additional Info</label>
            <textarea class="form-control  @error('additional_info') is-invalid @enderror" id="summernote1" rows="6" name="additional_info" >{!! $product->additional_info !!}</textarea>

            @error('additional_info')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-9 col-form-label">Select category</label>

            <select class="form-control  @error('category')  is-invalid  @enderror" id="exampleFormControlSelect1" name='category'>
                <option disabled selected value> -- select a category-- </option>
            @foreach(App\Category::all() as $category)
                <option value="{{$category->id}}"  >{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

          </div>
          <div class="form-group row">
            <label for="subcategory" class="col-sm-9 col-form-label">Chose subcategory</label>

            <select class="form-control  @error('subcategory')  is-invalid  @enderror"  name='subcategory'>
                <option disabled selected value>--select subcategory--</option>
                @foreach(App\Subcategory::get() as $subcategory)
                <option value="{{$subcategory->id}}"  >{{$subcategory->name}}</option>
                 @endforeach

            </select>
          </div>
        <div class="form-group row">
            <div class="col-sm-3">
            </div>
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block">updat product</button>
        </div>
        </div>
      </form>
      <!-- / form--->
      </div>

    </div>
        </div>

      </div>
    <div class="col col-sm-3 ">
        <img src="{{Storage::url($product->image)}}" width="300" >
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type='text/javascript'>
    $("document").ready(function(){
             $('select[name="category"]').on('change',function(){
                 var catId= $(this).val();
                 if(catId){
                     $.ajax({
                             url:'/subcategories/'+catId,
                             type:'GET',
                             dataType:'json',
                             success:function(data){
                                 $('select[name="subcategory"]').empty();
                                 $.each(data,function(key,value){
                                     $('select[name="subcategory"]').append('<option value=" '+key+'">'+value+'</option');
                                 })
                             }

                     })
                 }else{
                     $('select[name="subcategory"]').empty();
                 }
             }) ;
    });
</script>
@endsection
