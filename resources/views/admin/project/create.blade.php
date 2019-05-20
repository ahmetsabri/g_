@extends('layouts.app')

@section('content')
@include('admin.errors')

<div class="card">
<div class="card-header">Create project</div>
<div class="card-body">

<form action="{{route('project.store')}}" enctype="multipart/form-data" method="post">
  @csrf
  <div class="form-group">
    <label for="title">City:</label>
    <input type="text" class="form-control" id="title" name="title">
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
      <option value="{{$category->id}}">{{$category->name}}</option>
       @endforeach
    </select>
  </div>


<div class="form-group">
    <label>Select Tag</label>
    @foreach($tag as $tag)
    <div class="check-box ">
    <label><input type="checkbox" name="tag[]" value="{{$tag->id}}">{{$tag->tag}}</label>
  @endforeach
    </div>
  </div>
  
  
   
  <div class="form-group">
    <label>Project content</label>
    <textarea class="form-control" rows="8" cols="8" name="content"></textarea>
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-success form-control">Submit</button>
</div>
</form>

@endsection