@extends('layouts.app')
@section('content')



@include('admin.errors')

<div class="card">
        <div class="card-header">Update Setting</div>
        <div class="card-body">

<form action="{{route('setting.update')}}" method="post">
	@csrf
  <div class="form-group">
    <label for="title">Site_name:</label>
    <input type="text" class="form-control" id="site_name" name="site_name" value="{{$setting->site_name}}">
  </div>

    <div class="form-group">
    <label for="title">contact_number:</label>
    <input type="text" class="form-control" id="contact_number" name="contact_phone" value="{{$setting->contact_phone}}" >
  </div>

    <div class="form-group">
    <label for="title">contact_email:</label>
    <input type="text" class="form-control" id="contact_email" name="contact_email" value="{{$setting->contact_email}}">
  </div>

  <div class="form-group">
    <label for="title">address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{$setting->address}}">
  </div>

 

  <div class="form-group">
  	<div class="text-center">
 	<button type="submit" class="btn btn-danger">Update</button>
 	</div>
	</div>
	</form>

    </div>
    </div>


@endsection