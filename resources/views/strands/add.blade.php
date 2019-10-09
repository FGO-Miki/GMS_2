@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/strands/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Strand Name</label>
		    <input type="text" class="form-control" name='strand'  placeholder="Title">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection