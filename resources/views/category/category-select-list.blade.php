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
        @include('components.sidebar-category')
        <div class="col-lg-9">
            @include('components.header')

            {{-- ==============================MENU================================== --}}
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <span class="nav-out-products">Out Products</span>
                        {{-- <a href="index.html" class="nav-item nav-link ">Out Products</a> --}}
                        <a href="{{URL::current()}}" class="nav-item nav-link {{Request::get('sort') == '' ? 'active' : ''}} " style="padding: 0 25px">Newest
                            </a>
                        <a href="{{URL::current()." ?sort=popullar"}}" class="nav-item nav-link {{Request::get('sort') == 'popullar' ? 'active' : ''}}"
                            style="padding: 0 25px">Popular </a>
                        <a href="{{URL::current()." ?sort=cheapest"}}" class="nav-item nav-link {{Request::get('sort') == 'cheapest' ? 'active' : ''}}"
                            style="padding: 0 25px">Cheap</a>
                    </div>
                </div>
            </nav>
            {{-- ==============================MENU================================== --}}

            {{-- ==============================LIST================================== --}}
            <div class="row px-xl-5 pb-3">
                @foreach ($products as $product)
                <a href="{{route('product-details', ['id' => $product ->id])}}">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div
                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" style="height: 223px"
                                    src="{{asset('storage/images/products/'.$product->image_avatar)}}"
                                    alt="">
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
                                        <button style="margin-left: 15px"
                                            class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add">
                                            <i class="fas fa-heart  mr-1"></i></i>Wishlist</button>
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

            

        </div>

    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    {{-- @endsection --}}
    {{--
</div> --}}
@endsection

