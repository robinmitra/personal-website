@extends('layouts.main')

@section('content')
<div id="main-body">
	<h1 class="page-heading">{{ $page->title }}</h1>
	<div>{{ $page->body }}</div>
</div>
@stop