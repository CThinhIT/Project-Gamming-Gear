{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('product/add/add.css')}}">
    <title>Add</title>
</head>

<body> --}}

    @extends('admin.layout.layout')

    @section('title')
    <title>Create-Product</title>

    @endsection

    @section('product_add_css')
    {{-- <link rel="stylesheet" href="{{asset('css/style.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/product/add/add.css')}}">
    @endsection

    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layout.content-header', ['name' => 'product', 'key' => 'add'])
        <!-- /.content-header -->

        <!-- Main content -->
        {{-- <div class="content-wrapper"> --}}
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Input name">
                                </div>

                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Input price">
                                </div>

                                <div class="form-group">
                                    <label for="">Avatar</label>
                                    <input type="file" class="form-control-file" name="image_avatar"
                                        placeholder="Input image">
                                </div>

                                <div class="form-group">
                                    <label for="">Image details</label>
                                    <input type="file" class="form-control-file" name="image_details_1"
                                        placeholder="Input image">
                                </div>

                                <div class="form-group">
                                    <label for="">Image details</label>
                                    <input type="file" class="form-control-file" name="image_details_2"
                                        placeholder="Input image">
                                </div>

                                <div class="form-group">
                                    <label for="">Image details</label>
                                    <input type="file" class="form-control-file" name="image_details_3"
                                        placeholder="Input image">
                                </div>

                                {{-- <div class="form-group">
                                    <label for="">Avatar</label>
                                    <input type="file" class="form-control-file" name="feature_image_path"
                                        placeholder="Input image">
                                </div>

                                <div class="form-group">
                                    <label for="">Image details</label>
                                    <input type="file" multiple class="form-control-file" name="image_path[]"
                                        placeholder="Input image">
                                </div> --}}

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

                                <div class="form-group col-md-3">
                                    <label for="inputState">Popular Status</label>
                                    <select name="popular_status" class="form-control">
                                      <option value="0">Hidden</option>
                                      <option value="1">Show</option>
                                    </select>
                                  </div>


                                <div class="form-group">
                                    <label>Input description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection

    @section('product_add_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('product/add/add.js')}}"></script> --}}
    @endsection


    {{-- <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Input name">
                            </div>

                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Input price">
                            </div>

                            <div class="form-group">
                                <label for="">Avatar</label>
                                <input type="file" class="form-control-file" name="feature_image_path"
                                    placeholder="Input image">
                            </div>

                            <div class="form-group">
                                <label for="">Image details</label>
                                <input type="file" multiple class="form-control-file" name="image_path[]"
                                    placeholder="Input image">
                            </div>

                            <div class="form-group">
                                <label>Choose category </label>
                                <select name="category_id" class="form-control select2_init">
                                    <option value=""></option>
                                    {!! $htmlOption!!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Input tags for product</label>
                                <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Input description</label>
                                <textarea name="description" class="form-control" rows="3"></textarea>
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