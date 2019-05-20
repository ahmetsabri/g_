@extends('layouts.app')
@section('content')

@include('admin.errors')


            <div class="card">
                <div class="card-header">Create Tag</div>

                <div class="card-body">

		<form action="{{route('tag.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label>Create Tag</label>
					<input type="text" name="tag" class="form-control">
				</div>

			  <button type="submit" class="btn btn-info">Submit</button>
			</form>
                       

	</div>
</div>





@endsection