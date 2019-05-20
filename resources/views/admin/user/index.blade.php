@extends('layouts.app')

@section('content')


        <div class="card">
        <div class="card-header">All Users</div>

    <div class="card-body">
                
		<table class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Permession</th>
        <th>Delete</th>
      </tr>
    </thead>
   @foreach($user as $user)
      <tr>
        <td><img src="{{asset($user->profile->avatar)}}" height="50px" width="50px"></td>

        <td>{{$user->name}}</td>

        <td>
          @if(Auth::id() !== $user->id)
          @if($user->admin)
            <a href="{{route('user.not.admin',['id'=>$user->id])}}" class="btn btn-danger btn-sm">Remove Permession</a>
          @else
                <a href="{{route('user.admin',['id'=>$user->id])}}" class="btn btn-info btn-sm">Make Admin</a>
          @endif
          @endif
        </td>

        <td>
          @if(Auth::id() !== $user->id)
          <a href="" class="btn btn-danger btn-sm" >Delete</a></td>
          @endif

      </tr>
      @endforeach
    
  </table>
                       

</div>
</div>

@endsection