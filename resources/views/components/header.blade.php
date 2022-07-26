{{-- <div > --}}
<style>
    .nav-profile:hover {
        background: none !important;
    }
</style>
<nav class="navbar navbar-expand-lg  navbar-light py-3 py-lg-0 px-0">
    <a href="" class="text-decoration-none d-block d-lg-none">
        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color: #333333;">
        <form action="{{route('search')}}">
            <div class="nav-formsearch" style="">
                <form action="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control nav-formsearch-control" placeholder="Search for products" style="color: aliceblue" name="key">
                        <div class="input-group-append">
                            <button style="position: absolute; height: 39px;" class="input-group-text bg-transparent text-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </form>

        {{-- 9476 --}}
        <div class="navbar-nav ml-auto py-0" style="padding-left: 188px">
            @if (session()->has('customer'))
            <a href="{{url('profile')}}"><span class="nav-item nav-link nav-profile" style="border: none; padding-left:10px; width: 250px;">{{Session::get('customer')->name}}</span></a>
            @else
            <a href="{{route('login')}}" class="nav-item nav-link" style="border: none; padding-left:10px; padding-right: 10px ">Login</a>
            @endif
            @if (session()->has('customer'))
            <a href="{{route('logout_cus')}}" class="nav-item nav-link" style="border: none; padding-left:10px; padding-right: 10px ">Logout</a>
            @else
            <a href="{{route('register.index')}}" class="nav-item nav-link " style="border: none; padding-left:10px; padding-right: 10px">Register</a>
            @endif
        </div>
        {{-- 9476 --}}

        <div class="navbar-nav ml-auto py-0">

            <a href="" class="btn ">
                {{-- <i class="fas fa-heart text-primary"></i> --}}
                <i class="fas fa-bell text-primary" style="position: relative"></i>
                <span class="badge"><sup style="font-size: 15px;color: #8d62d2;position: absolute; left: 5px; top: -10px">0</sup></span>
            </a>
            <a href="{{route('cart')}}" class="btn ">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge"><sup style="font-size: 15px; color: #8d62d2;">@if (Session::get('cart'))
                        {{ count(Session::get('cart')) }}
                        @else
                        0
                        @endif</sup></span>
            </a>
        </div>

    </div>
</nav>
{{-- </div> --}}