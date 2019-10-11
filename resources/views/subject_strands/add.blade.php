@extends('layouts.master')
@section('content')
<div class="container">
	@include('layouts.errors')
	<form method="POST" action="/subject_strands/store">
		@csrf
		<div class="form-group">
			<label for="title">Subject ID</label>
			<select class="form-control" id="sel1" name='subject_id'>
				@foreach ($subjects as $subject)
				<option value= '{{ $subject->id }}'>{{ $subject->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="description">Strand ID</label>
			<select class="form-control" id="sel1" name='strand_id'>
                      @foreach ($strands as $strand)
                      <option value= '{{ $strand->id }}'>{{ $strand->name }}</option>
                      @endforeach
                    </select>

		</div>
		<div class="form-group">
			<label for="exampleCheck1">Semester</label>
			<input type="date" class="form-control" name="semester" >
		</div>
		<div class="form-group">
			<label for="exampleCheck1">Grade Level</label>
			<input type="text" class="form-control" name="grade_level" >
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection