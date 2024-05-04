@extends('layouts.master')

@section('title')
    prodacts
@stop

@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
   Create Products
@stop
<!-- breadcrumb -->
@endsection
@section('content')

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Add Product</h3>
        <form action="{{ route('products.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">product</label>
            <input type="text" class="form-control" id="product" name="product" required>
          </div>
          <div class="form-group">
            <label for="body">descrip</label>
            <textarea class="form-control" id="descrp" name="descrp" rows="2" required></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>



@endsection
