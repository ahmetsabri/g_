@extends('layouts.frontend')
@section('content')

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title text-center"><br>Search result is : {{$query}}</h1>
    </div>
</div>

<div style="margin-top:200px;"></div>



<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
            <div class="row">
                @if($project->count() > 0)
                @foreach($project as $project)
                <div class="row">
                             <div class="col-lg-12  col-sm-8 col-md-8 col-xs-8 ">
                            	<div class="post-block">
                                <div class="post-content">
                                    <div class="meta">
                                        <span class="meta-admin">Publishe in /</span>
                                       
                                        <span class="meta-date">{{$project->created_at->toFormattedDateString()}}</span>
                                    </div>
                                    <h2 class="mb20"><a href="#" class="title">{{$project->title}}</a></h2>
                                    <div class="post-img">
                                        <a href="#" class="imghover"><img src="{{$project->featured}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <!-- post block -->
                                    <p class="text-center">{{str_limit($project->content , 100 )}}</p>
                                    <div class="post-btn">
                                        <a href="{{route('single.project',['slug'=>$project->slug])}}" class="btn btn-default">read more</a>
                                        <a href="#" class="btn btn-default" download style="background-color:green ">Download</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   

                </div>
                @endforeach
                @else
                    no request here
                    @endif
            </div>
        </main>
    </div>
</div>
<div style="margin-top:100px;"></div>




@endsection