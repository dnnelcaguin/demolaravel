@extends('layouts.master')
@section('Title','Edit Record')

@section('section')
	<form method="POST" action="/edit/{{ $profile[0]->id }}">
		@csrf  {{--  cross site request forgery for unwanted users --}}
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name" value="{{ $profile[0]->name }}">
		<br>
		<label>Address</label>
		<input type="text" name="address" placeholder="Enter Address" value="{{ $profile[0]->address }}">
		<br>
		<label>Contact</label>
		<input type="text" name="contact" placeholder="Enter Contact" value="{{ $profile[0]->contact }}">
		<br>
		<input type="submit" name="btnUpdate" class="btn btn-success" value="Update Record">


	</form>

	@if(isset($msg))
		{{ $msg }}
	@endif
	<br>
	<a href="/home">Back to Records</a>
@endsection

			