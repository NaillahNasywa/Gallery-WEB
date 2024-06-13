<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets-web/css/user.css') }}">
    <title>LOGIN</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        {{-- <img src="{{ asset('assets-web/img/ilustrasi/shape.png') }}" class="square" alt="" /> --}}


    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 shadow box-area">


        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
            <div class="featured-image mb-3">
                {{-- <img src="{{ asset('assets-web/img/ilustrasi/logocp2.png') }}" class="img" style="
                    width: 27%;
                    margin-bottom:15px;
                    "> --}}
             <img src="{{ asset('assets-web/img/ilustrasi/125.png') }}" class="img-fluid" style="width: 400px; object-fit: cover;">
            </div>
        </div> 

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                  <div class="header-text mb-4">
        
                    <span class="circle one"></span>
                    <span class="circle two"></span>
                      {{-- <img src="{{ asset('assets-web/img/ilustrasi/logo.png') }}" class="img" style="
                            width: 40%;
                            /* margin-top:20px; */
                            "> --}}
        
                    {{-- <h3 class="title2" style="
                    font-size: 24px;
                    font-weight:600;
                    ">LOGIN HERE</h3> --}}
                      <h2 style="font-size: 25px; font-weight:500;">SIGN UP HERE!</h2>
                      <p>create your account to log in to clodscape <br><small>back to <a href="{{ route('login') }}" style="color: white;">Log-in</a></small></p>
                 
    <form action="{{ route('User.register') }}" method="post">
        @csrf
        <div class="input-container">
            {{-- <label for="name" class="form-label">Name</label> --}}
            <input type="text" name="name" value="{{ Session::get('name') }}"  class="form-control" placeholder="name">
        </div>
        <div class="input-container">
            {{-- <label for="email" class="form-label">Email</label> --}}
            <input type="email" name="email" value="{{ Session::get('email') }}"  class="form-control" placeholder="email">
        </div>
        <div class="input-container">
            {{-- <label for="password" class="form-label">Password</label> --}}
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <div class="input-container">
            <button type="submit" name="submit" class="btn btn-login2">SIGN UP</button>
        </div>
    </form>
</div>
</div>