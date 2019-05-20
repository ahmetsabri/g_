@extends('layouts.frontend')
@section('content')


  <div class="page-header" style="background-image: url('{{asset('images/page3_header.png')}} " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- service -->
    <br><br>
    <div class="text-center btn btn-success" style="margin-left:40% ">Currencies you can invest in</div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon">
                            <img src="{{asset('images/euro.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="#" class="title">
                               Euro</a></h4>
                            <p>You can invest in Egypt through different currencies and currencies available at this time including the Euro</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon">
                            <img src="{{asset('images/dollar.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4> <a href="#" class="title">
                               Dollar </a></h4>
                            <p>You can invest in Egypt through different currencies and currencies available at this time including the dollar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon">
                            <img src="{{asset('images/pound-sterling.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="#"  class="title">
                                pound-sterling </a></h4>
                            <p>You can invest in Egypt through different currencies and currencies available at this time including the Pound-Sterling</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon">
                            <img src="{{asset('images/pound.png')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h4><a href="#"  class="title">
                               Egyption pound</a></h4>
                            <p>You can invest in Egypt through different currencies and currencies available at this time including the Egyption Pound</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.service -->
    <!-- cta-wrapper -->
   
<div>
    
    <video width="700px" height="400px" controls style="margin-left:10%">
        <source src="{{asset('video/investment.mp4')}}" type="video/mp4">

    </video>
</div>


@endsection