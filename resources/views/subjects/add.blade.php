@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/subjects/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Subject Name</label>
		    <input type="text" class="form-control" name='subject'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection