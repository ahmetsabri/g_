@extends('layouts.app')
@section('content')
@include('admin.errors')

            <div class="card">
                <div class="card-header">Create News</div>

                <div class="card-body">

		<form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>upload image</label>
					<input type="file" name="featured" class="form-control">
				</div>

			  <div class="form-group">
			    <label for="content">Content:</label>
			   	<textarea cols="7" rows="10" class="form-control" name="content"></textarea>
			  </div>


			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
                       

	</div>
</div>


@endsection