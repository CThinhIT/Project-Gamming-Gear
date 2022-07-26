@extends('admin.layout.layout')
@section('title')
<title>Update Order</title>

@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-success">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{url("admin/order/postUpdate/{$o->id}")}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">ID</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{$o->id}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Create At</label>
                                <input type="datetime" class="form-control" id="txtname" name="name" value="{{$o->created_at}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txt-name">Recipient Name</label>
                                <input type="text" class="form-control" id="txtname" name="name" value="{{$o->name_user}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Recipient Email</label>
                                <input type="email" class="form-control" id="txtname" name="name" value="{{$o->email_user}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Recipient Mobile</label>
                                <input type="text" class="form-control" id="txtname" name="name" value="{{$o->phone_user}}">
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Payment Method</label>
                                <input type="text" class="form-control" id="txtname" name="name" value="@if($o->payment_method==0)COD
                                        @elseif($o->payment_method==1)Banking
                                        @endif">
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Recipient Address</label>
                                <input type="text" class="form-control" id="txtname" name="name" value="{{$o->address}}">
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Total Amount</label>
                                <input type="text" class="form-control" id="txtname" name="name" value="{{$o->total}}">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btnprimary">Submit</button>
                            </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<style>
    .offset-md-3 {
        margin-top: 16px;
    }
</style>
@endsection
@section('script-section')
<script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-fileinput.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection