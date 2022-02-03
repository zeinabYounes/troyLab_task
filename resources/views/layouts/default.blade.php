<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>troyla - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/w3.css' )}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/w3-purple-theme.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/side_style.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap4.min.js') }}" ></script>
    <style>
     .w3-btn {
        background-color:#4CAF50 ;margin-bottom:4px;
     }
      body{
        /* background-image: url("{{ asset('/images/22968778-2.jpg') }}") ; */
        background-image:url("{{ asset('assets/uploads/images/bg3.jpg') }}") ;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-color: #cc99ff;
      }
      .input-error{
        border-color:red;


      }
      .container-fluid{
        width:100%;
        background-color: rgba(255,255,255,0.7);
        background-size: cover;
        min-height:2400px;
        padding-top:100px;
        padding-right:100px;
      }
      .glow {
  font-size: 30px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

      .footer{
        bottom: 0;
        position: relative ;
        width: 110%;
        color: black;
        font-size : 20px;
        text-align: center;
        padding-top :2%;
        padding-bottom :2%;
        background-color: rgba(255,255,255,0.7);
      }
      .content{
        width:100%;
        min-height:700px;
      }
      @media  screen and (max-width:1024px) {
        body{
          background-image: url("{{ asset('/uploads/images/bg5.jpg') }}") ;
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          background-color: #cc99ff;
        }
        .container-fluid{
          width:100%;
          min-height:1400px;
          padding-top:100px;
          padding-right:50px;
        }
        .content{
          margin-top:100px; min-height:1200px; bottom:0; padding:1%;
        }
      }
      @media  screen and (max-width:600px) {
        .content{
          margin-top:100px; min-height:700px; bottom:0; padding:1%;
        }
        .container-fluid{
          width:100%;
          min-height:1400px;
          padding-top:100px;
          padding-right:0px;
        }
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-expand-sm fixed-top  justify-content-center" id="topNav" style=" background-color:#e3c5c9; ">
      <a href="#" class="glow nav-link">TROYLAB TASK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon">&#9776;</span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <div class="navbar-nav" >

          @yield('nav')
        </div>
      </div>
    </nav>
    <div  class="container-fluid" style="">

          @yield('content')
    </div>
    <div class="footer ">
      All Right Reserved for Agbanyat@2021
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"> </script>

  </body>
</html>
