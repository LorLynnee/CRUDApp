@extends('students.layout')

@section('content')

<div class="pull-left">


	<h2 style="text-align:center; color:black ;">Student TodoList</h2>

	</div>

	<div class="row">

	<div class="col-lg-12 margin-tb">

	<div class="pull-right">
	<a class="btn btn-success" href="{{ route('students.create') }}"> Create New TodoList</a>

	</div>
	</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>

</div>
@endif

<table class="table table-bordered">

<tr>

	<th>Student No</th>
	<th>Name</th>
	<th>Course</th>
	<th>Todo</th>
	<th width="280px">Action</th>
</tr>

@foreach ($students as $student)
<tr>

	<td>{{ ++$i }}</td>
	<td>{{ $student->studname }}</td>
	<td>{{ $student->course }}</td>
	<td>{{ $student->todo }}</td>

	<td>
	<form action="{{ route('students.destroy',$student->id) }}" method="POST">
	

	<a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

	@csrf
	@method('DELETE')

	<button type="submit" class="btn btn-danger">Delete</button>

	</form>

    </td>
</tr>
@endforeach

</table>