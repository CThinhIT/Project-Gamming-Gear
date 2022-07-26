<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashBoard') }}" class="brand-link">
        <img src="{{ asset('assets/images/img/sidebar/logo1.png') }}" alt="Product Demo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Gaming Gear</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="{{ asset('assets/images/img/sidebar/user.jpg') }}" class="img-circle elevation-2" alt="User Image">

            </div>
            <div class="info">
                <a href="{{url('logout')}}" class="d-block">{{ Session::get('admin_name') }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-is-opening menu-open ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.index') }}" class="nav-link">
                                <p>View Products</p>
                            </a>
                        </li>
                        @if(Session::get('admin_role')==1)
                        <li class="nav-item">
                            <a href="{{route('product.create')}}" class="nav-link">
                                <p>Create a Product</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>


                <li class="nav-item menu-is-opening menu-open ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Brands
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('brand.index') }}" class="nav-link">
                                <p>View Brands</p>
                            </a>
                        </li>
                        @if(Session::get('admin_role')==1)
                        <li class="nav-item">
                            <a href="{{route('brand.create')}}" class="nav-link">
                                <p>Create a Brand</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>

                <li class="nav-item menu-is-opening menu-open ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p> Staffs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/staffs')}}" class="nav-link">
                                <p>View Staffs</p>
                            </a>
                        </li>
                        @if(Session::get('admin_role')==1)
                        <li class="nav-item">
                            <a href="{{url('admin/staffs/createStaff')}}" class="nav-link">
                                <p>Create a Staffs</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>


                <li class="nav-item menu-is-opening menu-open ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p> Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/order/') }}" class="nav-link">
                                <p>View List Order</p>
                            </a>
                        </li>
                                            </ul>
                </li>

                <li class="nav-item menu-is-opening menu-open ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>Comment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('adminComment')}}" class="nav-link">
                                <p>View List Comment</p>
                            </a>

                        </li>

                    </ul>
                </li>
                <li class="nav-item menu-is-opening menu-open ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>Users List</p>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show_user')}}" class="nav-link">
                                <p>View List Users</p>
                            </a>

                        </li>

                    </ul>
                </li>
                
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>