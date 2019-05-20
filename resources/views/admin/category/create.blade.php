@extends('layouts.app')
@section('content')

@include('admin.errors')


            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">

		<form action="{{route('category.store')}}">
				@csrf
				<div class="form-group">
					<label>name</label>
					<input type="text" name="name" class="form-control">
				</div>

			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
                       

	</div>
</div>





@endsection