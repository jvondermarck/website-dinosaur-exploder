@extends('layouts.app')

@section('title','Add an article')

@section('main')
	@parent
	<form class="form-signin" action="{{ route('addOneComment', ['id' => $article->id]) }}" method="post">
		@csrf
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Textual content</span>
                </div>
            <textarea id="comment" name="comment"></textarea> <br>
        </div><br>
           
        </div><br>
		
        <input class="btn btn-primary" type="submit" value="Add the comment">
	</form>
	<p>
		Go back to <a href="{{ route('account') }}">Home</a>.
	</p>
@endsection
<!-- 
un statut indiquant s'il est publié ou non,
la date de la dernière publication,
la date de la dernière modification. -->