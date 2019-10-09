@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Name</label>
		    <input type="text" class="form-control" name='section'  placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="title">Is it active?</label>
		    <input type="text" class="form-control" name='is_active'  placeholder="Title">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection