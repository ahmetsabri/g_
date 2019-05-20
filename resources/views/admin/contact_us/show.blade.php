@extends('layouts.app')

@section('content')


        <div class="card">
        <div class="card-header">All Client Contact </div>

    <div class="card-body">
                
		<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>subject</th>
        <th>Message</th>
        <th>Delete</th>
      </tr>
    </thead>
   @foreach($contact as $contact)
      <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->message}}</td>
        <td>{{$contact->message}}</td>
        <td><a href="{{route('contact.destroy',['id'=>$contact->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection