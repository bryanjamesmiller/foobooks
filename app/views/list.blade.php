@extends('_master')

@section('title')
List all the books
@stop

@section('content')
<h1>List all books</h1>
<div>
		View as:
		<a href='/list/json' target='_blank'>JSON</a> |
		<a href='/list/pdf' target='_blank'>PDF</a>
	</div>

	@foreach($books as $title => $book)
		<section class='book'>
			<h2>{{ $title }}</h2>
			{{ $book['author'] }} ({{$book['published']}})

			<div class='tags'>
				@foreach($book['tags'] as $tag)
					{{ $tag }}
				@endforeach
			</div>
			<img src='{{ $book['cover'] }}'>
			<br>
			<a href='{{ $book['purchase_link'] }}'>Purchase...</a>
		</section>
	@endforeach

@stop