@extends('layouts.app')

@section('content')


            <div class="card">
              <div class="card-header text-center">All News</div>

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
   @foreach($news as $news)
      <tr>
        <td>{{$news->title}}</td>
        <td><img src="{{$news->featured}}" height="50px" width="80px"></td>
        <td><a href="{{route('news.edit',['id'=>$news->id])}}" class="btn btn-info btn-sm">Edit</a></td>
        <td><a href="{{route('news.delete',['id'=>$news->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection