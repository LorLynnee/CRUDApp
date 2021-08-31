@extends('students.layout')

@section('content')

	<dic class="row">
	
	<div class="col-lg-12 margin-tb">
	<div class="pull-left">
	<h2>Edit Details</h2>

</div>
<div class="pull-right">

	<a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>

	</div>
	</div>
	</div>

@if ($errors->any())
	<div class="alert alert-danger">
	<strong>Error!</strong>Please try another input. <br><br>

	<ul>

	@foreach ($errors->all() as $error)

	<li>{{ $error }}</li>

	@endforeach
</ul>
</div>
@endif

<form action="{{ route('students.update',$student->id) }}" method="POST">
@csrf

 @method('PUT')
	<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">

	<strong>Student Name:</strong>

	<input type="text" name="studname" value="{{ $student->studname }}"

	class="form-control" placeholder="Name">

</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

	<div class="form-group">
	<strong>Course:</strong>

	<input type="text" name="course" value="{{ $student->course }}"
class="form-control" placeholder="Course">


</div>
</div>

<div class="col=xs=12 col-sm-12 col-md-12">
	
	<div class="form-group">
	<strong>Todo:</strong>
	<input type="text" name="todo" value="{{ $student->todo }}" class="form-control" placeholder="Todo">
</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text center">

	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>

@endsection