@extends('layouts.app')

@section('title','Signup')

@section('main')
	@parent
	<main class="form-signin">
		<form action="{{ route('adduser') }}" method="post">
			@csrf
			<div class="form-floating">
				<label for="login">Login</label>             
				<input class="form-control" type="text"  id="login" name="login"    required autofocus><br>
			</div>
			<div class="form-floating">
				<label for="password">Password</label>       
				<input class="form-control" type="password" id="password" name="password" required><br>
			</div>
			<div class="form-floating">
				<label for="confirm">Confirm password</label>
				<input class="form-control" type="password" id="confirm"  name="confirm"  required><br>
			</div>

			<input class="w-100 btn btn-lg btn-primary" type="submit" value="Signup">
		</form>
	</main>
	<p>
		If you already have an account, <a href="{{ route('signin') }}">signin</a>.
	</p>
@endsection
