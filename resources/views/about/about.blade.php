@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{asset('css/about/about.css')}}">
  <link rel="stylesheet" href="{{asset('css/allPage.css')}}">
  <!-- <link rel="stylesheet" href="indexresponsive.css">
  <link rel="stylesheet" href="fonts/themify-icons-font/themify-icons/themify-icons.css"> -->
  <link rel="icon" type="image/x-icon"  href="{{asset('assets/images/img/sidebar/logo1.png')}}">



  <!--Font Header-->

  <!--Font Header end-->

  <!-- FONT HEDER AND CAROSEL -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">


  <!-- FONT HEDER AND CAROSEL -->

  <!--Font About-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https: //fonts.googleapis.com/css2? family = Inter: wght @ 900 & family = Oswald: wght @ 700 & family = Yanone + Kaffeesatz: wght @ 600 & display = swap " rel=" stylesheet ">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&family=Oswald:wght@700&display=swap" rel="stylesheet">

  <link href="https: //fonts.googleapis.com/css2? family = Inter: wght @ 800 & display = swap " rel=" stylesheet ">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Oswald:wght@500&family=Outfit:wght@200&family=PT+Sans+Narrow:wght@700&family=Roboto+Mono&family=Saira+Condensed:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Libre+Baskerville:ital@1&family=Oswald:wght@500&family=Outfit:wght@200&family=PT+Sans+Narrow:wght@700&family=Roboto+Mono&family=Saira+Condensed:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Libre+Baskerville:ital@1&family=Oswald:wght@500&family=Outfit:wght@200&family=PT+Sans+Narrow:wght@700&family=Playfair+Display:wght@600&family=Roboto+Mono&family=Saira+Condensed:wght@600&display=swap" rel="stylesheet">
  <!--Font About end-->


  <style>


  </style>

</head>

<!-- About Start -->


<body class="about-background-a5" style="background-color: #1a0e22;">
  <div class="container">
    <div class="about-h1">
      <h1 style="text-align: center; color: white;">ABOUT US</h1>
      
        <p  style="text-align: center; color: white;"> <a href="{{route('home')}}">HOME </a> >> ABOUT</p>
      
      
    </div>
    <!-- <div class="about-letter-a3">
    <a class="title-about" href="../index.html">Beauty Services</a><span class="title-about1" style="font-size: 35px; position: relative;">ABOUT US</span>
  </div>  -->
    <br>
    <br>
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-4">
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/images/about/photo-dong6.jpg')}}" alt="Los Angeles">
              </div>
              <div class="carousel-item ">
                <img src="{{asset('assets/images/about/photo-dong-4.webp')}}" alt="Chicago">
              </div>
              <div class="carousel-item ">
                <img src="{{asset('assets/images/about/photo-dong3.avif')}}" alt="New York">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>

        <div class="col-sm-8">
          <table>
            <div style=" color: white;" class="about-content-a2">
              <h2>WE'RE THE BEST<br>GAMING <b style="color: goldenrod;">COMPANY</b></h2><br>
              <p>Gaming Gear with a young and dynamic team of companies has always kept up with the new trend of the world right from the beginning of its operation. This helps to realize the ideas and needs of customers in the most reasonable way.<br><br>

              Gaming Gear always tries to develop in terms of quality and service, managing goods with 100% genuine and binding origin with the most economical price.Sincere thanks to customers who have trusted and supported Gaming Gear during the past time and are always ready to wait for the return of customers. We are continuing day by day, hour by hour trying to develop to bring the best products to hand Game Gear<br><br>

                © Criteria of fun and friendliness.<br>
                © Reasonable price, prestige is first.<br>
                © Convenient for use and enthusiastic advice<br>

              </p>




            </div>
          </table>

        </div>

        <div class="container-fluid">

          <h2 class="about-letter-a1" style="color: white;">OUR TEAM</h2><br><br><br><br>



          <div class="row">
            <div class="col-sm-4">
            <h4 class="name-team">CEO</h4>
              <img class="about-me-1" src="{{asset('assets/images/about/thai.jpg')}}" alt="" width="170px" height="170px " style="border-radius:270px;">
              
              
            </div>
            <div class="col-sm-4">
            <h4 class="name-team">COO</h4>
              <img class="about-me-1" src="{{asset('assets/images/about/trong_.jpg')}}" alt="" width="170px" height="170px" style="border-radius:270px;">
            
              
            </div>
            <div class="col-sm-4">
            <h4 class="name-team">CMO</h4>
              <img class="about-me-1" src="{{asset('assets/images/about/thinh.jpg')}}" alt="" width="170px" height="170px" style="border-radius:270px;">
            
             
            </div>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6" >
                <h4 class="name-team">CHRO</h4>
                  <img class="about-me-2" src="{{asset('assets/images/about/dung_.jpg')}}" alt="" width="170px" height="170px" style="border-radius:270px;">
                 
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-6">
              <h4 class="name-team">COORDINATOR</h4>
                <img class="about-me-2" src="{{asset('assets/images/about/thuan_.jpg')}}" alt="" width="170px" height="170px" style="border-radius:270px;">
               
              </div>
              <div class="col-sm-6">

              </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--Footer End-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/bd4baa1c90.js" crossorigin="anonymous"></script>
  <script>
    function showFooter() {
      if (true) {
        alert("Thank you for subscribed!")
      }
    }
  </script>


</body>

</html>