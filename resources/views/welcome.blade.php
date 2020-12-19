<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Website Aneka Resep
    </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
      h1{
        color: white;
        font-family: Trebuchet MS;
        text-align: center;
        font-size: 50px;
        font-style:italic;
      }
      .lead{
        color: white;
        font-family: Trebuchet MS;
        text-align: center;
        font-size: 20px;
        font-style:italic;
      }
      .my-4{
        color: white;
        font-family: Trebuchet MS;
        text-align: center;
        font-size: 20px;
        font-style:italic;
      }
      html, body {
        background-image: url('images/bghalut.jpg');
        background-size: cover;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
      }
      .full-height {
        height: 100vh;
      }
      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      .position-ref {
        position: relative;
      }
      .top-right {
        background-color: orange;
        border-radius: 8px;
        margin-bottom: 10px;
        position: absolute;
        right: 10px;
        top: 18px;
      }
      .content {
        text-align: center;
      }
      .title {
        font-size: 84px;
      }
      .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
      }
      .m-b-md {
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
      <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home
        </a>
        @else
        <a href="{{ route('login') }}">Login
        </a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register
        </a>
        @endif
        @endauth
      </div>
      @endif
      <div class="jumbotron" >
        <div class="container">
          <br>
          <br>
          <h1 class="display-4">Selamat Datang Di Website 
            <br> 
            <span class="font-weight-bold">Aneka Resep Masakan
            </span> 
          </h1>
          <br>
          <br>
          <br>
          <p class="lead">Disini menyediakan berbagai macam resep-resep masakan.
          </p>
          <hr >
          <br>
          <br>
          <br>
          <p class="my-4">Jika anda tertarik untuk memasak atau memiliki hobby memasak maka dapat mengunjungi website ini setiap saat.
          </p>
        </div>
      </div>
      </body>
</html>
