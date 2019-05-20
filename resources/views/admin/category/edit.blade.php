@extends('layouts.app')
@section('content')

@include('admin.errors')


            <div class="card">
                <div class="card-header">Edit Category</div>

                <div class="card-body">

		<form action="{{route('category.update',['id'=>$category->id])}}" method="post">
				@csrf
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control" value="{{$category->name}}">
				</div>

			  <button type="submit" class="btn btn-info">Update</button>
			</form>
                       

	</div>
</div>





@endsection