<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>This is a Home Page</h1>
	
	<h2>Student ID:</h2>  {{ $studid }}
	<br>
	<h2>Student Name: </h2> {{ $studname }}

	@if($studid == '21')
		<h3>Happy New Year</h3>
	@else
		<h2>Happy Birthday</h2>
	@endif

	@for($i=0; $i <= $studid; $i++)
		<h1> {{ $i }}</h1>
	@endfor




</body>
</html>