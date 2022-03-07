@extends('layouts.app')

@section('title','Your articles')

@section('main')
	@parent
	<h5>
		Welcome to your publications.
	</h5>

	<p>Return to my <a href="{{ route('account') }}">account</a>.</p>
	<p>Check the publications <a href="{{ route('giveLastestArticle') }}">online</a>.</p><br>
@endsection

@section('article')
	@foreach ($article as $art)
			<div class="card" style="width:300px; margin:10px; max-height:300px;" class="row">
			<!-- le corps -->
				<div class="card-body">
					<h4 class="card-title">{{ $art->titre }}</h4>
					<!-- le contenu -->
					<p class="card-text">{{ $art->phrase }}</p>
					<p class="card-text">{!! $art->contenu !!}</p> 
                    <p class="btn btn-outline-success">Published :
						@if( $art->statut == 1)
							Yes
						@else
							No
						@endif
					</p>
					<p class="btn btn-outline-success">Author : {{ $art->auteur }}</p>
                    <p class="btn btn-primary"><a style="text-decoration: none; color:white" href="{{ route('getArticleInfo', ['id' => $art->id]) }}">Modify this article</a></p>
					<p class="btn btn-info"><a style="text-decoration: none; color:white" href="{{ route('onOffPublishing', ['id' => $art->id]) }}">
						@if( $art->statut == 1)
							Unpublish the article
						@else
							Publish the article
						@endif
					</a></p><br>
					<p class="btn btn-danger"><a style="text-decoration: none; color:white" href="{{ route('deleteArticle', ['id' => $art->id]) }}">Delete articled</a></p>
				</div>
			</div><br><br>
	@endforeach 
@endsection
