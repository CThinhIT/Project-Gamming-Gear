@extends('layouts.master')


@section('title')
<title>Product-details</title>
@endsection

@section('product-details')
<link rel="stylesheet" href="{{asset('css/product_details/sidebar-product.css')}}">
<link rel="stylesheet" href="{{asset('css/product_details/product-details.css')}}">
<link rel="stylesheet" href="{{asset('css/comment/comment.css')}}">
@endsection


@section('content')
@foreach ($products as $product)
{{-- <div class="container-fluid mb-5"> --}}
<div class="row border-top px-xl-5">
    {{-- @include('components.sidebar-category') --}}
    @include('product.components.sidebar-product')

    <div class="col-lg-9">
        @include('components.header')


        {{-- ==============================MENU================================== --}}
        <div class="row product-details">
            <div class="col-lg-3 product-details-child">
                <div class="info-product">
                    <div class="info-product-child">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img style="padding-top: 40px" class="img-fluid w-100" src="{{asset('storage/images/products/'.$product->image_avatar)}}" alt="">
                        </div>
                        <div class="totalInner">
                            <div class="totalRating">

                                <span class="totalRating-num">{{number_format($rating_value)}}.0</span>

                                @php
                                $rateum = number_format($rating_value)
                                @endphp
                                <div class="totalRating-stars">
                                    @for ($i = 0; $i < $rateum; $i++) <i class="icon-star totalActive"></i>
                                        @endfor
                                        <div class="totalRating-users" style="color: black;"><i class="icon-user"><span> {{$rating_count->count()}}</span></i> Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 product-details-child1">
                <img color="{{$product->image_avatar}}" class="img-fluid w-100 gamepad-img show" src="{{asset('storage/images/products/'.$product->image_avatar)}}" alt="">
                {{-- @foreach ($image_details as $image) --}}
                <img color="{{$product->image_details_1}}" class="img-fluid w-100 gamepad-img " src="{{asset('storage/images/products/'.$product->image_details_1)}}" alt="">

                <img color="{{$product->image_details_2}}" class="img-fluid w-100 gamepad-img " src="{{asset('storage/images/products/'.$product->image_details_2)}}" alt="">

                <img color="{{$product->image_details_3}}" class="img-fluid w-100 gamepad-img " src="{{asset('storage/images/products/'.$product->image_details_3)}}" alt="">
                {{-- @endforeach --}}

                <div class="product-des">
                    <h4 style="font-weight: bold; text-transform: uppercase">{{$product->name}}</h4>
                    <h2 style="text-transform: uppercase">
                        <a style="color: #8d62d2" href="{{route('category-select-list1', ['slug' => $product->brand->slug, 'id' => $product->brand->id])}}">{{$product->brand->name}}</a>
                        <span>{{$product->brand->description}}</span>
                    </h2>

                    <div class="text-description">
                        <h4 style="font-weight: bold">Description</h4>
                        <form action="{{url('addToCart/'.$product->id)}}" method="post">
                            {{ csrf_field()}}
                            <div class="button-order">
                                <button type="submit" style="margin: 10px" class="text-truncate mb-3 btn btn-sm text-light p-0 list-top-add">
                                    <i class="fas fa-shopping-cart  mr-1"></i></i>Add to cart</button>

                            </div>

                        </form>
                    </div>

                    <h6 style="width: 500px">{!! nl2br(e($product->description)) !!}</h6>


                </div>


            </div>
            <div class="col-lg-1">
                <div class="rotate" style="font-size: 150px">
                    {{$product->brand->name}}
                </div>
            </div>

            <div class="col-lg-3 select-color">
                <div class="select-color1 color active" color="{{$product->image_avatar}}" primary="{{$product->image_avatar}}" style="cursor: pointer">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                        <img class="img-fluid w-100" src="{{asset('storage/images/products/'.$product->image_avatar)}}" alt="">
                    </div>
                </div>

                {{-- @foreach ($image_details as $image) --}}
                <div class="select-color1 color " color="{{$product->image_details_1}}" primary="{{$product->image_details_1}}" style="cursor: pointer">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                        <img class="img-fluid w-100" src="{{asset('storage/images/products/'.$product->image_details_1)}}" alt="">
                    </div>
                </div>

                <div class="select-color1 color " color="{{$product->image_details_2}}" primary="{{$product->image_details_2}}" style="cursor: pointer">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                        <img class="img-fluid w-100" src="{{asset('storage/images/products/'.$product->image_details_2)}}" alt="">
                    </div>
                </div>

                <div class="select-color1 color " color="{{$product->image_details_3}}" primary="{{$product->image_details_3}}" style="cursor: pointer">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                        <img class="img-fluid w-100" src="{{asset('storage/images/products/'.$product->image_details_3)}}" alt="">
                    </div>
                </div>
                {{-- @endforeach --}}




            </div>
        </div>

        {{-- ==============================MENU================================== --}}

    </div>
</div>
@endforeach

<!-- <div class="add-comment-section"> -->
@php
use Carbon\Carbon;
$mytime = Carbon::now();
@endphp

<form action="{{route('addcomment', ['id'=>$pid->id])}}" method="post" enctype="multipart/form-data">
    @csrf

    @if(session()->get('customer') == null)
    <br>
    <h6 class="commentedTitle">* Please login to post a comment</h6>
    @else
    <div class="d-flex flex-row align-items-center text-left comment-top p-2 commentBottom">
        <div class="p-2 px-4">
            <div class="containerRating">
                <div class="star-rating">
                    <input type="radio" value="5" name="rating" id="rate-5">
                    <label for="rate-5" class="rating fas fa-star"></label>
                    <input type="radio" value="4" name="rating" id="rate-4">
                    <label for="rate-4" class="rating fas fa-star"></label>
                    <input type="radio" value="3" name="rating" id="rate-3">
                    <label for="rate-3" class="rating fas fa-star"></label>
                    <input type="radio" value="2" name="rating" id="rate-2">
                    <label for="rate-2" class="rating fas fa-star"></label>
                    <input type="radio" value="1" name="rating" id="rate-1">
                    <label for="rate-1" class="rating fas fa-star"></label>
                    <form action="add-rating">
                        <span class="titleRating">
                            <header></header>
                        </span>
                    </form>
                </div>
            </div>
            <h5 class="mr-2 commented-user" style="color: yellow;">{{session()->get('customer')->name}} </h5>
            <input type="hidden" value="session()->get('customer')->email">
            <br>
            <textarea class=" form-control mr-3 textCmt" name="comment" id="comment" placeholder="Add comment" required></textarea>
            <button class="btn btn-primary" type="submit" style="margin-left: 500px; margin-bottom: 20px; margin-top: 10px;">Comment</button>
            @endif

            <div class="postComment">
                @foreach ($cmt as $c)
                <h5 class="mr-2 commented-user">{{ $c->name }}</h5>

                @for ($i = 0; $i < $c->rating; $i++)
                    <div style="float: left; margin: 2px;" class="Rating-stars">
                        <span><i class="icon-star" style="color: yellow;"></i></span>
                    </div>
                    @endfor
                    <br>
                    <div class="comment-text" style="text-align:left"><span>{{ $c->comment }}</span></div>
                    <br>
                    @endforeach
                    <br>
            </div>
        </div>
    </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    {{-- @endsection --}}
    {{--
</div> --}}
    @endsection

    @section('script-product-details')
    <script src="{{asset('js/select-color.js')}}"></script>

    @endsection