<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="{{asset('assets/images/img/sidebar/logo1.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5fa84eb1c0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/login/style_login.css')}}">
    <link rel="stylesheet" href="{{asset('css/allPage.css')}}">
</head>

<body>
    <div class="limiter">
        <div class="frame-form">
            <div class="title-form">
                <a href="{{route('home')}}"> <img class="" style="width: 50px; height: 50px; margin-bottom: 10px" src={{asset('assets/images/img/sidebar/logo1.png')}}
                    alt=""></a>
                <span>Register</span>
            </div>
            <div class="form">
                <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="txt-field-1">
                        <label for="" class="title">Fullname</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16" style="color: white;">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <input type="text" name="name" id="name" placeholder="Type your name" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <label for="" class="title">Phone</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="color: white;">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            <input type="text" name="email" id="email" placeholder="Type your email" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <label for="" class="title">Email</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16" style="color: white;">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <input type="password" name="password" id="pwd" placeholder="Type your password" style="background-color: #212123; color: white;">
                            <span></span>
                        </div>
                        @if (isset($error))
                            <span class="text-warning">{{ $error }}</span>
                        @endif
                    </div>
                    <div class="txt-field-1">
                        <label for="" class="title">Confirm Password</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-lock" viewBox="0 0 16 16" style="color: white;">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>
                            <input type="password" name="password" id="password" placeholder="Type your password"
                                style="background-color: #212123; color: white;">
                            </div>
                            @if (isset($error))
                            <span class="text-warning">{{ $error }}</span>
                        @endif
                        </div>
                    <div class="txt-field-1">
                        <label for="" class="title">Confilm Password</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-lock" viewBox="0 0 16 16" style="color: white;">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>
                            <input type="password" name="con_pwd" id="con_pwd" placeholder="Comfirm your password" style="background-color: #212123; color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <label for="" class="title">Phone Number</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16" style="color: white;">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                            <input type="text" name="phone" id="phone" placeholder="Type your address" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <label for="" class="title">Address</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" style="color: white;">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                              </svg>
                            <input type="text" name="address" id="address" placeholder="Type your address" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <div class="txt-field1">
                            <input type="file" name="image_avatar_profile" id="image" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="btn-login">
                        <input type="submit" value="REGISTER" class="btn-log" name="btn-log">
                    </div>

                </form>
            </div>
            <div class="text-content">
                <span>Or Sign Up Using</span>
            </div>
            <div class="flex-c-m">
                <a href="{{route('facebookRedirect')}}" class="item-sign" id="item-1"><i class="fa fa-facebook"></i></a>
                <a href="{{route('githubRedirect')}}" class="item-sign" id="item-2"><i class="fa fa-github"></i></a>
                <a href="{{route('googleRedirect')}}" class="item-sign" id="item-3"><i class="fa fa-google"></i></a>
            </div>
            <div class="text-content-active" style="padding-top:5px">
                <span>Already have an account ?</span>
            </div>
            <div class="sign-up">
                <a href="login" id="btn-signUp">Login</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>