@extends('layouts.app')

@section('content')
@include('admin.errors')

<div class="card">
<div class="card-header">Create Aucation</div>
<div class="card-body">

<form action="{{route('aucation.store')}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="featured">Upload image:</label>
    <input type="file" class="form-control" id="featured" name="featured">
  </div>

  
  <div class="form-group">
  	<label>Aucation content</label>
  	<textarea cols="8" rows="10" class="form-control" name="content"></textarea>

  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-success">Submit</button>
</div>
</form>

@endsection