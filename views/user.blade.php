@extends( 'template' )

@section( 'content' )
	@if ($name)
		<p>Welkom terug, {{ $name }} </p>
	@else
		<form method="POST">
			{{ csrf_field() }}
			<input type="text" name="name">
			<input type="submit">
		</form>
	@endif
@endsection
