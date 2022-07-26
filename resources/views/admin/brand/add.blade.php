@extends('admin.layout.layout')

@section('title')
<title>Create-Brand</title>

@endsection

@section('product_css')
{{-- <link rel="stylesheet" href="{{asset('css/product/style.min.css')}}"> --}}
<link rel="stylesheet" href="{{asset('css/product/product.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layout.content-header', ['name' => 'brand', 'key' => 'add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group">
                            <label>Choose brand</label>
                            <select name="name" class="form-control">
                                <option value=""></option>
                                {!! $htmlOption!!}
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Input name brand">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Input description">
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Input slug">
                        </div>

                        <div class="form-group">
                            <label for="">Choose logo</label>
                            <input type="file" class="form-control-file" name="logo"
                                placeholder="Input logo">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('product_js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/product/sweetalert2@11.js')}}"></script>
<script src="{{asset('js/product/delete.js')}}"></script>
@endsection