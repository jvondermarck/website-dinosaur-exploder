@extends('layouts.app')

@section('title','Article')

@section('main')
	@parent
	@if(session()->get('user') == null) 
		<p>You can signin <a href="{{ route('signin') }}">here</a> contribute to this conversation.</p><br>
	@endif
@endsection


@section('blog')
<div class="card" style="max-width:80%; " class="row" >
    <div class="card-body">
      <h5 class="card-title">{{ $article->titre }}</h5>
      <p class="card-text">{{ $article->phrase }}</p>
      <p class="card-text">{!! $article->contenu !!}</p>
      <p class="card-text"><small class="text-muted">By {{ $article->auteur }}, the {{ date('d/m/Y \a\t H\hi', strtotime($article->last_publi)) }}</small></p>
    </div>
</div><br><br>

@forelse ($comment as $com)
    {{-- <div class="card" class="d-flex flex-wrap align-self-stretch justify-content-center"> --}}
    <div class="card" style="max-width:80%; " class="row" >

        <div class="card-body">
        <p class="card-text">{!! $com->comment !!}</p>
        @if(session()->get('user') != null) 
            @if(session()->get('user')->login == $com->user_id) 
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $com }}">Edit comment</button>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered"" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit your comment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="JavaScript:myFunction()" method="post">
                      {{-- <form action="{{ route('editComment', ['id' => action="myFunction()" ]) }}" method="post"> --}}
                          @csrf
                            <div class="form-group">
                                <label for="comment" class="col-form-label">Comment:</label>
                                <textarea class="form-control" id="comment" name="comment"></textarea>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" onclick="setBtn('Save')" class="btn btn-success" value="Save" name="submitbutton">
                                <input type="submit" onclick="setBtn('Delete')" class="btn btn-danger" value="Delete" name="submitbutton">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                            </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
            </div>
            @endif
	    @endif
        <p class="card-text"><small class="text-muted">By {{ $com->user_id }}, the {{ date('d/m/Y \a\t H\hi', strtotime($com->last_publi)) }}</small></p>
        </div>
    </div><br>
@empty
    <p>No comment</p>
@endforelse

@if (session()->get('user') == null)
    <button type="button" onclick="window.location='{{ route('signin') }}'" class="btn btn-primary">Add comment</button> 
@else
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal" data-whatever="">Add comment</button>
@endif    

<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add a new comment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('addOneComment', ['id' => $article->id]) }}" method="post">
                @csrf
                <div class="form-group"></div>
                    <label for="comment" class="col-form-label">Comment:</label>
                    <textarea class="form-control" id="comment" name="comment"></textarea>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Save" name="submitbutton">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
</div>



<script type="text/javascript">
    let idComment = 0;
    let btn = "";
    let txt = "";
    var modal;

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        modal = $(this)
        idComment=recipient.id
        modal.find('.modal-body textarea').text(recipient["comment"])
    })

    $('#newModal').on('show.bs.modal', function (event) {

    })

    function setBtn(name){
        btn=name;
        txt=document.getElementById("comment").value;
    }

    function myFunction(){
        var url = '{{ route("editComment", [":id", ":btn", ":txt"]) }}';
        url = url.replace(':id', idComment);
        url = url.replace(':btn', btn);
        url = url.replace(':txt', txt);
        document.location.href=url;
    }

</script>
@endsection
