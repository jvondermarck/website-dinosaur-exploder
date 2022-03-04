@extends('layouts.app')

@section('title','Signin')

@section('main')
	@parent
	<main class="form-signin">
		<form action="{{ route('authenticate') }}" method="post">
			@csrf
			<div class="form-floating">
				<label for="login">Login</label>      
				<input class="form-control" type="text" id="login" name="login" required autofocus><br>
			</div>
			<div class="form-floating">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" required><br>
			</div>
			
			<input class="w-100 btn btn-lg btn-primary" type="submit" value="Signin"><br>
		</form><br>
	</main>
	<p>
		If you don't have an account, <a href="{{ route('signup') }}">signup</a> first.<br>
		If you want to see the public articles of all users, <a href="{{ route('giveLastestArticle') }}">click here.</a>
	</p>
@endsection
