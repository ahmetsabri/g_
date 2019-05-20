@extends('layouts.app')

@section('content')
@include('admin.errors')

<div class="card">
<div class="card-header">Update project</div>
<div class="card-body">

<form action="{{route('project.update',['id'=>$project->id])}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
  </div>
  <div class="form-group">
    <label for="featured">Upload image:</label>
    <input type="file" class="form-control" id="featured" name="featured">
  </div>

  <div class="form-group">
    <label for="featured">Upload file:</label>
    <input type="file" class="form-control" id="file" name="file">
  </div>

  <div class="form-group">
    <label>Select Category</label>
    <select class="form-control" name="category_id">
      @foreach($category as $category)
      <option value="{{$category->id}}" 
       @if($category->id == $project->category->id)
       selected
       @endif
        >
        {{$category->name}}
      </option>
       @endforeach
    </select>
  </div>


  <div class="form-group">
    <label>Select Tag</label>
    @foreach($tag as $tag)
    <div class="check-box ">
    <label><input type="checkbox" name="tag[]" value="{{$tag->id}}" 
      @foreach($project->tag as $t)
      @if($tag->id == $t->id)
      checked
      @endif
      @endforeach

      >
      {{$tag->tag}}</label>
  @endforeach
    </div>
  </div>
  
  <div class="form-group">
  	<label>Project content</label>
  	<textarea cols="8" rows="10" class="form-control
  	" name="content">{{$project->content}}</textarea>

  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-success">Update</button>
</div>
</form>

@endsection