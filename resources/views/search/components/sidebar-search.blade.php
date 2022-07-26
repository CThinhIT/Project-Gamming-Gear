<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon"  href="{{asset('assets/images/img/sidebar/logo1.png')}}">
    @yield('title')
    <!-- Font Awesome -->



    <link href="{{asset('css/allPage.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


    {{-- <link href="{{asset('css/sidebar.css')}}" rel="stylesheet"> --}}
    @yield('home-sidebar-css')
    @yield('category-1-sidebar-css')
    @yield('product-details')
    @yield('checkout-css')


    {{-- Link icon box --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!-- Favicon -->
    {{-- <link href="img/favicon.ico" rel="icon"> --}}
    {{-- <link rel="icon" type="image/ico" href="images/favicon(1).ico"/> --}}


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    {{-- @section('sidebar')
    This is the master sidebar.
    @show --}}

    {{-- @include('components.header') --}}


    @yield('content')

    @include('components.footer')



    {{-- JavaScript Libraries --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    @yield('script-sidebar-category')
    @yield('script-product-details')

    <data>
</body>

</html>