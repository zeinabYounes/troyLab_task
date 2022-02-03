<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css' )}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/my_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/w3-purple-theme.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/side_style.css') }}">
<script type="text/javascript" src="{{ asset('/js/jquery-3.4.1.min.js') }}" ></script>

<script type="text/javascript" src="{{ asset('/js/bootstrap4.min.js') }}" ></script>
<style>
 .w3-btn {
    background-color:#4CAF50 ;margin-bottom:4px;
 }
  body{
    background-image:url("{{ asset('/uploads/images/bg3.jpg') }}") ;
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
    }
    .content{
      margin-top:100px; min-height:1200px; bottom:0; padding:1%;
    }
  }
  @media  screen and (max-width:600px) {
    .content{
      margin-top:100px; min-height:700px; bottom:0; padding:1%;
    }
  }
</style>
