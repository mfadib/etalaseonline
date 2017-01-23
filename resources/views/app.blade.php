<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
    @foreach($webprofile as $web)
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title>BENHUL SHOP</title>
      <link rel="icon" href="{{URL::asset('images/'.$web->icon)}}"/>
      <meta name="author" content="SMARTEK Developer | RESKY ADI NUGRAHA"/>
      <meta name="application-name" content="Benhul Shop"/>
      <meta name="viewport" content="user-scalable=0,width=device-width,initial-scale=1,maximum-scale=1">

      <!-- Pllugins -->
      <link rel="stylesheet" href="{{URL::asset('assets/css/bs/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{URL::asset('assets/css/fa/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{URL::asset('assets/css/flag/css/flag-icon.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/jquery.rateyo.css')}}">

      <!-- Custom Css -->
      <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
      <link rel="stylesheet" href="{{URL::asset('assets/css/jquery-ui.css')}}">
      <link rel="stylesheet" href="{{URL::asset('assets/css/custom-responsive.css')}}">
      <link rel="stylesheet" href="{{URL::asset('assets/css/fonts.css')}}">

      <!-- Script -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <!-- <script src="{{URL::asset('assets/js/jquery.js')}}"></script> -->
      <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> -->
      <!-- <script src="{{URL::asset('assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script> -->
      <script src="{{URL::asset('assets/js/jquery-ui.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
      <script src="{{URL::asset('assets/js/custom.js')}}"></script>
      <script src="{{URL::asset('assets/css/bs/js/bootstrap.js')}}"></script>
      <script src="{{URL::asset('assets/js/jssor.slider-21.1.6.mini.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('assets/js/jquery.rateyo.js')}}"></script>
    @endforeach
    @yield("header")
    </head>

    <body>

      <div id="bot-fix"></div>

      <div id="header">
        @include("menus.header")
      </div>
      
      <!-- BreadCrumb -->
      @yield('titlebar')

        <div class="row first-content">
          @if(! \Request::is('/'))
          <div class="container">
          @endif
            @include('messages.main')
            @if(Request::is('/'))
              <div class="col-md-12 col-xs-12 p10" style="margin-top: -20px">
            @else
              @if(Auth::check() && (!Request::is('product/detail/*')) && (Auth::user()->status == 0))
                  @include('menus.member')
              <div class="col-md-9 col-xs-12 p10" style="margin-top: -20px">
              @else
              <div class="col-md-12 col-xs-12 p10" style="margin-top: -20px">
              @endif
            @endif
                @yield("content") 
            </div>


          @if(! \Request::is('/'))
          </div> <!-- Container -->
          @endif
        </div>
        <div class="container">
        @yield("content_else")
        </div>
      <div id="footer" class="fops mt20">
        @include("menus.footer")
      </div>

    </body>
</html>
@yield("footer")

<script type="text/javascript">
  $(".rate0").rateYo({
    starWidth: "15px",
    rating: 0,
    readOnly: true,
    // ratedFill: "#d30000"
  });
  $(".rate1").rateYo({
    starWidth: "15px",
    rating: 1,
    readOnly: true,
    // ratedFill: "#d30000"
  });
$(".rate2").rateYo({
    starWidth: "15px",
    rating: 2,
    readOnly: true,
    // ratedFill: "#d30000"
  });
$(".rate3").rateYo({
    starWidth: "15px",
    rating: 3,
    readOnly: true,
    // ratedFill: "#d30000"
  });
$(".rate4").rateYo({
    starWidth: "15px",
    rating: 4,
    readOnly: true,
    // ratedFill: "#d30000"
  });
$(".rate5").rateYo({
    starWidth: "15px",
    rating: 5,
    readOnly: true,
    // ratedFill: "#d30000"
  });

  $(".open-hidden").hover(function(){
    $(this).children(".this-hidden").fadeToggle();
  });

  $(".open-btn-compare").click(function(){
    $("#btn-compare").fadeIn();
  });


  $( "#accordion" ).accordion();

</script>