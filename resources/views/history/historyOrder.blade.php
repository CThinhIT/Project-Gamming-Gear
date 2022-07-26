<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>History-Order</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="icon" href="{{asset('assets/images/img/sidebar/logo1.png')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Latest compiled JavaScript -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/profile/profile.css')}}" />
  <link rel="stylesheet" href="{{asset('css/history/historyOrder.css')}}" />
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
        <div class="about-h1" style="text-align: center; margin: 3rem">
          <h1 style="color: white; font-weight: bold">HISTORY ORDER</h1>
          <p style="color: white">
          <a href="{{route('home')}}" class="link_home">Home </a> >> History Order
          </p>
        </div>
        <div class="row d-flex h-100" style="margin-top: 1rem;">
          <div class="col-4">
            <div class="card" style="border-radius: 15px; background-color: rgb(48, 36, 49); width: 400px; margin-left: -90px">
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="btn">
      <a href="{{route('profile')}}" style="padding:0 -3px 0px 50px" class=" btn_link">Profile</a>
    </div>
    <div id="btn_1">
      <a href="{{route('historyOrder')}}" class="btn_link_active btn_link">History Order</a>
    </div>
  </div>
  <div class="container-fluid" style="border-top: 3px solid #8d62d2">
    <br /><br />


    <div class="container-fluid col-8">
      <div class="cartWish">
        <table class="table table-dark">
          <tr>
            <th>#</th>
            <th>Price</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <tr>
            <td></td>
            <td>$1000</td>
            <td>2022-12-21</td>
            <td>In delivery</td>
            <td>
              <button class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Detail</button>
              <a href="#" class="btn btn-danger" height="20" width="10">Cancle</a>
            </td>
          </tr>
        </table>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title"></h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>

              <div class="modal-body">
                <!--THÔNG TIN ORDER-->
                <h4>Order information</h4>
                <table class="table table-hover" style="color: black;">
                  <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Total amount</th>
                    <th>Address</th>
                    <th>Payment term</th>
                    <th>Delivered_date</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Cheap</td>
                    <td>2022</td>
                    <td>1000$</td>
                    <td>248</td>
                    <td>COD</td>
                    <td>2023</td>
                  </tr>
                </table>
                <hr>
                <!--THÔNG TIN SẢN PHẨM ĐÃ ORDER-->
                <h4>Ordered product information</h4>
                <div class="row">
                  <div class="col-md-6">Product</div>
                  <div class="col-md-2">Price</div>
                  <div class="col-md-2">Quantity</div>
                  <div class="col-md-2">Total</div>

                  <div class="col-md-2"><img src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadMain/xbox-black.png')}}" alt="" width="75" height="75"></div>
                  <div class="col-md-4" class="item-order" style="font-weight: lighter;">GamePad</div>
                  <div class="col-md-2" class="item-order" style="font-weight: lighter;">1000$</div>
                  <div class="col-md-2" class="item-order" style="font-weight: lighter;">1</div>
                  <div class="col-md-2" class="item-order" style="font-weight: lighter;">1000$</div>
                </div>
                <hr>
                <div class="total" style="text-align: right;padding:5px 50px;">
                    <h5>Total: $1000</h5>
                </div>
              </div>
              <hr>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
    </div>
  </div>
  <br />

  <!-- Modal Detail -->

  <!-- FOOTER -->
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