<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/basket/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/allPage.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/img/sidebar/logo1.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="body" style="background-color: #333333; color: white">
        <br>
        <div class="container" style="padding-bottom: 30px;">
            <a href="{{ route('home') }}"><img src="{{asset('assets/logos/logo_web/logo.png')}}" alt="" width="100px" height="70px"></a>
        </div>
        <div class="container">
            <h5><a href="{{ route('home') }}" style="color: #b89be7;">Home</a>
                <span><i class="fas fa-angle-right" style="color: #b89be7;"></i></span> <span style="color: #b89be7;">Cart</span>
                <span><i class="fas fa-angle-right"></i></span> Biling Details
            </h5>

            <hr style="border-bottom: 0.1px solid #6b6b6b">



        </div>


        <div class="container">
            <h2 style="text-align: center;">My Cart</h2>
            @if(Session::get('cart'))
            <?php $subTotal = 0 ?>
            <div class="item-cart">
                @foreach(Session::get('cart') as $id => $c)
                <?php $subTotal += $c['price'] * $c['quantity'] ?>
                <div class="row item">
                    <div class="col-2 element">
                        <a href="{{route('product-details', ['id' => $id])}}">
                            <img src="{{asset('storage/images/products/'.$c['image'])}}" alt="" width="100" height="100">
                        </a>
                    </div>
                    <div class="col-3 element"><span class="text-hight">{{$c['name']}}</span><br><span class="text-low">{{$c['name']}}</span></div>

                    <div class="col-3 element">
                        {{-- <button class="btn-add-remove "><i class="fas fa-plus-circle icon-add-remove" ></i></button> --}}
                        <span class="text-hight qty ">{{$c['quantity']}}</span>
                        {{-- <input type="text" style="border: none; background-color: #161616; width: 55px; color: white; font-size: 20px" class="qty qty-input" value="{{$c['quantity']}}"> --}}
                        {{-- <button class="btn-add-remove "><i class="fas fa-minus-circle icon-add-remove"></i></button> --}}
                    </div>
                    <div class="col-2 element">
                        <?php
                        $subTotal = 0;
                        $subTotal+=$c['price']*$c['quantity'];
                        ?>
                        <p class="text-hight">Pricing: $<span>{{$c['price']*$c['quantity']}}</span></p>
                        {{Session::put('total',$subTotal)}}

                    </div>
                    <div class="col-2 element">
                        <a class="btn" href="{{url('/detele-to-cart/'.$id)}}" style="color: red;" data-id="{{$id}}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="btn-context">
                <div class="row">
                    <div class="col-3">
                        <a href="{{ route ('home') }}" class=" back-to-home">
                            <i class="fa fa-reply"></i> Back to shopping
                        </a>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <div style="text-align: right; color: white; font-size: 30px;">Subtotal: <span style="font-size: 30px;">${{$subTotal}}</span></div>
                        <div class="">
                            <a href="{{url('checkout')}}" class="btn btn-dark back-to-home">
                                <h4>Proced to Checkout</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div style="text-align: center;">
                <h5>Sorry, your cart is is empty !!!</h5>
                <h6><a href="{{route('home')}}">Click here to keep shopping</a></h6>
            </div>
            @endif
        </div>

        <div class="footer">
            <!-- Footer -->
            <footer class="bg-dark text-white">
                <!-- Grid container -->
                <div class="row">
                    <div class="col-2">
                        <div class="container text-start">
                            <img src={{asset('assets/images/img/sidebar/logo_gamegear1.png')}} alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="container p-4 text-center" style="padding-top: 10px">
                            <!-- Section: Social media -->
                            <section class="mb-4">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" href="mailto:congthinh.0311@gmail.com" role="button"><i class="fab fa-google"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                                <!-- Github -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
                            </section>
                            <!-- Section: Social media -->

                            <!-- Section: Form -->

                            <!-- Section: Form -->

                            <!-- Section: Text -->
                            <section class="mb-4">
                                <p>Hotline: 210.820.03</p>
                                <p>Address: 590 CMT8, Ward 11, District 3, Ho Chi Minh City.</p>
                            </section>
                        </div>
                        <!-- Grid container -->

                        <!-- Copyright -->

                    </div>
                    <div class="col-2"></div>


                </div>
                <div class="text-center p-3" style="background-color: rgb(22 22 22)">
                    © 2022 Copyright: Developed by group 1, class T1.2108.A0
                </div>
                <!-- Copyright -->
            </footer>
        </div>

    </div>
</body>

{{-- <script>
    $(document).ready(function () {
        $('.btn-plus').click(function (e) { 
            e.preventDefault();

            var plus_value = $('.qty-input').val();
            var value = parseInt(plus_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value < 10){
                value++;
                $('.qty-input').val(value);
            }
            
        });


        $('.btn-minus').click(function (e) { 
            e.preventDefault();

            var minus_value = $('.qty-input').val();
            var value = parseInt(minus_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value > 1){
                value--;
                $('.qty-input').val(value);
            }
            
        });
    });
</script> --}}

</html>