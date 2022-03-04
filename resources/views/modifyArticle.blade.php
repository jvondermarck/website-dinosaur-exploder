@extends('layouts.app')

@section('title','Account')

@section('main')
	@parent
	<form class="form-signin" action=" {{ route('updateArticle') }}" method="post">
		@csrf
		<label for="title">Title</label>        
        <input type="text" id="title" name="title" value="{{ $article->titre }}" required>

		<label for="catchy">Catchy sentence</label>
        <input type="text" id="catchy" name="catchy" value="{{ $article->phrase }}" required>

        <label for="context">Textuel content</label>
        <textarea id="context" name="context">{{ $article->contenu }}</textarea> <br>

        <label for="publish">Publish now ?</label>
        <input type="radio" id="yes" name="publish" value="true" {{ ($article->statut=="1")? "checked" : "" }} required>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="publish" value="false" {{ ($article->statut=="0")? "checked" : "" }} required>
        <label for="no">No</label><br>
		
        <button type="submit" name="Send"  value={{$article->id}}>Modify the article</button>
	</form>
	<p>
		Go back to <a href="{{ route('account') }}">Home</a>.
	</p>
@endsection
