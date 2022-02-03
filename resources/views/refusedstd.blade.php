<div class="table-responsive-sm">
  <table class="table table-active table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th><h3>Student Name </h3></th>
        <th> <h3>Status</h3></th>
        <th><h3>School Name</h3></th>

      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)

      <tr>
        <td>{{$order->student_name}}</td>
        <td>{{$order->status}}</td>
        <td>{{$order->school->name}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
