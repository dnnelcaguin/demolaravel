@extends('layouts.master')
@section('Title','INDEX')

@section('section')
		<form method="POST" action="/index">
			@csrf
			<label>Username</label>
			<input type="text" name="uname" required="">
			<br>
			<label>Password</label>
			<input type="password" name="pword" required="">
			<br>
			<input type="submit" value="Display Data" name="btnDisplay" class="btn btn-success">
		</form>
@if(empty($uname) || empty($pword))
	
@else
	Username: {{ $uname }}
	Password: {{ $pword }}
@endif


@endsection
@section('footer')
	Advance Web Development
@endsection