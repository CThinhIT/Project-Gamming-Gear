<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{asset('css/contact/contactUs.css')}}" />
    <link rel="stylesheet" href="{{asset('css/contact/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/contact/footerContact.css')}}" />
    <link rel="icon" type="image/x-icon"  href="{{asset('assets/images/img/sidebar/logo1.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="bodyCont">
    <div class="video">
        <video autoplay loop muted id="myVideo">
            <source type="video/mp4" src="{{asset('assets/video/contact.mp4')}}" />
        </video>
        <div class="textBox">
            <h3 class="subPrimary">
                <p class="headingMain wow animate__zoomInUp">Contact Us</p>
                <p class="subVideo wow animate__zoomInUp">
                    We are here to listen to you
                </p>
                <div><a href="{{route('home')}}" class="sub wow animate__zoomInDown">Home</a>
                    <p class="sub wow animate__zoomInDown"> >> Contact us</p>
                </div>
            </h3>
        </div>
    </div>
    <br /><br />
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 style="color: white" class="wow bounceInDown" data-wow-delay="1s">
                    ADDRESS
                </h3>
                <h3 style="color: #8a38f5" class="borderContact wow bounceInDown" data-wow-delay="1s">
                    <p>INFORMATION</p>
                </h3>
                <div class="add-info">
                    <h6 class="wow bounceInLeft" data-wow-delay="2s">
                        590 CMT8 Street, Ward 11, District 3. Ho Chi Minh
                        city.
                    </h6>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15677.277406156589!2d106.65751952421206!3d10.786834677030395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2zRlBUIEFwdGVjaCBIQ00gLSBI4buHIFRo4buRbmcgxJDDoG8gVOG6oW8gTOG6rXAgVHLDrG5oIFZpw6puIFF14buRYyBU4bq_IChTaW5jZSAxOTk5KQ!5e0!3m2!1svi!2s!4v1635179994748!5m2!1svi!2s" width="400" height="400" style="border: 0" allowfullscreen="" loading="lazy" class="wow bounceInLeft" data-wow-delay="2s"></iframe>
            </div>


            <div class="col-sm-6">
                <h3 class="wow bounceInDown" data-wow-delay="1s" style="color: white">GET IN TOUCH</h3>
                <h3 class="borderContact1 wow bounceInDown" data-wow-delay="1s" style="color: #8a38f5; margin-bottom: 35px;">
                    <p>INFORM US</p>
                </h3>
                <div class="formContact">
                    <input type="text" name="name" class="question" id="nme" required autocomplete="off" />
                    <label for="nme" style="margin-bottom: 40px;" class="wow bounceInDown" data-wow-delay="2s" required><span>Your Name</span></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="question1" id="nme" required autocomplete="off" />
                            <label for="nme" class="wow bounceInRight" data-wow-delay="2.5s" required><span>Your Email</span></label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="question2" id="nme" required autocomplete="off" />
                            <label for="nme" class="wow bounceInRight" data-wow-delay="2.7s" required><span>Your Issue</span></label>
                        </div>
                    </div>
                    <div class=" yourFb">
                        <div class="commentContact">
                            <h4 class="wow bounceInRight" data-wow-delay="2.9s">Problem Detail</h4>
                            <textarea class="comment wow bounceInDown" required></textarea>
                        </div>
                        <div class="sendContact">
                            <button type="submit" id="send" class="btn btn-outline-info wow bounceInDown">
                                Submit Now
                            </button>
                        </div>
                    </div>
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
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright: Developed by group 1, class T1.2108.A0
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Footer End -->
    <script>
        $(document).ready(function () {
        $("#send").click(function (e) {
          e.preventDefault();
          Swal.fire({
            title: "Thank you for your feedback 😍 Have a nice day!",
            showConfirmButton: true,
          }).then(function (){
            window.location.href = "{{route('home')}}";
          });
        });
      });
    </script>
</body>
</html>