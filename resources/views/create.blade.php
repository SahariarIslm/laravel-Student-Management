@extends('master')
@section('title')
  Create Student | Student Management
@endsection
@section('content')
	<h2>
		Create New Student
	</h2>
	<form class="form-horizontal" action="{{route('store')}}" method="post" data-parsley-validate>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
    @endif
		{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name" maxlength="20" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="regestration_id">Regestration Id:</label>
    <div class="col-sm-10">
      <input type="number" name="regestration_id" class="form-control" id="regestration_id" placeholder="Enter Student Regestration Id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="department_name">Department:</label>
    <div class="col-sm-10">
      <input type="text" name="department_name" class="form-control" id="department_name" placeholder="Enter Student Department Name" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="info">Info:</label>
    <div class="col-sm-10">
      <textarea name="info" class="form-control" id="info" placeholder="Enter Student Info" rows="10"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Register Student</button>
    </div>
  </div>
</form>
@endsection		