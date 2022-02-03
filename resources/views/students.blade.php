@extends('layouts.default')
@section('nav')
  <a href="{{route('home')}}" class="float-right">Schools</a>
  <a href="{{route('students.show')}}" class="float-right active">Students</a>
  @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">

<script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.min.js') }}" ></script>


<div class="container" style="background-color:rgba(230, 204, 255,0.8);">

  <ul class="nav nav-tabs " role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Accepted Students </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Susbended Students</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Refused Students</a>
    </li>
  </ul>
  <div class="tab-content" style="min-height:400px; width:100%;">
    <div id="home" class="container tab-pane active"><br>
      @if(count($students)> 0)
        @include('acceptedstd',['students'=>$students])
      @else
      <h1 class="text-center text-secondary"> NO STUDENT ACCEPTED </h1>
      @endif
   </div>
   <div id="menu1" class="container tab-pane fade"><br>
     @if(count($suspend_std)> 0)
       @include('susbendedstd',['orders'=>$suspend_std])
     @else
       <h1 class="text-center text-secondary"> NO STUDENT SUSPENDED </h1>
     @endif
   </div>
   <div id="menu2" class="container tab-pane fade"><br>
     @if(count($refus_std)> 0)
       @include('refusedstd',['orders'=>$refus_std])
     @else
         <h1 class="text-center text-secondary"> NO STUDENT REFUSED </h1>
     @endif

   </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function () {

      //$(window).bind("load", function() {

           $('.taskTable').DataTable();
         });
  </script>
</div>
@endsection
