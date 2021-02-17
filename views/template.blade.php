<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('settings')
    </head>
	<body class="antialiased">
		<header>
			<h1>Thema 10: Laravel</h1>
		</header>
		<nav>
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/roll') }}">Dice</a></li>
				<li><a href="{{ url('/user') }}">User</a></li>
				<li><a href="{{ url('/questionnaire') }}">Questionnaire</a></li>
				<li><a href="{{ url('/news') }}">News</a></li>
			</ul>
		</nav>
		<main>
			@yield ('content')
		</main>
		<footer>
			<p>&copy; {{ date('Y') }}</p>
		</footer>
	</body>
</html>
