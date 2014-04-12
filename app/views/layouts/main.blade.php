<!DOCTYPE html>
<html>
<head>
	{{ HTML::style('css/vendors/normalize.css') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Raleway') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Serif') }}
	{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
	{{ HTML::style('css/dist/style.css') }}
	<title>Robin Mitra</title>
	<meta name="p:domain_verify" content="db367218c11781ba1fba623aeb1cc396"/>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-49758585-1', 'robinmitra.com');
  ga('send', 'pageview');
</script>
<div id="main-container">
	@include('layouts.sidebar')
	@yield('content')
</div>
{{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js') }}
</body>
</html>