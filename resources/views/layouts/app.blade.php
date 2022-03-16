<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dino Exploder - @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="icon" href="{{ url('img/icon_dino.ico') }}">
		<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
		@include('shared.nav')
	</head>
	<body>
		<div class="text-center" id="custom-display">
			<div class="text-center">
				@section('main')
					<h1>@yield('title')</h1><br>
				@show

				<div class="d-flex flex-wrap align-self-stretch justify-content-center">
					@section('article')
					@show
				</div>
				<div class="d-flex flex-column align-items-center justify-content-center">
					@section('blog')
					@show
				</div>
				<br><br>
				@include('shared.message')
			</div>
			<br>
		</div>
	</body>
		{{-- 	<footer class="text-muted" style="background-color: #fff; position:absolute; width:100%; margin-top: auto;"> --}}
	{{-- <footer class="text-muted" style="background-color: #fff;     clear: both;
    position: relative;
    z-index: 1; ">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>Dinosaur Exploder is an Open-Source project hosted on GitHub. Feel free to contribute to our project !</p>
			<p>New as a contributor ? <a href="https://github.com/dylan-power/dinosaur-exploder">Visit our GitHub</a> or read our <a href="https://github.com/dylan-power/dinosaur-exploder/blob/main/CONTRIBUTING.md">contribution guidelines</a>.</p>
			@section('footer')
			@show
		</div>
	</footer> --}}
</html>
