@extends('layouts.app2')

@section('title','Modify article')

@section('body')
	@parent
    
    <form action="{{ route('updateArticle') }}" method="post" style="text-align: center;">
        @csrf
        <div class="container align-items-center justify-content-md-center">
            <div class="row align-items-center justify-content-md-center">
                <div class="form-group col-sm-6 col-xs-1">
                    <label for="title">Title :</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $article->titre }}" required>
                </div>
                <div class="form-group col-sm-6 col-xs-1">
                    <label for="catchy">Catchy sentence :</label>
                    <input type="text" id="catchy" name="catchy" class="form-control" value="{{ $article->phrase }}" required>
                </div>
                <div class="form-group col">
                    <label for="context">Content :</label>
                    <textarea class="form-control col"  id="context" name="context">{!! $article->contenu !!}</textarea>
                </div>
            </div>
        </div>
        <br><button type="submit" name="Send" class="btn btn-primary" value={{$article->id}}>Modify the article</button>
    </form>

      <script>
        ClassicEditor
            .create( document.querySelector( '#context' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

	<br><p style="text-align: center;">
		Go back to <a href="{{ route('account') }}">Home</a>.
	</p>
@endsection
