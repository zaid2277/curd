@extends('layouts.master')

@section('title')
    prodacts
@stop

@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    products
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm" role="button"
                                aria-pressed="true">add product</a><br><br>
                            <div class="table-responsive">
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                    data-page-length="50" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>product</th>
                                            <th>descrp</th>
                                            <th>pr</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $product->product }}</td>
                                                <td>{{ $product->descrp }}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#"
                                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            pr
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item"
                                                                href="{{ route('products.show', $product->id) }}"><i
                                                                    style="color: #ffc107"
                                                                    class="far fa-eye "></i>&nbsp; show</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('products.edit', $product->id) }}"><i
                                                                    style="color:green" class="fa fa-edit"></i>&nbsp;
                                                                edit</a>
                                                                <div class="col-sm">
                                                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                                      @csrf
                                                                      @method('DELETE')
                                                                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                                    </form>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tr>

                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
