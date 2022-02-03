@extends('layouts.default')
@section('nav')
<a href="{{route('schools.index')}}" class="float-right active">Schools</a>
<a href="{{route('orders.index')}}" class="float-right">Orders</a>
  @endsection
@section('content')
<div class="container">
  @include('notes')

<div class="table-responsive-sm">
  <table class="table table-active table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th><h3>School Name </h3></th>
        <th> <h3>Status</h3></th>
        <th colspan="3"><h3> Action  <a href="{{route('schools.create')}}" class="btn btn-info"> Create New </a></h3></th>

      </tr>
    </thead>
    <tbody>
      @foreach ($schools as $school)
      @if($school->trashed())
      <style media="screen">
        tr{
          background-color: #ffb3b3;
        }
      </style>
      @endif
      <tr>
        <form action="{{route('schools.update',$school->id)}}" method="POST" >
          @csrf
          @method("PATCH")
          <input type="hidden" name="_method" value="PATCH"/>
          <td>
          <input type="text" name="sch_name" value="{{$school->name}}" class="form-control">
          </td>

          <td>
            <input type="text" name="status" value="{{$school->status}}" class="form-control">
          </td>
          <div class="btn-group">
          <td>
            <button class="btn btn-warning btn-sm btn-block" type="submit" >Edit</button>
          </td>
        </form>

        @if($school->trashed())
          <td>
            <form action="{{route('schools.deleteForever',$school->id)}}" method="POST" >
            @csrf
            <button class="btn btn-danger btn-sm btn-block" type="submit" >DeleteForever</button>
            </form>
          </td>
        @else
          <form action="{{route('schools.destroy',$school->id)}}" method="POST" >
            @csrf
            @method('DELETE')
            <td>
              <button class="btn btn-danger btn-sm btn-block" type="submit" >Delete</button>
            </td>
          </form>
        @endif
@if($school->trashed())
<td>
<form action="{{route('schools.restore',$school->id)}}" method="POST" >
@csrf
<button class="btn  btn-danger btn-sm btn-block" type="submit" >Restore</button>
</form>
</td>
@endif
</tr>
</div>

      @endforeach

    </tbody>
  </table>
</div>
</div>
@endsection
