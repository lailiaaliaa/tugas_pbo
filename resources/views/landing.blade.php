<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Landing PBO</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/bootstrap.min.css')}}">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style.css')}}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('landing/css/responsive.css')}}">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('landing/css/jquery.mCustomScrollbar.min.css')}}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css.favicon.icon')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
</head>

<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <div class="togle_6">
                <div class="menu_main">
                  <div class="padding_left0"><a href="#"></a>
                    <span class="padding_left0"><a href="/masuk"></a></span>
                  </div>
                </div>
              </div>
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="/masuk">Masuk</a>
                </div>
              </div>
              <span class="navbar-toggler-icon"></span>
              <span onclick="openNav()"><img src="{{ asset('landing/images/toggle-icon.png')}}" class="toggle_menu"></span>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h1 class="banner_taital">Pembayaran</h1>
            <h1 class="banner_taital_1">SPP SEKOLAH</h1>
            <div class="contact_bt"></span></a></div>
          </div>
          <div class="col-sm-2">

          </div>
          <div class="col-sm-5">
            <div><img src="{{ asset('landing/images/banner-img.png')}}" width="45px" width="50px" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </div>
  <!-- header section end -->
  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Sistem</span> <img src="{{ asset('landing/images/icon-1.png')}}"> <span
          style="color: #1f1f1f">Pembayaran</span></h1>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">TRANSFER</h3>
                    <p class="lorem_text active"> M-Banking, Shoppepay, OVO </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">CASH</h3>
                    <p class="lorem_text">Pembayaran di muka</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- Javascript files-->
  <script src="{{ asset('landing/js/jquery.min.js')}}"></script>
  <script src="{{ asset('landing/js/popper.min.js')}}"></script>
  <script src="{{ asset('landing/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing/js/jquery-3.0.0.min.js')}}"></script>
  <script src="{{ asset('landing/js/plugin.js')}}"></script>
  <!-- sidebar -->
  <script src="{{ asset('landing/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{ asset('landing/js/custom.js')}}"></script>
  <!-- javascript -->
  <script src="{{ asset('landing/js/owl.carousel.js')}}"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function () {

        $(this).addClass('transition');
      }, function () {

        $(this).removeClass('transition');
      });
    });
  </script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>
