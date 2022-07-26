@extends('admin.layout.layout')
@section('title')
<title>Update Staffs</title>

@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.layout.content-header', ['name' => 'Staff', 'key' => 'Update'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary shadow">
                        <div class="card-header">
                            <h3 class="card-title">Create Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{url("admin/staffs/postUpdate/{$p->id}")}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">ID</label>
                                    <input type="text" class="form-control" id="id" name="id" value="{{$p->id}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Name</label>
                                    <input type="text" class="form-control" id="txtname" name="name" value="{{$p->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-email">Email</label>
                                    <input type="text" class="form-control" id="txtemail" name="email" value="{{$p->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Role: </label>
                                    <select name="role" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btnprimary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-fileinput.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection