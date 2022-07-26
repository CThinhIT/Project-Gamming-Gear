@extends('admin.layout.layout')

@section('title')
<title>Brand</title>

@endsection

@section('product_css')
{{--
<link rel="stylesheet" href="{{asset('css/product/style.min.css')}}"> --}}
<link rel="stylesheet" href="{{asset('css/product/product.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('admin.layout.content-header', ['name' => 'brand', 'key' => 'view'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        @if(Session::get('admin_role')==1)
        <div class="col-md-12">
          <a href="{{route('brand.create')}}" class="btn btn-success float-right m-2">Add</a>
        </div>
        @endif
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($brands as $brand)
              <tr>
                <th scope="row">{{$brand->id}}</th>
                <td>{{$brand->name}}</td>
                <td>{{$brand->description}}</td>
                <td><img class="product_image_avatar"
                    src="{{asset('storage/images/brand/' .$brand->logo)}}" alt="">
                </td>
                <td>
                  <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-primary">Edit</a>

                  <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger action_delete" onclick="javascript:return confirm('Are you sure delete')">Delete</a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{-- <div class="col-md-12">
          {{$products->links()}}
      </div> --}}
    </div>
  </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('product_js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script src="{{asset('js/product/sweetalert2@11.js')}}"></script>
<script src="{{asset('js/product/delete.js')}}"></script> --}}
@endsection