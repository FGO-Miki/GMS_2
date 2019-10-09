@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/subject_strands/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Subject ID</label>
		    <input type="text" class="form-control" name='subject_id' aria-describedby="emailHelp" placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="description">Strand ID</label>
		    <input type="text" class="form-control" name="strand_id" placeholder="Description">
		  </div>
		  <div class="form-group">
		    <label for="exampleCheck1">Semester</label>
		    <input type="date" class="form-control" name="semester" >
		  </div>
		  <div class="form-group">
		    <label for="exampleCheck1">Grade Level</label>
		    <input type="date" class="form-control" name="grade_level" >
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection