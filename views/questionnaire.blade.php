@extends( 'template' )

@section( 'content' )
	<h2>{{ $questionnaire->name }}</h2>
	@foreach ($questionnaire->questions() as $question)
		<fieldset>
		<legend>{{ $question->message }}</legend>
			@foreach ($question->answers() as $answer)
				<label><input type='radio' name='q{{ $question->id }}'>{{ $answer->message }}</label>
			@endforeach
		</fieldset>
	@endforeach
@endsection
