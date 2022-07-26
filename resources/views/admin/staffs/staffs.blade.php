@extends('admin.layout.layout')
@section('title')
<title>Manage Admin</title>

@endsection
@section('content')
<!-- Main content -->
<section class="content">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layout.content-header', ['name' => 'Manage', 'key' => 'Admin'])
        <!-- /.content-header -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    @if(Session::get('admin_role')==1)
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($staffs as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>
                                        @if($p->role==1)
                                        Admin
                                        @elseif($p->role==2)
                                        Staff
                                        @endif
                                    </td>
                                    @if(Session::get('admin_role')==1)
                                    <td>
                                        <a href="{{url("admin/staffs/update/{$p->id}")}}" class="btn btn-primary">Update</a>

                                        <a href="{{url("admin/staffs/delete/{$p->id}")}}" class="btn btn-danger action_delete" onclick="javascript:return confirm('Are you sure delete')">Delete</a>
                                    </td>
                                    @endif
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
        $('#product').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection