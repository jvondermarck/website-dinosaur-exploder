@extends('layouts.app2')

@section('title','Add an article')

@section('body')
	@parent            
    <form action="{{ route('addOneArticle') }}" method="post">
        @csrf
        <div class="container align-items-center justify-content-md-center">
            <div class="row align-items-center justify-content-md-center">
                <div class="form-group col-sm-6">
                    <label for="title">Title :</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="catchy">Catchy sentence :</label>
                    <input type="text" id="catchy" name="catchy" class="form-control" required>
                </div>
                <div class="form-group col">
                    <label for="context">Content :</label>
                    <textarea class="form-control col" id="context" name="context"></textarea>
                </div>
            </div>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" value="Add the article">
    </form>

      <script>
        ClassicEditor
            .create( document.querySelector( '#context' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

<br><p>
		Go back to <a href="{{ route('account') }}">Home</a>.
	</p>
@endsection

