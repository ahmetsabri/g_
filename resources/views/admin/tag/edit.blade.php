@extends('layouts.app')
@section('content')

@include('admin.errors')


            <div class="card">
                <div class="card-header">Edit Tag : {{$tag->tag}}</div>

                <div class="card-body">

		<form action="{{route('tag.update',['id'=>$tag->id])}}" method="post">
				@csrf
				<div class="form-group">
					<label>Tag</label>
					<input type="text" name="tag" class="form-control" value="{{$tag->tag}}">
				</div>

			  <button type="submit" class="btn btn-info">Update</button>
			</form>
                       

	</div>
</div>





@endsection