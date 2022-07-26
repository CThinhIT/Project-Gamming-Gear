@extends('admin.layout.layout')
@section('title')
<title>Order</title>

@endsection
@section('content')
<style>
    .mWitdh {
        min-width: 100px;
    }
</style>
<section class="content">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layout.content-header', ['name' => 'Order', 'key' => 'Admin'])
        <!-- /.content-header -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive-md">
                        <table class="table table-bordered table-hover" id="order-item">
                            <thead>
                                <tr>
                                    <th class="mWitdh">Order Id</th>
                                    <th class="mWitdh">Created Date</th>
                                    <th class="mWitdh">Recipient Name</th>
                                    <th class="mWitdh">Recipient Email</th>
                                    <th class="mWitdh">Recipient Mobile</th>
                                    <th class="mWitdh">Payment Method</th>
                                    <th class="mWitdh">Recipient Address</th>
                                    <th class="mWitdh">Total Amount</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $o)
                                <tr>
                                    <td>{{$o->id}}</td>
                                    <td>{{$o->created_at}}</td>
                                    <td>{{$o->name_user}}</td>
                                    <td>{{$o->email_user}}</td>
                                    <td>{{$o->phone_user}}</td>
                                    <td>@if($o->payment_method==0)
                                        COD
                                        @elseif($o->payment_method==1)
                                        Banking
                                        @endif
                                    </td>
                                    <td>{{$o->address}}</td>
                                    <td>{{$o->total}}</td>
                                    
                                    <td class="text-right">
                                        <table>
                                            <tr>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{ url('admin/order/update/' . $o->id) }}">
                                                        <i class="fas fa-pencil-alt"></i> Edit
                                                    </a>

                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="{{url("admin/order/delete/{$o->id}")}}" class="btn btn-danger action_delete" onclick="javascript:return confirm('Are you sure delete')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>
@endsection

@section('script-section')
<script>
    $(function() {
        $('#order-item').DataTable({
            "scrollX": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "lengthMenu": [
                [5, 10, 25, 50, 100, 500, 1000],
                [5, 10, 25, 50, 100, 500, 1000]
            ],
        });
    });
</script>
@endsection