@extends('layouts.app')

@section('title','Add an article')

@section('main')
	@parent
	<form class="form-signin" action="{{ route('addOneArticle') }}" method="post">
		@csrf
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="title">Title</span>
            </div>      
            <input type="text" id="title" name="title" required>
        </div><br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="catchy">Catchy sentence</span>
            </div>      
            <input type="text" id="catchy" name="catchy" required>
        </div><br>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Textual content</span>
                </div>
            <textarea id="context" name="context"></textarea> <br>
        </div><br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="publish">Publish now ?</span>
                <div class="input-group-text">
                    <input type="radio" id="yes" name="publish" value="true" required>
                    <label for="yes"> Yes</label>
                </div>
                <div class="input-group-text">
                    <input type="radio" id="no" name="publish" value="false" required>
                    <label for="no"> No</label><br>
                </div>
            </div>      
           
        </div><br>
		
        <input class="btn btn-primary" type="submit" value="Add the article">
	</form>
	<p>
		Go back to <a href="{{ route('account') }}">Home</a>.
	</p>
@endsection
<!-- 
un statut indiquant s'il est publié ou non,
la date de la dernière publication,
la date de la dernière modification. -->