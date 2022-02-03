@extends('layouts.default')
@section('nav')
<a href="{{route('schools.index')}}" class="float-right ">Schools</a>
<a href="{{route('orders.index')}}" class="float-right active">Orders</a>
  @endsection
@section('content')
<div class="container">
  @include('notes')

<div class="table-responsive-sm">
  <table class="table table-active table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th><h3>Student Name </h3></th>
        <th><h3>School Name </h3></th>
        <th> <h3>Status</h3></th>
        <th colspan="3"><h3> Action</h3></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      @if($order->trashed())
      <style media="screen">
        tr{
          background-color: #ffb3b3;
        }
      </style>
      @endif
      <tr>
        <td> {{ $order->student_name}}</td>
        <td> {{ $order->school->name}}</td>
        <td> {{ $order->status}}</td>
        @if($order->status !=="accepted")
        <form action="{{route('orders.accept',$order->id)}}" method="POST" >
          @csrf
          <td>
              <button class="btn  btn-primary btn-sm btn-block" type="submit" >Accepting</button>
          </td>
        </form>
        @endif
        @if($order->status !=="refused")

        <form action="{{route('orders.refus',$order->id)}}" method="POST" >
          @csrf
          <td>
              <button class="btn  btn-primary btn-sm btn-block" type="submit" >Refusing</button>
          </td>
        </form>
        @endif
        @if($order->status !=="suspended")

        <form action="{{route('orders.suspend',$order->id)}}" method="POST" >
          @csrf
          <td>
              <button class="btn  btn-primary btn-sm btn-block" type="submit" >suspending</button>
          </td>
        </form>
        @endif

        @if($order->trashed())
          <td>
            <form action="{{route('orders.deleteForever',$order->id)}}" method="POST" >
            @csrf
            <button class="btn btn-danger btn-sm btn-block" type="submit" >DeleteForever</button>
            </form>
          </td>
        @else
          <form action="{{route('orders.destroy',$order->id)}}" method="POST" >
            @csrf
            @method('DELETE')
            <td>
              <button class="btn btn-danger btn-sm btn-block" type="submit" >Delete</button>
            </td>
          </form>
        @endif
@if($order->trashed())
<td>
<form action="{{route('orders.restore',$order->id)}}" method="POST" >
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
