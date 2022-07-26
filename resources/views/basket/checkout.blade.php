<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
  <link rel="stylesheet" href="{{asset('css/checkout/checkout.css')}}">
  <link rel="stylesheet" href="{{asset('css/allPage.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <style>
    a:hover {
      text-decoration: none;
      color: #453167;
    }
  </style>
</head>

<body>
  <div class="body" style="background-color: #333333; color: white">
    <br>
    <div class="container" style="padding-bottom: 30px;">
      <a href="{{ route('home') }}"><img src="{{asset('assets/logos/logo_web/logo.png')}}" alt="" width="100px" height="70px"></a>
    </div>
    <div class="container">
      <h5><a href="{{ route('home') }}" style="color: #b89be7;">Home</a>
        <span><i class="fas fa-angle-right" style="color: #b89be7;"></i></span> <a href="{{ route('cart') }}"><span style="color: #b89be7;">Cart</span></a>
        <span><i class="fas fa-angle-right" style="color: #b89be7;"></i></span> <span style="color: #b89be7;">Biling Details</span>
      </h5>

      <hr style="border-bottom: 0.1px solid #6b6b6b">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
      @endif
      <div class="row">
        <div class="col-sm-6">
          <div class="size-form" style="padding: 0 60px;">
            <form class="form-group" id="myForm" method="post" action="">
              @csrf
              @php
              use Carbon\Carbon;
              // date_default_timezone_set('Asia/Saigon');
              $mytime = Carbon::now();
              @endphp
              <input type="hidden" name="total"id="total" value="{{ Session::get('total')}}" >
              
              <input type="hidden" name="date" id="date" value="{{ $mytime }}">
              <h3 style="padding: 30px 0;">Shipping Contact Info</h3>
              <label for="email2" class="mb-2 mr-sm-2">Name:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="name_user" placeholder="Enter your name" name="name_user">
              <label for="email2" class="mb-2 mr-sm-2">Email:</label>
              <input type="email" class="form-control mb-2 mr-sm-2" id="email_user" placeholder="Enter email" name="email_user">
              <label for="email2" class="mb-2 mr-sm-2">Phone Number:</label>
              <input type="tel" class="form-control mb-2 mr-sm-2" id="phone_user" placeholder="Enter phone number" name="phone_user">

              <h3 style="padding: 30px 0;">Shipping Address Info</h3>
              <label for="address" class="mb-2 mr-sm-2">Address:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="address" placeholder="Enter address" name="address">
              <div class="row">
                <div class="col-md-6"> <label for="province">City/Province</label>
                  <div class="">
                    <select class="form-control choose province" name="province" id="province">
                      <option value="">--Choose City---</option>
                      @foreach($province as $key => $pvin)
                      <option value="{{ $pvin->id }}">{{ $pvin->_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="w-100"></div>
                <div class="col-md-6"><label for="district">District</label>
                  <div class="form-group">
                    <select class="form-control choose district" name="district" id="district">

                      <option value="">--Choose District---</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6"><label for="ward">Ward</label>
                  <div class="form-group">
                    <select class="form-control ward" name="ward" id="ward">
                      <option value="">--Choose Ward---</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12"><label for="payment">Payment method</label>
                  <div class="form-group ">
                    <select class="form-control payment_method" name="payment_method" id="payment_method">
                      <option value="">--Choose Payment Method---</option>
                      <option value="0">Cash On Delivery</option>
                      <option value="1">Online</option>
                    </select>


                  </div>
                </div>

                
              </div><input type="submit" name="send" class="btn btn-info" value="Place an order" />

            </form>

          </div>
        </div>
        <div class="col-sm-6 form-right">
          @if(Session::get('cart'))
          <?php $subTotal = 0 ?>
          @foreach(Session::get('cart') as $id => $c)

          <?php $subTotal += $c['price'] * $c['quantity'];
          ?>
          {{Session::put('subTotal',$subTotal)}}
          <div class="row" style="padding: 5px 0;">
          
            <div class="col-sm-2 element">
              <img src="{{asset('storage/images/products/'.$c['image'])}}" alt="" width="70" height="70" style="border:1px solid white;border-radius:10px">
            </div>
            <div class="col-sm-5 element"><span>{{$c['name']}}</span></div>
            <div class="col-sm-2 element"><span>x {{$c['quantity']}}</span></div>
            <div class="col-sm-3 element price">{{$c['price']}}</div>
            
          </div>
          @endforeach
          <hr style="border-bottom: 0.1px solid #6b6b6b">
          <div class="row">
            <div class="col-sm-6 text-total">
              <p>Provisional</p>
            </div>
            <div class="col-sm-6 price">
              <p>${{$subTotal}}</p>
            </div>
            <div class="col-sm-6 text-total">
              <p>Transport fee</p>
            </div>
            <div class="col-sm-6 price">
              <p>$10</p>
            </div>
          </div>

          <hr style="border-bottom: 0.1px solid #6b6b6b">
          <div class="row">
            <div class="col-sm-6 text-total">
              <p style="font-size:25px ;">Total</p>
            </div>
            <div class="col-sm-6 price">
              <p style="font-size: 30px;">${{ @Session::get('subTotal')}}</p>
            </div>
          </div>
          @endif
        </div>
      </div>

    </div>

  </div>
  <!-- Footer Start -->
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
  <!-- Footer End -->
  <script type="text/javascript">
    $.noConflict();
    jQuery(document).ready(function($) {
      $('.choose').on('change', function() {
        var action = $(this).attr('id');
        var matp = $(this).val();
        var _token = $('input[name="_token"]').val();
        var result = '';

        if (action == 'province') {
          result = 'district';
        } else {
          result = 'ward';
        }
        $.ajax({
          url: '{{url("/select-delivery")}}',
          method: 'GET',
          data: {
            action: action,
            matp: matp,
            _token: _token
          },
          success: function(data) {
            $('#' + result).html(data);
          }
        });
      });
      $('#myForm').submit(function(e) {
        var method = $('.payment_method').val();

        if (method == '0') {
          var url = '{{url("sendemail/send")}}';
          $("#myForm").attr("action", url);
        }

        if (method == '1') {
          var url = '{{url("/momo_payment")}}';
          $("#myForm").attr("action", url);
        }
      })
    });
  </script>
</body>

</html>