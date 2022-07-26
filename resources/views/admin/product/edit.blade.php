{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <title>Edit</title>
</head>

<body> --}}

    @extends('admin.layout.layout')

    @section('title')
    <title>Update-Product</title>

    @endsection

    @section('product_edit_css')
    {{--
    <link rel="stylesheet" href="{{asset('css/product/style.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/product/product.css')}}">
    @endsection

    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layout.content-header', ['name' => 'product', 'key' => 'update'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('product.update', ['id'=>$product->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input value="{{$product->name}}" type="text" class="form-control" name="name"
                                    placeholder="Input name">
                            </div>

                            <div class="form-group">
                                <label for="">Price</label>
                                <input value="{{$product->price}}" type="number" class="form-control" name="price"
                                    placeholder="Input price">
                            </div>

                            <div class="form-group">
                                <label for="">Avatar</label>
                                <input type="file" class="form-control-file" name="image_avatar"
                                    placeholder="Input image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="product_image_avatar"
                                            src="{{asset('storage/images/products/' .$product->image_avatar)}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Image detail 1</label>
                                <input type="file" class="form-control-file" name="image_details_1"
                                    placeholder="Input image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="product_image_avatar"
                                            src="{{asset('storage/images/products/' .$product->image_details_1)}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Image detail 2</label>
                                <input type="file" class="form-control-file" name="image_details_2"
                                    placeholder="Input image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="product_image_avatar"
                                            src="{{asset('storage/images/products/' .$product->image_details_2)}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Image detail 3</label>
                                <input type="file" class="form-control-file" name="image_details_3"
                                    placeholder="Input image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="product_image_avatar"
                                            src="{{asset('storage/images/products/' .$product->image_details_3)}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Choose category </label>
                                <select name="category_id" class="form-control select2_init">
                                    <option value=""></option>
                                    {!! $htmlOption!!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Choose brand </label>
                                <select name="brand_id" class="form-control">
                                    <option value=""></option>
                                    {!! $htmlOption1!!}
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Input description</label>
                                <textarea name="description" class="form-control"
                                    rows="3">{{$product->description}}</textarea>
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

    @section('product_edit_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('product/add/add.js')}}"></script> --}}
    @endsection
    {{-- <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('product.update', ['id'=>$product->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input value="{{$product->name}}" type="text" class="form-control" name="name"
                                    placeholder="Input name">
                            </div>

                            <div class="form-group">
                                <label for="">Price</label>
                                <input value="{{$product->price}}" type="text" class="form-control" name="price"
                                    placeholder="Input price">
                            </div>

                            <div class="form-group">
                                <label for="">Avatar</label>
                                <input type="file" class="form-control-file" name="feature_image_path"
                                    placeholder="Input image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="product_image_avatar" src="{{$product->feature_image_path}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Image details</label>
                                <input type="file" multiple class="form-control-file" name="image_path[]"
                                    placeholder="Input image">
                                <div class="row">
                                    @foreach($product ->productImage as $productImageItem)
                                    <div class="col-md-3">
                                        <img class="product_image_details" src="{{$productImageItem->image_path}}"
                                            alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Choose category </label>
                                <select name="category_id" class="form-control select2_init">
                                    <option value=""></option>
                                    {!! $htmlOption!!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Input description</label>
                                <textarea name="description" class="form-control"
                                    rows="3">{{$product->description}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('product/add/add.js')}}"></script>
</body>


</html> --}}