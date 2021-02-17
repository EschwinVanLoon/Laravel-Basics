@extends( 'template' )

@section( 'content' )	
	<article>
		<h2>{{ $article->title }}</h2>
		<h3>By {{ $article->author }}</h3>
		<section>{{ $article->contents }}</section>
		<a href="{{ url('news-edit/'.$article->id) }}"><button>Edit</button></a>
	</article>
@endsection