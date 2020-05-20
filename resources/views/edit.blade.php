@extends('master')
@section('title')
  Update Student | Student Management
@endsection
@section('content')
	<h2>
		Update Student
	</h2>
	<form class="form-horizontal" action="{{route('update',$student->id)}}" method="post">
		{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="regestration_id">Regestration Id:</label>
    <div class="col-sm-10">
      <input type="number" name="regestration_id" class="form-control" id="regestration_id" value="{{ $student->regestration_id }}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="department_name">Department:</label>
    <div class="col-sm-10">
      <input type="text" name="department_name" class="form-control" id="department_name" value="{{ $student->department_name }}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="info">Info:</label>
    <div class="col-sm-10">
      <textarea name="info" class="form-control" id="info" rows="10">{{ $student->info }}</textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Update Student</button>
    </div>
  </div>
</form>
@endsection		