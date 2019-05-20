@extends('layouts.app')

@section('content')


        <div class="card">
        <div class="card-header">All Expert Asks</div>

    <div class="card-body">
                
		<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Delete</th>
      </tr>
    </thead>
   @foreach($expert as $expert)
      <tr>
        <td>{{$expert->name}}</td>
        <td>{{$expert->email}}</td>
        <td>{{$expert->phone}}</td>
        <td>{{$expert->message}}</td>
        <td><a href="{{route('expert.form.delete',['id'=>$expert->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection