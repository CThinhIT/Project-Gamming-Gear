@extends('admin.layout.layout')

@section('title')
<title>Trang chu</title>

@endsection

@section('product_css')
<link rel="stylesheet" href="{{asset('css/product/style.min.css')}}">
<link rel="stylesheet" href="{{asset('css/product/product.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layout.content-header', ['name' => 'brand', 'key' => 'edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('brand.update', ['id' => $brand->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="{{$brand->name}}" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" value="{{$brand->description}}" name="description" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" value="{{$brand->slug}}" name="slug" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Choose logo</label>
                            <input type="file" class="form-control-file" name="logo" placeholder="Input logo">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="product_image_avatar"
                                        src="{{asset('storage/images/brand/' .$brand->logo)}}" alt="">
                                </div>
                            </div>
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