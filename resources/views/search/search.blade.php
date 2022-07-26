@extends('layouts.master')


@section('title')
<title>Category</title>
@endsection

@section('category-1-sidebar-css')
<link rel="stylesheet" href="{{asset('css/allPage.css')}}">
<link rel="stylesheet" href="{{asset('css/sidebar-category.css')}}">
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<style>
    .slider-range{
        
    }

    .ui-widget-header{
        background: #6C3EB8;
    }
</style>

@endsection

@section('content')
{{-- <div class="container-fluid mb-5"> --}}
    <div class="row border-top px-xl-5">
        @include('search.components.sidebar-search')
        <div class="col-lg-9">
            @include('components.header')

            {{-- ==============================LIST================================== --}}
            <div class="row px-xl-5 pb-3">

                @foreach ($products as $product)
                <a href="{{route('product-details', ['id' => $product ->id])}}">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" style="height: 223px"
                                    src="{{asset('storage/images/products/'.$product->image_avatar)}}" alt="">
                                <div class="text-center">
                                    <h4 class="text-truncate mb-3 list-top-title">{{$product->name}}</h4>
                                    <h6 class="text-truncate mb-3 list-top-brand">{{$product->category->name}}</h6>
                                    <h6 class="text-truncate mb-3 list-top-brand">{{$product->brand->name}}</h6>
                                    <h5 class="text-truncate mb-3 list-top-price">{{$product->price}}$</h5>
                                    {{-- <h6 class="text-truncate mb-3"><i class='bx bx-plus-circle'></i>Add to cart
                                    </h6>
                                    --}}
                                    <h4><a href="" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add"><i
                                                class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</a>
                                                <button style="margin-left: 15px" title="{{$product->id}}" id="{{$product->id}}" class="addToWishlist text-truncate mb-3 btn btn-sm text-light p-0 list-top-add ">
                                        <i class="fas fa-heart  mr-1"></i>Wishlist </button>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>

            {{$products->links()}}
            {{-- ==============================LIST================================== --}}

            {{-- ==============================SEE MORE=============================== --}}
            {{-- <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link  " style="padding: 0 25px">See More
                    </div>
                </div>
            </nav> --}}
            {{-- ==============================SEE MORE=============================== --}}

        </div>

    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    {{-- @endsection --}}
    {{--
</div> --}}
{{-- @endsection

@section('script-sidebar-category')
<script src="{{asset('js/price-range.js')}}"></script>

@endsection --}}
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
                // method: "POST",
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