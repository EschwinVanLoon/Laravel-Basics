@extends( 'template' )

@section( 'content' )
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	<form method="POST" action="{{ url('news-save') }}">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $article->id }}"><br>
		<label for="author">Auteur:</label><br>
		<input type="text" id="author" name="author" value="{{ old('author', $article->author) }}"><br>
		<label for="publish_date">Publish:</label><br>
		<input type="date" id="publish_date" name="publish_date" value="{{ old('publish_date', $article->publish_date) }}"><br>
		<label for="title">Title:</label><br>
		<input type="text" id="title" name="title" value="{{ old('title', $article->title) }}"><br>
		<label for="contents">Contents:</label><br>
		<textarea type="text" id="contents" name="contents">{{ old('contents', $article->contents) }}</textarea><br>
		<input type="submit" value="Submit">
	</form> 	
@endsection