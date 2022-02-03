
<div class="modal" id="myModal{{$sch->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register to {{$school_name}}  </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form class="m-2 p-2" action="{{route('school_regist',$shool_id)}}" method="post">
        @csrf
        <div class="form-group">
          <label for="email">Student Name:</label>
          <input type="text" class="form-control" placeholder="Enter student name" id="name" name="stud_name">
        </div>
        <input type="submit" name="Register" value="Register" class="btn btn-info btn-block">
      </form>
      <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
