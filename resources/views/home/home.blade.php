@extends('layouts.master')


@section('title')
<title>Home</title>
@endsection

@section('content')

@section('home-sidebar-css')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<link rel="stylesheet" href="{{asset('css/wishlist/homeWishList.css')}}">
<link rel="stylesheet" href="{{asset('js/wishlist.js')}}">
<link rel="stylesheet" href="{{asset('js/addToWishlist.js')}}">
<link rel="stylesheet" href="{{asset('css/allPage.css')}}">
@endsection



<!-- Navbar Start -->
{{-- <div class="container-fluid mb-5"> --}}
<div class="row border-top px-xl-5">

    {{-- ==================SIDEBAR=========================== --}}
    @include('components.sidebar')
    {{-- ==================SIDEBAR=========================== --}}

    {{-- ====================================HEADER============================================================ --}}
    <div class="col-lg-9">
        @include('components.header')
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        {{--
            ====================================HEADER============================================================--}}

        {{--
            ===================================CAROUSEL===========================================================--}}
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                {{-- <li data-target="#header-carousel" data-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 410px;">
                    <img class="img-fluid" src="{{asset('assets/images/img/carosel1.jpeg')}}" alt="Image">
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="{{asset('assets/images/img/carosel2.jpeg')}}" alt="Image">
                </div>
            </div>
        </div>
        {{--
            ===================================CAROUSEL=============================================================--}}

        {{--===================================Menu-home(9476)======================================================
            --}}

        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <span class="nav-out-products">Out Products</span>
                    {{-- <a href="index.html" class="nav-item nav-link ">Out Products</a> --}}
                    <a href="{{URL::current()}}" class="nav-item nav-link  {{Request::get('sort') == '' ? 'active' : ''}} ">Newest</a>
                    <a href="{{URL::current()."?sort=popullar"}}" class="nav-item nav-link  {{Request::get('sort') == 'popullar' ? 'active' : ''}} ">Popular</a>
                    <a href="{{URL::current()."?sort=cheapest"}}" class="nav-item nav-link  {{Request::get('sort') == 'cheapest' ? 'active' : ''}} ">Cheap</a>
                </div>
            </div>

        </nav>

        {{--===========================================Menu-home===================================================--}}



        {{--==========================================List-Top======================================================--}}
        <div class="row px-xl-5 pb-3">
            @foreach ($products as $product)
            <a href="{{route('product-details', ['id' => $product ->id])}}">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" style="height: 223px" src="{{asset('storage/images/products/'.$product->image_avatar)}}" alt="">
                            <div class="text-center">
                                <h4 class="text-truncate mb-3 list-top-title">{{$product->name}}</h4>
                                <h6 class="text-truncate mb-3 list-top-brand">{{$product->category->name}}</h6>
                                <h6 class="text-truncate mb-3 list-top-brand">{{$product->brand->name}}</h6>
                                <h5 class="text-truncate mb-3 list-top-price">{{$product->price}}$</h5>
                                <form action="{{url('addToCart/'.$product->id)}}" method="post">
                                    {{ csrf_field()}}
                                    <h4>
                                        <input type="hidden" name="productID_hidden" value="{{$product->id}}">
                                        <a title="{{$product->id}}" id="{{$product->id}}" class="addToWishlist text-truncate mb-3 btn btn-sm text-light p-0 list-top-add ">
                                            <i class="fas fa-heart  mr-1"></i>Wishlist </a>


                                        <button type="submit" style="margin-left: 15px" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add">
                                            <i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</button>

                                    </h4>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<!-- Navbar End -->


{{-- ==========================================Owl-Carousel========================================================
    --}}
<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="vendor-item border p-4">
                    <img src="{{asset('assets/images/brand-logo/asus.png')}}" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="{{asset('assets/images/brand-logo/razer.png')}}" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="{{asset('assets/images/brand-logo/sony.png')}}" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="{{asset('assets/images/brand-logo/logitech.png')}}" alt="">
                </div>
                <div class="vendor-item border p-4">
                    <img src="{{asset('assets/images/brand-logo/msi.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
{{-- ==========================================Owl-Carousel========================================================
    --}}





<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
{{-- @endsection --}}

@endsection
@section('script-product-details')
<script>
    $(document).ready(function() {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.addToWishlist').click(function(e) {
            e.preventDefault();

            var pro_id = $(this).attr('title');

            $.ajax({
                url: "{{url('/add-to-wishlist')}}",
                data: {
                    'pro_id': pro_id
                },
                success: function(response) {
                    alert(response.status);
                }
            })
        });

    })
</script>
@endsection