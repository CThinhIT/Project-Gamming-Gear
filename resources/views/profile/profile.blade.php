<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <link rel="icon" href="{{asset('assets/images/img/sidebar/logo1.png')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/profile/profile.css')}}" />
  <link rel="stylesheet" href="{{asset('css/allPage.css')}}" />
  <style>
    body {
      font-family: "Poppins", sans-serif !important;
    }
  </style>
</head>

<body>
  <div class="bg-image text-while rounded">
    <section>
      <div class="container py-5 h-100">
        <div class="about-h1" style="text-align:center; margin:3rem;">
          <h1 style="color: white; font-weight: bold">PROFILE</h1>
          <p style="color: white; ">
            <a href="{{route('home')}}" class="link_home">Home </a> >> Profile
          </p>
        </div>
        <div class="row d-flex h-100" style="margin-top: 1rem">
          <div class="col-4">
            <div class="card" style="border-radius: 15px; background-color: rgb(48, 36, 49)" height="50">
              <div class="card-body p-3 h-50">
                <div class="d-flex text-black">
                  <div class="image">
                    <img src="{{asset('profiles/image/'.$account->image)}}" alt="{{$account->image}}">
                  </div>
                  <h2 style="margin-left: 1.5rem; margin-top: 0.8rem;color:white">
                    {{$account->name}}
                  </h2>
                </div>
              </div>
    </section>
    <div id="btn">
      <a href="{{ route('profile') }}" class="btn_link_active btn_link">Profile</a>
    </div>
    <div id="btn_1">
      <a href="{{ route('historyOrder') }}" class="btn_link_active1 btn_link">History Order</a>
    </div>
    <div id="btn_2">
      <a href="{{ route('editPassword') }}" class="btn_link_active1 btn_link">Change Password</a>
    </div>
  </div>


  <div id="btn">
    <a href="{{route('profile')}}" class="btn_link_active btn_link">Profile</a>
  </div>
  <div id="btn_1">
    <a href="{{route('historyOrder')}}" class="btn_link_active1 btn_link">History Order</a>
  </div>
  </div>
  <div class="container-fluid" style="border-top: 3px solid #8d62d2">
    <br /><br />
    <div class="container-fluid col-8">
      <div class="row">
        <table class="table">
          <tr height="100">
            <td id="td">Fullname</td>
            <th id="th">{{$account->name}}</th>
            <th id="th">
              <a href="{{route('edit_profile')}}"><i class="fa-regular fa-pen-to-square"></i></a>
            </th>
          </tr>
          <tr height="100">
            <td id="td">Email</td>
            <th id="th">{{$account->email}}</th>
            <th id="th">
              <a href="{{route('edit_profile')}}"><i class="fa-regular fa-pen-to-square"></i></a>
            </th>
          </tr>
          <tr height="100">
            <td id="td">Address</td>
            <th id="th">{{$account->address}}</th>
            <th id="th">
              <a href="{{route('edit_profile')}}"><i class="fa-regular fa-pen-to-square"></i></a>
            </th>
          </tr>
          <tr height="100">
            <td id="td">Phone Number</td>
            <th id="th">{{$account->phone}}</th>
            <th id="th">
              <a href="{{route('edit_profile')}}"><i class="fa-regular fa-pen-to-square"></i></a>
            </th>
          </tr>
        </table>
      </div>
    </div>
    <br />
  </div>
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