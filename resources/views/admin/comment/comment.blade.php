@extends('admin.layout.layout')

@section('title')
<title>Comment</title>

@endsection

@section('product_css')
{{-- <link rel="stylesheet" href="{{asset('css/style.min.css')}}"> --}}
<link rel="stylesheet" href="{{asset('css/product/product.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layout.content-header', ['name' => 'Comment', 'key' => 'View'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($c as $cmt)
                            <tr>
                                <th scope="row">{{ $cmt->id }}</th>
                                <th scope="row">{{ $cmt->name }}</th>
                                <th scope="row">{{ $cmt->email }}</th>
                                <th scope="row">{{ $cmt->comment }}</th>
                                <th scope="row">{{ $cmt->rating }}</th>

                                <!-- <form action="{{ URL('admin/comment/delete', ['comment'=>$cmt->id]) }}" method="POST"> -->
                                <!-- @csrf -->
                                <td><a href="{{route('comment.delete', ['id' => $cmt->id])}}" class="btn btn-danger" onclick="javascript:return confirm('Are you sure delete')">Delete</a></td>
                                <!-- </form> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{-- {{$products->links()}} --}}
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