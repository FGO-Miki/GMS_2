@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subject_strands as $subject_strand)
					<tr>
						<td>{{ $subject_strand->id }}</td>
						<td>{{ $subject_strand->subject_id }}</td>
						<td>{{ $subject_strand->strand_id }}</td>
						<td>{{ $subject_strand->semester }}</td>
						<td>{{ $subject_strand->grade_level }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subject_strands/add'>Add New Subject-strand</a>
	</div>
@endsection