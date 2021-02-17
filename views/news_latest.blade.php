@extends( 'template' )

@section( 'content' )	
	@forelse ($articles as $article)
		<article>
		<h2><a href="{{ url('news/'.$article->id) }}">{{ $article->title }}</a></h2>
		</article>
	@empty
		<p>No news items found.</p>
	@endforelse
		<a href="{{ url('/news-create') }}"><button>Add news</button></a>
@endsection