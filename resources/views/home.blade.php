@extends('layouts.master')
@section('Title','HOME')
@section('section')
			
	<h1> Register Form </h1>
	<form method="POST" action="/home">
		@csrf  {{--  cross site request forgery for unwanted users --}}
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<label>Address</label>
		<input type="text" name="address" placeholder="Enter Address">
		<br>
		<label>Contact</label>
		<input type="text" name="contact" placeholder="Enter Contact">
		<br>
		<input type="submit" name="btnInsert" class="btn btn-success" value="Register">

	</form>

	<table border = 1>
		<th>Name</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Action</th>

		@foreach($users as $profile)
			<tr>
				<td> {{ $profile->name}}</td>
				<td> {{ $profile->address}}</td>
				<td> {{ $profile->contact}}</td>
				<td><a href="/delete/{{$profile->id}}">DELETE</a>
				<a href="/edit/{{$profile->id}}">EDIT</a>
			</td>
			</tr>

		@endforeach

	</table>

	{{-- <h2>Welcome to Homepage</h2>
	<br>
	<h1>Advance Web Development</h1>
	Student ID : {{ $id }}
	<br>
	Firstname: {{ $fname }}
	<br>
	Lastname: {{ $lname }} --}}
@endsection
@section('footer')
	Laravel Blade Template
@endsection