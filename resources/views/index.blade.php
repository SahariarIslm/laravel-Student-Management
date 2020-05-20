@extends('master')
@section('content')	
	<table class="table table-responsive table-hover">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Registration</th>
			<th>Department Name</th>
			<th>Info</th>
			<th>Action</th>
		</tr>
		<?php $i = 0; ?>
		@foreach($students as $student)
		<?php $i++ ; ?>
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $student->name }}</td>
			<td>{{ $student->regestration_id }}</td>
			<td>{{ $student->department_name }}</td>
			<td>{{ $student->info }}</td>
			<td>
				<a href="{{ route('edit',$student->id) }}" class="btn btn-success">Edit</a>
				<form class="form-inline" action="{{ route('delete',$student->id) }}" method="post" >
					{{ csrf_field() }}
					<input type="submit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

		
	