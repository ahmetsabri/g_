@extends('layouts.app')

@section('content')


     <div class="card">
     <div class="card-header text-center">All Projects</div>

    <div class="card-body">
                
		<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
   @foreach($project as $project)
      <tr>
        <td>{{$project->title}}</td>
        <td><img src="{{$project->featured}}" height="50px" width="80px"></td>
        <td><a href="{{route('project.edit',['id'=>$project->id])}}" class="btn btn-info btn-sm">Edit</a></td>
        <td><a href="{{route('project.destroy',['id'=>$project->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection