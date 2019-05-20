@extends('layouts.app')

@section('content')


            <div class="card">
              <div class="card-header text-center">All Aucation</div>

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
   @foreach($aucation as $aucation)
      <tr>
        <td>{{$aucation->title}}</td>
        <td><img src="{{$aucation->featured}}" height="50px" width="80px"></td>
        <td><a href="{{route('aucation.edit',['id'=>$aucation->id])}}" class="btn btn-info btn-sm">Edit</a></td>
        <td><a href="{{route('aucation.delete',['id'=>$aucation->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection