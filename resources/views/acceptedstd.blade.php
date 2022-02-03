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
      @foreach ($students as $student)

      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->order->status}}</td>
        <td>{{$student->school->name}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
