<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('css/profile/edit_profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile/profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/edit_profile.js') }}" />
    <link rel="stylesheet" href="{{ asset('css/allPage.css') }}" />
</head>
<style>
    body {
        font-family: "Poppins", sans-serif !important;
    }
</style>

<body>
    <div class="bg-image text-while rounded">
        <section>
            <div class="container py-5 h-100">
                <div class="about-h1" style="text-align:center; margin:3rem;">
                    <h1 style="color: white; font-weight: bold">EDIT PROFILE</h1>
                    <p style="color: white; ">
                        <a href="{{ route('home') }}" class="link_home">Home </a> >> Edit Profile
                    </p>
                </div>
            </div>
        </section>
    </div>
    <form action="{{route('update_profile', $customers->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>
            <input type="hidden" class="input" value="{{$customers->id}}" name="id" >
        </label>
        <label>
            <p class="label-txt">FULL NAME</p>
            <br>
            <input type="text" class="input" value="{{$customers->name}}" name="name">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">EMAIL</p>
            <br>
            <input type="text" class="input" value="{{$customers->email}}" name="email" readonly>
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">PHONE NUMBER</p>
            <br>
            <input type="text" class="input" value="{{$customers->phone}}" name="phone">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">ADDRESS</p>
            <br>
            <input type="text" class="input" value="{{$customers->address}}" name="address">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <button type="submit">Update</button>
    </form>
    <br>
    <!-- FOOTER -->
    <div class="footer">
      <!-- Footer -->
      <footer class="bg-dark text-white">
          <!-- Grid container -->
          <div class="row">
              <div class="col-2">
                  <a href="{{url('home')}}">
                  <div class="container text-start">
                      <img src="{{asset('assets/logos/logo_web/logo.png')}}" alt="">
                  </div>
                  </a> 
              </div>
              <div class="col-8">
                  <div class="container p-4 text-center" style="padding-top: 10px">
                      <!-- Section: Social media -->
                      <section class="mb-4">
                          <!-- Facebook -->
                          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
    
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
</body>

</html>
