<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <a href="{{route('home')}}"> <img class="" style="width: 50px; height: 50px;  margin-bottom: 10px" src={{asset('assets/images/img/sidebar/logo1.png')}}
                    alt=""></a>
                <span>Login</span>
            </div>
            <div class="form">
                <form action="{{route('processLogin')}}" method="GET">
                    @csrf
                    @if (session('alert'))
                        <section class="alert alert-warning">{{session('alert')}}</section>
                    @endif
                    <div class="txt-field-1">
                        <label for="">Email</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" style="color: white;">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <input type="text" name="email" id="email" placeholder="Type your username" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <label for="">Password</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16" style="color: white;">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>
                            <input type="password" name="password" id="pwd" placeholder="Type your password" style="background-color: #212123; color: white;">
                            <span></span>
                        </div>
                    </div>
                    
                    <div class="btn-login">
                        <input type="submit" value="LOGIN" class="btn-log" name="btn-log">
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
            <div class="text-content">
                <span>You don't have account ?</span>
            </div>
            <div class="sign-up">
                <a href="register" id="btn-signUp">Sign Up</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>