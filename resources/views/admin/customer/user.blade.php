@extends('admin.layout.layout')

@section('title')
    <title>Comment</title>
@endsection

@section('product_css')
    {{-- <link rel="stylesheet" href="{{asset('css/style.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/product/product.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layout.content-header', ['name' => 'User', 'key' => 'View'])
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
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>
                                            <form action="{{ route('handleAccount') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $customer->id }}">
                                                @if ($customer->active == 1)
                                                    <input type="submit" class="btn btn-danger" value="Block">
                                                @else
                                                    <input type="submit" class="btn btn-success" value="Unblock">
                                                @endif
                                            </form>
                                        </td>
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
    <script src="{{ asset('js/product/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('js/product/delete.js') }}"></script>
@endsection
