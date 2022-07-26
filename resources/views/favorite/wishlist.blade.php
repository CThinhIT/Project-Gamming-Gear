@extends('layouts.master')


@section('title')
<title>Favorite</title>
@endsection

@section('category-1-sidebar-css')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<link rel="stylesheet" href="{{asset('css/allPages.css')}}">
<link rel="stylesheet" href="{{asset('css/wishlist/wishlist.css')}} ">
<link rel="stylesheet" href="{{asset('js/addToWishlist.js')}}">
@endsection

@section('content')
<div class="container">@include('components.header')</div>
<div class="container">
    @if(Session::get('customer'))
    <h2 style="text-align: center; font-weight: bold">Wishlist</h2>
    <br>
    <p style="color: white; text-align: center;" class="link_home">
              <a href="{{route('home')}}" class="link_home link_homeHov">Home  </a><i class="fas fa-angle-right"></i>  Wishlist
            </p>
    <br>
    <div class="my-5 cartWish">
        <div class="my-5 cartWish">
            <div class="cart-body ">
                <table class="table bodyWish">
                        @if($wishlist->count() > 0)
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($wishlist as $wish)
                        <!-- <table class="table"> -->
                        <tr>
                            <td>
                                <a href="{{route('product-details', ['id' => $wish->product->id])}}">
                                    <img src="{{asset('storage/images/products/'.$wish->product->image_avatar)}}" alt="" style="width: auto; height:80px;">
                                </a>
                            </td>
                            <td>{{ $wish->product->name }}</td>
                            <td>{{ $wish->product->price }} $</td>
                            <td><a href="{{route('deleteWishList', ['id'=> $wish->id])}}" class="btn btn-danger action_delete" onclick="javascript:return confirm('Are you sure delete')"><i class="fa fa-trash"></i> Remove</a></td>
                        </tr>
                        @endforeach
                        @else
                        <h4 style="text-align: center; padding-top: 40px; margin-bottom: 175px; background-color: #935ee8; border-radius: 10px;">There are no products in your wishlist</h4>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{$wishlist->links()}}
            </div>

        </div>
    </div>
    @else
    <h4 style="text-align: center; padding-top: 40px;" class="cartWish">Please login to use this feature!!!</h4>
    <a href="{{route('login')}}">Click here to login</a>
    <div style="margin-bottom: 500px;"></div>
    @endif

</div>
<div>
    <section>
        <div class="container">

        </div>
    </section>
    @endsection

    @section('script-sidebar-category')
    <script src="{{asset('js/price-range.js')}}"></script>

    @endsection
</div>