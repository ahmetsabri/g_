<!DOCTYPE html>
<html lang="en">

<head>
    
    <title> {{$title}}</title>
     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!--style css with update-->
    <link rel="stylesheet" href="{{asset('css/test.css')}}">
    
    <!-- Owl Carousel CSS -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontello.css')}}">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">



</head>

<body>
    
    <!-- header-section-->
  @include('include.header')
    <!-- /. header-section-->
    <!-- slider -->
    <div class="slider" >
        <div class="owl-carousel owl-one owl-theme" >
            <div class="item">
                 <div style="background-color: rgba(255,255,255,.3);">
                <div class="slider-img "> <img src="{{$first_news->featured}}" alt=""></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-captions" style="color: red;font-size: 20px;background-color: rgba(255,255,250,.1);" >
                                {{$first_news->content}}
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div style="background-color: rgba(255,255,255,.3);">
                <div class="slider-img"><img src="{{$second_news->featured}}" alt="" ></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-captions" style="color: red;font-size: 20px;background-color: rgba(255,255,250,.1);" >
                                {{$first_news->content}}
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div style="background-color: rgba(255,255,255,.3);">
                <div class="slider-img"><img src="{{$third_news->featured}}" alt="" ></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-captions" style="color: red;font-size: 20px;background-color: rgba(255,255,250,.1);" >
                                {{$first_news->content}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /.slider -->
    <!-- Category of investment -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        
                            <img src="{{asset('images/page2_header.png')}}" alt="">
                        
                        <div class="service-content">
                            <br>
                             <h4 style=" padding-bottom: 20px "><li class="list-group-item">
                               Industry Investment </li></h4>
                            <p style="background-color: gray; color: white">Industrial investments are mainly focused on financing industrial companies, industrial investments and mergers & acquisitions. Industrial investments are closely aligned with Finland’s interests and are used to finance companies with industrial operations as well as investments in new plants, new equipment and expansion projects.  Financing packages for M&As are often created to build larger and internationally stronger corporate entities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                        
                            <img src="{{asset('images/pexels-photo-905874.jpeg')}}" alt="">
                        
                        <div class="service-content">
                            <br>
                            <h4 style=" padding-bottom: 20px "><li class="list-group-item">
                               Medical Investment </li></h4>
                                
                            <p style="background-color: gray;color: white" >The healthcare sector is made up of many different industries – from pharmaceuticals and devices to health insurers and hospitals – and each has different dynamics. Investments in this sector are affected by many variables, including positive trends related to demographics and negative trends related to reimbursement.
                            Healthcare investing requires a multifaceted approach to understand the underlying drivers
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                       
                            <img src="{{asset('images/pexels-photo-207691.jpeg')}}"  alt="">
                       
                        <div class="service-content">
                            <br>
                            <h4 style=" padding-bottom: 20px "><li class="list-group-item">
                               Education Investment </li></h4>
                            <p style="background-color: gray; color: white">An educational investment is an agreement between a sponsor and a student, where the sponsor agrees to provide the student with funding for his or her college education in exchange for a fixed percentage of the student’s income after graduation for a set period of time.
                            This is in contrast with traditional student loans with level repayment plans, where the borrower agrees to pay a fixed dollar amount each month for a set period of time.
                             </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="service-block">
                       
                            <img src="{{asset('images/pexels-photo-1072824.jpeg')}}"  alt="">
                        
                        <div class="service-content">
                             <br>
                            <h4 style=" padding-bottom: 20px "><li class="list-group-item">
                               AgriCulture Investment </li></h4>
                            <p style="background-color: gray; color: white">An investment farm is an agricultural business operation that is purchased and operated with the intention of making a profit, or with the goal of creating a tax deduction for the owner. Agribusiness is the business sector encompassing farming and farming-related commercial activities.
                            Investment farms are owned by investors who typically do not live on the farm or take part in any day-to-day operations. The investor will generally hire farm hands .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.category investment -->
    <!--partner-logo -->
    <div class="space-medium bg-light ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                  <div class="logo-img">  <img src="./images/partner_logo_1.png" alt="" class="img-responsive" ></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                   <div class="logo-img">  <img src="./images/partner_logo_2.png" alt="" class="img-responsive"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="logo-img"> <img src="./images/partner_logo_3.png" alt="" class="img-responsive"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                   <div class="logo-img">  <img src="./images/partner_logo_4.png" alt="" class="img-responsive"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="logo-img"> <img src="./images/IMG-20190319-WA0010.jpg" alt="" class="img-responsive"></div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                   <div class="logo-img"> <img src="./images/IMG-20190319-WA0011.jpg" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <!--partner-logo -->
    <!--aucation -->
   @include('include.aucation')
    <!--/.aucation -->
    <hr>
    <!-- cta -->
   
    <!-- /.cta -->
    <!-- customer opnion-->

 @include('include.customer_opnion')
    <!-- /customer opnion -->

    <!-- /.blog -->
 @include('include.footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/menumaker.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sticky-header.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/multiple-carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fontawesome-all.js')}}"></script>
</body>

</html>