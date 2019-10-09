@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/teachers/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Name</label>
		    <input type="text" class="form-control" name='teacher' aria-describedby="emailHelp" placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="description">Advisory Section</label>
		    <input type="text" class="form-control" name="advisory_section" placeholder="Description">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection