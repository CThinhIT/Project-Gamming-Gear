@extends('admin.layout.layout')

@section('title')
<title>Product</title>

@endsection

@section('product_css')
{{--
<link rel="stylesheet" href="{{asset('css/style.min.css')}}"> --}}
<link rel="stylesheet" href="{{asset('css/product/product.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layout.content-header', ['name' => 'product', 'key' => 'view'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="row choose-cat">
                            <div class="col-md-3">
                                <label>Choose category </label>
                                <select name="category_id" class="form-control select2_init ">
                                    <option value="0"></option>
                                    {!! $htmlOption!!}
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label>Choose brand </label>
                                <select name="brand_id" class="form-control select2_init ">
                                    <option value="0"></option>
                                    {!! $htmlOption1!!}
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label>Search </label>
                                <nav class="navbar navbar-light bg-light" style="padding: 0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="key">
                                </nav>
                            </div>

                            <div class="col-md-3">
                                <label for=""></label>
                                <button type="submit" class="btn btn-primary choose-cat-child">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
                @if(Session::get('admin_role')==1)
                <div class="col-md-12">
                    <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                @endif
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Popular-Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $productItem)
                            <tr>
                                <th scope="row">{{$productItem->id}}</th>
                                <td>{{$productItem->name}}</td>
                                <td>{{$productItem->price}}</td>
                                <td><img class="product_image_avatar" src="{{asset('storage/images/products/' .$productItem->image_avatar)}}" alt="">
                                </td>
                                <td>{{$productItem->category->name}}</td>
                                <td>{{$productItem->brand->name}}</td>
                                <td>
                                    @if($productItem->popular_status == 0)
                                    <a href="{{route('product.unactive', ['id' => $productItem->id])}}"><i class='bx bx-x' style="font-size: 80px; color: red"></i></a>
                                    @else
                                    <a href="{{route('product.active', ['id' => $productItem->id])}}"><i class='bx bx-check' style="font-size: 80px"></i></a>                                  
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('product.edit', ['id' => $productItem->id])}}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger action_delete"
                                        data-url="{{route('product.delete', ['id' => $productItem->id])}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{$products->links()}}
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