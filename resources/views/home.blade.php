@extends('layouts.default')
@section('nav')
<a href="{{route('home')}}" class="float-right active">Schools</a>
<a href="{{route('students.show')}}" class="float-right">Students</a>
  @endsection
@section('content')
<div class="container">
<div class="table-responsive-sm">
  <table class="table table-active table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th><h3>School Name </h3></th>
        <th> <h3>Status</h3></th>
        <th><h3>Action</h3></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($schools as $sch)

      <tr>
        <td>{{$sch->name}}</td>
        <td>{{$sch->status}}</td>
        @if($sch->status=="available")
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$sch->id}}">
          Register
         </button>
         @include('schoolRegist',['shool_id' => $sch->id,'school_name'=>$sch->name])

         </td>
        @else
        <td><a href="" class="btn btn-info disabled ">Register</a> </td>

        @endif
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
</div>
@endsection
