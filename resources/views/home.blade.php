@extends('layouts.master')
@section('Title','HOME')
@section('section')
	
	<h2>Welcome to Homepage</h2>
	<br>
	<h1>Advance Web Development</h1>
	Student ID : {{ $id }}
	<br>
	Firstname: {{ $fname }}
	<br>
	Lastname: {{ $lname }}
@endsection
@section('footer')
	Laravel Blade Template
@endsection