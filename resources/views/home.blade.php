@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-4">
    <div class="card ">
        <div class="card-header text-center card bg-danger">Published Project</div>

        <div class="card-body text-center ">
            <h1>{{$project->count()}}</h1>
        </div>
</div>
</div>


<div class="col-lg-4">
    <div class="card ">
        <div class="card-header text-center card bg-success">Aucaion</div>

        <div class="card-body text-center ">
            <h1>{{$aucation->count()}}</h1>
        </div>
</div>
</div>


<div class="col-lg-4">
    <div class="card ">
        <div class="card-header text-center card bg-info">Users</div>

        <div class="card-body text-center ">
            <h1>{{$user->count()}}</h1>
        </div>
</div>
</div>
</div>
<br><br>

<div class="row">
<div class="col-lg-4">
    <div class="card ">
        <div class="card-header text-center card bg-danger">Category</div>

        <div class="card-body text-center ">
            <h1>{{$category->count()}}</h1>
        </div>
</div>
</div>
<div class="col-lg-4">
    <div class="card ">
        <div class="card-header text-center card bg-success">News</div>

        <div class="card-body text-center ">
            <h1>{{$news->count()}}</h1>
        </div>
</div>
</div>
</div>







@endsection
