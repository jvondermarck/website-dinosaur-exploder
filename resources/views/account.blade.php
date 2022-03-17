@extends('layouts.app')

@section('title','Account')

@section('main')
	@parent
	<h5>
		Hello {{ $user->login }} !<br>
		Welcome on your account.<br>
		@if($user->admin == 1)         
			Admin profile.
		@endif
	</h5>
		<br><h4>Manage your account</h4>
		<a href="{{ route('formpassword') }}">Change password.</a><br>
		<a href="{{ route('deleteuser') }}">Delete my account.</a><br>
		<p><a href="{{ route('signout') }}">Sign out.</a></p>

		<h4>Section Forum</h4>
		<a href="{{ route('addarticle') }}">Add an article.</a><br>
		<a href="{{ route('giveLastestArticle') }}">See the forum.</a><br>
		<a href="{{ route('seeArticle') }}">See your articles.</a><br>
@endsection
