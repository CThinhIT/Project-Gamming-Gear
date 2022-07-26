<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Staff</title>
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
                <span>Login Staff</span>

            </div>
            <div style="text-align: center;color:red">
                <span>@if (session('message'))
                    {{ session('message') }}
                    @endif</span>
            </div>
            <br><br>
            <div class="form" style="padding-bottom: 30px;">
                <form action="{{url('admin/checkLogin')}}" method="post">
                    {{ csrf_field() }}
                    <div class="txt-field-1">
                        <label for="">Username</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" style="color: white;">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <input type="text" name="email" id="userName" placeholder="Type your username" style="background-color: #212123;color: white;">
                            <span></span>
                        </div>
                    </div>
                    <div class="txt-field-1">
                        <label for="">Password</label>
                        <div class="txt-field">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16" style="color: white;">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>
                            <input type="password" name="pwd" id="pwd" placeholder="Type your password" style="background-color: #212123; color: white;">
                            <span></span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="btn-login">
                        <input type="submit" value="LOGIN" class="btn-log" name="btn-log">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>