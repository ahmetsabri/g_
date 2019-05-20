 <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-section">
                        <h2>Auctions</h2>
                        <p class="lead">{{$aucation->content}}</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb30">
                                    <span class="time">
                               <i class="far fa-clock"></i> <span style="font-weight:bold;font-size: 20px; ">published at :</span> &nbsp;
                               {{$aucation->created_at->toformattedDateString()}}
                               <i class="far fa-clock"></i> :since &nbsp;
                               {{$aucation->created_at->diffForhumans()}}
                            </span>
                            </div>
                        </div>
                        <a href="{{asset($aucation->file)}}" class="btn btn-default" style="background-color:green" download>Download This Aucation</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{$aucation->featured}}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>