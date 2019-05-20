@extends('layouts.app')
@section('content')
@include('admin.errors')

            <div class="card">
                <div class="card-header">Update News : {{$news->title}}</div>

                <div class="card-body">

		<form action="{{route('news.update',['id'=>$news->id])}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>title</label>
					<input type="text" name="title" class="form-control" value="{{$news->title}}">
				</div>
				<div class="form-group">
					<label>upload image</label>
					<input type="file" name="featured" class="form-control">
				</div>

			  <div class="form-group">
			    <label for="content">Content:</label>
			   	<textarea cols="7" rows="10" class="form-control" name="content">{{$news->content}}</textarea>
			  </div>


			  <button type="submit" class="btn btn-info">update</button>
			</form>
                       

	</div>
</div>


@endsection