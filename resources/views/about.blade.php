@extends('layouts.app')

@section('title','About')

@section('main')
	@parent

  <div class="container">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="usr">Name:</label>
        <input type="text" class="form-control" id="usr">
      </div>
      <div class="form-group col-md-6">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
      </div>
    </div>
  </div>
    
@endsection
