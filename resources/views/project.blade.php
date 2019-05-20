@extends('layouts.frontend')
@section('content')   
    <!-- page-header -->

    <div class="page-header" style="background-image: url('{{asset('images/page3_header.png')}} " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- blog default -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                	@foreach($projects as $project)
                    <div class="row">
                        
                             <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
                            <div class="post-block">
                                <div class="post-content">
                                    <div class="meta">
                                        <!--<span class="meta-admin">By <a href="#" class="meta-link"></a></span>-->
                                        <span>Publishef at /</span> &nbsp;
                                        <span class="meta-date">{{$project->created_at}}</span>
                                    </div>
                                    <h2 class="mb20"><a href="#" class="title text-center">{{$project->title}}</a></h2>
                                    <div class="post-img">
                                        <a href="#" class="imghover"><img src="{{$project->featured}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <!-- post block -->
                                    <p class="text-center">{{$project->content}}.</p>
                                    <div class="post-btn">
                                        <a href="" class="btn btn-default">read more</a>
                                        <a href="#" class="btn btn-default" style="background-color:green">Download</a>
                                        <div class="social-icon">
                                            
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_yk3c"></div>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                    </div>
                    @include('include.disqus')
                </div>
                        @endforeach
                    </div> 
                        <!-- pagination start -->
                        {{ $projects->onEachSide(2)->links() }}
                        <!-- pagination close -->
                    </div>
              
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <!-- widget-search -->
                    <div class=" widget widget-search">
                        <form method="get" action="{{route('search.project')}}">
                            <div class="search-form">
                                <input type="text" class="form-control" placeholder="enter the city name" name="query">
                                <button type="Submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.widget-search -->
                    <!-- widget-categories -->

                    <div class=" widget widget-categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul class="arrow arrow-right">
                        	@foreach($category as $category)
                            <li class="active"><a href="{{route('category.project',['id'=>$category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <!-- /.widget-categories -->
                   
                    <!-- widget-Tag -->
                    <div class=" widget widget-tags ">
                        <h2 class=" widget-title">Tags</h2>
                        @foreach($tag as $tag)
                        <a href="{{route('tag.project',['id'=>$tag->id])}}">{{$tag->tag}}</a>
                        @endforeach
                    </div>
                        
                    <!-- /.widget-Tag -->
                </div>
            </div>
        </div>
    </div>



@endsection

