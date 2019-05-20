@extends('layouts.frontend')

@section('single')




<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title text-center" style="margin-top:20px;">{{$project->title}}</h1>
    </div>
</div>
<!-- End post Header -->

<!-- Post Details -->
<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{$project->featured}}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">


                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">Published at 
                                  <span style="font-size:18px;">  {{$project->created_at->toFormattedDateString()}}</span>
                                </time>

                            </span>

                            

                        </div>

                        <div class="post__content-info">

                            {!! $project->content !!}


                        </div>
                    </div>

                    <div class="socials">Share:
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_yk3c"></div>
                    </div>

                </article>




                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>


                    @include('include.disqus')
                </div>

               


            </div>

        </main>
    </div>
</div>

@endsection