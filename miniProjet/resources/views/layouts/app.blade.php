<!DOCTYPE html>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Estates Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>tanger  </title>
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700;800&display=swap"
    rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/style-starter.css') }}">
</head>
<body>
  <!--header-->
  <div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <a class="navbar-brand pr-lg-5" href="{{url('/')}}">
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">Estates
          </a>
          <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-lg-auto">
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="services.html">Services</a>
              </li> -->
             
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
              </li>
              <li class="search-bar ml-lg-4 mt-lg-0 mt-4">
                <!--/search-right-->
                <!-- <form class="search position-relative">
                  <input type="search" class="search__input" name="search" placeholder="Search here.."
                    onload="equalWidth()" required="">
                  <span class="fa fa-search search__icon"></span>
                </form> -->

                <!--//search-right-->
              </li>

            </ul>
            <ul class="navbar-nav search-right mt-lg-0 mt-2">
              <li class="mx-3">
                <a href="#btn" class="btn btn-style btn-primary">Enquire Here</a>
              </li>

            </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!-- //header -->
  </div>
  
    @yield('content')

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
 <!-- footer17 -->
 <section class="footer-17">
    <div class="footer17_sur py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="footer17-top">
          <div class="footer17-top-left1_sur pr-lg-4">
            <h6>Contact Us</h6>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae ullam dolore.</p>
            <ul>
              <li><a href="mailto:support@Estates.com">support@Estates.com</a></li>
              <li><a href="tel:+(21) 255 989 8088">+(21) 255 989 8088</a></li>
            </ul>
            <ul class="footers-17_social">
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="footer17-top-left2_sur">
            <h6>Popular Searches</h6>
            <ul>
              <li><a href="#features">Features</a></li>
              <li><a href="#pricing">Offices for Rent</a></li>
              <li><a href="blog.html">Latest News</a></li>
              <li><a href="#help">Offices for Buy</a></li>
              <li><a href="#support">Support</a></li>
            </ul>
          </div>
          <div class="footer17-top-left3_sur">
            <h6>Quick links</h6>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="about.html#team">Join our team</a></li>
              <li><a href="contact.html">Contact us</a></li>
              <li><a href="#press">Press release</a></li>
              <li><a href="#careers">Careers</a></li>
            </ul>
          </div>
          <div class="footer17-top-left4_sur">
            <h6>Subscribe To Our Newsletter</h6>
            <p>Enter your email and receive the latest news from us.</p>
            <div class="w3l-footer-subscribe mt-4">
              <form action="#" class="subscribe" method="post">
                <input type="email" name="email" placeholder="Your Email Address" required="">
                <button><span class="fa fa-paper-plane-o pr-1"></span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        <div class="container">
          <p class="copy-footer-29">© 2020 Estates. All rights reserved | Designed by <a href="https://w3layouts.com"
              target="_blank">W3layouts</a></p>
        </div>
      </div>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </div>
  </section>
  <!-- //footer17 -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  <!-- owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 3,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- script for tesimonials agency carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-agency").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials agency carousel slider -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>