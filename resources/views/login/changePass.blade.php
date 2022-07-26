<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="icon" href="{{ asset('assets/images/img/sidebar/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/login/changePass.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/profile/edit_profile.css') }}" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: rgb(30, 31, 30);
    }
</style>

<body>
    <form action="{{ route('changePassword') }}" method="POST">
        @csrf
        
        <div class="title-form">
            <img class="" style="width: 50px; height: 50px;  margin-bottom: 10px; margin-top: 10px"
                src={{ asset('assets/images/img/sidebar/logo1.png') }} alt="">
            <h5 style="color: white;">Change Password</h5>
        </div>
        @if (session('alert'))
            <section class="alert alert-warning">{{ session('alert') }}</section>
        @endif
        <label>
            <p class="label-txt">Current Password</p>
            <br>
            <input type="text" class="input" name="current">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <br>
        <label>
            <p class="label-txt">New Password</p>
            <br>
            <input type="text" class="input" name="new">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>