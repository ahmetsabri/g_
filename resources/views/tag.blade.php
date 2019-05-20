@extends('layouts.frontend')
@section('single_tag')




	<div class="row">
		@foreach($tag->project as $project)
         <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
                            <div class="post-block">
                                <div class="post-content">
                                    <div class="meta">
                                        <span class="meta-admin">By <a href="#" class="meta-link">Admin</a></span>
                                        <span>/</span> &nbsp;
                                        <span class="meta-date">{{$project->created_at}}</span>
                                    </div>
                                    <h2 class="mb20"><a href="#" class="title text-center">{{$project->title}}</a></h2>
                                    <div class="post-img">
                                        <a href="#" class="imghover"><img src="{{$project->featured}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <!-- post block -->
                                    <p class="text-center">{{$project->content}}.</p>
                                    <div class="post-btn">
                                        <a href="{{route('single.project',['slug'=>$project->slug])}}" class="btn btn-default">read more</a>
                                        <a href="#" class="btn btn-default" style="background-color:green">Download</a>
                                        <div class="social-icon">
                                            <span><a href="#" class="btn-social btn-facebook" ><i class="fab fa-facebook"></i></a></span>
                                            <span><a href="#" class="btn-social btn-twitter"><i class="fab fa-twitter"></i></a></span>
                                            <span><a href="#" class="btn-social btn-googleplus"><i class="fab fa-google-plus"></i></a></span>
                                            <span><a href="#" class=" btn-social btn-linkedin"><i class="fab fa-linkedin"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


@endsection

