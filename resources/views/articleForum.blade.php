@extends('layouts.app')

@section('title','Account')

@section('main')
	@parent
	<h5>
		Welcome to the article page
	</h5>
	
	<p>You can signin <a href="{{ route('signin') }}">here</a> to add more article.</p>
@endsection


@section('blog')
<div class="card" class="d-flex flex-wrap align-self-stretch justify-content-start">
    <div class="card-header">
        Article created by {{ $article->auteur }}, the {{ $article->last_publi }}.
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $article->titre }}</h5>
      <p class="card-text">{{ $article->phrase }}</p>
      <p class="card-text">{{ $article->contenu }}</p>
      {{-- <p class="btn btn-primary">Author : {{ $article->auteur }}</p> --}}
    </div>
</div><br><br>

@forelse ($comment as $com)
    <div class="card" class="d-flex flex-wrap align-self-stretch justify-content-start">
        <div class="card-header">
            From {{ $com->user_id }}, the {{ $com->last_publi }}.
        </div>
        <div class="card-body">
        <p class="card-text">{{ $com->comment }}</p>
        {{-- <textarea id="comment" name="comment"></textarea> <br> --}}
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div><br>
@empty
    <p>No comment</p>
@endforelse


<a class="btn btn-primary" href="{{ route('addComment', ['id' => $article->id]) }}" role="button">Add a comment</a>

@endsection