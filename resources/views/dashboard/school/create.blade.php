@extends('layouts.default')
@section('nav')
<a href="{{route('schools.index')}}" class="float-right active">Schools</a>
<a href="{{route('orders.index')}}" class="float-right">Orders</a>
  @endsection
@section('content')
<div class="container ">
  <div class="row  p-5 p-md-2 ">
   <div class=" card  col-md-7 col-sm-12  pt-5 p-4  mx-auto "
     style=" border-left: 10px solid  #660066;  border-radius :20px;">
      <div class="card-header w3-theme-d5">Add New School </div>
        @include('notes')
        <div class="card-body">
          <form class="m-2 p-2" action="{{route('schools.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">School Name:</label>
              <input type="text" class="form-control" placeholder="Enter School name" id="name" name="sch_name">
            </div>
            <div class="form-group">
              <label for="Status">School Status:</label>
              <select name="status" class="custom-select">
                <option selected value="available" >available</option>
                <option value="completed">completed</option>
              </select>
            </div>
            <input type="submit" name="Register" value="Register" class="btn btn-info btn-block">
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
