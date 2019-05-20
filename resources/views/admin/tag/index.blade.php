@extends('layouts.app')

@section('content')


        <div class="card">
        <div class="card-header">All Tags</div>

    <div class="card-body">
                
		<table class="table">
    <thead>
      <tr>
        <th>Tag</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
   @foreach($tag as $tag)
      <tr>
        <td>{{$tag->tag}}</td>
        <td><a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-info btn-sm">Edit</a></td>
        <td><a href="{{route('tag.delete',['id'=>$tag->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection