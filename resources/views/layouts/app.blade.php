<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="icon" href="{{ url('img/lol.ico') }}">
		@include('shared.nav')
	</head>
	<body>
		<div class="text-center" id="custom-display">
			<div class="text-center">
				@section('main')
					<h1>@yield('title')</h1><br>
				@show

				<div  class="d-flex flex-wrap align-self-stretch justify-content-center">
					@section('article')
					@show
				</div>
				<div class="text-left d-flex flex-column">
					@section('blog')
					@show
				</div>
				<br><br>
				@include('shared.message')
			</div>
			<br>
		</div>	
	</body>
</html>
