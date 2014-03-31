<!DOCTYPE html>
<html>
<head>
	{{ HTML::style('css/vendors/normalize.css') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Raleway') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Serif') }}
	{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
	{{ HTML::style('css/dist/style.css') }}
	<title>Robin Mitra</title>
</head>
<body>
<div id="main-container">
	@include('layouts.sidebar')
	@yield('content')
</div>
{{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js') }}
</body>
</html>