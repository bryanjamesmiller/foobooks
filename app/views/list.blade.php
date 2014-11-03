@extends('_master')

@section('title')
List all the books
@stop

@section('content')
<h1>List all books</h1>
View as:
	<a href='/list/json' target='_blank'>JSON</a> |
	<a href='/list/pdf' target='_blank'>PDF</a>

@stop