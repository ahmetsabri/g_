@extends('layouts.app')

@section('content')
@include('admin.errors')

<div class="card">
<div class="card-header">Updat Aucation</div>
<div class="card-body">

<form action="{{route('aucation.update',['id'=>$aucation->id])}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$aucation->title}}">
  </div>
  <div class="form-group">
    <label for="featured">Upload image:</label>
    <input type="file" class="form-control" id="featured" name="featured">
  </div>

  
  <div class="form-group">
  	<label>Aucation content</label>
  	<textarea cols="8" rows="10" class="form-control" name="content">{{$aucation->content}}</textarea>

  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-success">Update</button>
</div>
</form>

@endsection