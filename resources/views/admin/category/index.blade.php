@extends('layouts.app')

@section('content')


            <div class="card">
              <div class="card-header">All Category</div>

    <div class="card-body">
                
		<table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
   @foreach($category as $category)
      <tr>
        <td>{{$category->name}}</td>
        <td><a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-info btn-sm">Edit</a></td>
        <td><a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection