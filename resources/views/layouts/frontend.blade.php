<!DOCTYPE html>
<html lang="en">

<head>
    
    <title> {{$setting->site_name}}</title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello-ie7-codes.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello-codes.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello-embedded.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello-ie7.css')}}" rel="stylesheet">


    <!-- Style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!--style css with update-->
    <link rel="stylesheet" href="{{asset('css/update_css.css')}}">
    
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


  @section('content')
  @show

  @yield('single')

  @yield('category')

  @yield('single_tag')
   
 

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
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c0a65923e769568"></script>

</body>

</html>