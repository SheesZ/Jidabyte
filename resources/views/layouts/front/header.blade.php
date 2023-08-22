<?php $segment = Request::segments();?>
<!-- main header -->
<div class="valorwide_preloader">
    <div class="valorwide_preloader bg-black d-flex justify-content-center align-items-center">
    <div class="valorwide_preloader_in">
        <img src="{{asset('app-front/images/favicon.png')}}" alt="Logo">
    </div>
    </div>
</div>    
<!-- preloader end -->
<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left"><a href="index-2.html"><img src="{{asset('app-front/images/JidaByte-logo-white.png')}}" alt=""></a></figure>
            <div class="close-search pull-right"><span class="fa fa-times"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="#">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<header class="main-header">
  <!-- header-top -->
  <div class="header-top">
      <div class="top-inner">
          <div class="top-left">
              <ul class="info-list clearfix">
                  <li>Email: <a href="mailto:info@jidabyte.com">info@jidabyte.com</a></li>
                  <li>Address: <span>Sydney, Australia</span></li>
              </ul>
          </div>
          <div class="top-right">
              <!--<ul class="info-list clearfix">-->
              <!--    <li><a href="#">FAQ</a></li>-->
              <!--    <li><a href="#">Help</a></li>-->
              <!--    <li><a href="https://jidabyte.design-usa.co/contact">Contact</a></li>-->
              <!--</ul>-->
          </div>
      </div>
  </div>
  <!-- header-lower -->
  <div class="header-lower">
      <div class="outer-box">
          <div class="logo-box">
              <figure class="logo"><a href="https://jidabyte.design-usa.co/"><img src="{{asset('app-front/images/JidaByte-logo-white.png')}}" alt=""></a></figure>
          </div>
          <div class="menu-area">
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler">
                  <i class="icon-bar"></i>
                  <i class="icon-bar"></i>
                  <i class="icon-bar"></i>
              </div>
              <!--<nav class="main-menu navbar-expand-md navbar-light clearfix">-->
              <!--    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">-->
              <!--        <ul class="navigation clearfix">-->
              <!--            <li class="current"><a href="#">Home</a>-->
                            
              <!--            </li> -->
              <!--            <li class="dropdown"><a href="#">Services</a>-->
              <!--                <ul>-->
              <!--                    <li><a href="#">Cloud Service Provider</a></li>-->
              <!--                    <li><a href="#">Advisory & Consulting</a></li>-->
              <!--                    <li><a href="#">Technology Implementation and Management</a></li>-->
              <!--                    <li><a href="#">Cloud / Software Distribution</a></li>-->
              <!--                </ul>-->
              <!--            </li> -->
                         
              <!--            <li><a href="https://jidabyte.design-usa.co/about">About Us</a></li> -->
              <!--            <li><a href="https://jidabyte.design-usa.co/contact">Contact</a></li> -->
              <!--        </ul>-->
              <!--    </div>-->
              <!--</nav>                      -->
          </div>
          <ul class="menu-right-content">
              <!--<li class="search-box-outer search-toggler">-->
              <!--    <i class="flaticon-loupe"></i>-->
              <!--</li>-->
              <li class="btn-box">
                  <a href="#contactUs" class="theme-btn btn-one">Contact Us</a>
              </li>
          </ul>
      </div>
  </div>
  <!--sticky Header-->
  <div class="sticky-header">
      <div class="outer-container">
          <div class="outer-box">
              <div class="logo-box">
                  <figure class="logo"><a href="#"><img src="{{asset('app-front/images/JidaByte-logo-white.png')}}" alt=""></a></figure>
              </div>
              <div class="menu-area">
                  <nav class="main-menu clearfix">
                      <!--Keep This Empty / Menu will come through Javascript-->
                  </nav>
                  <ul class="menu-right-content">
                      <!--<li class="search-box-outer search-toggler">-->
                      <!--    <i class="flaticon-loupe"></i>-->
                      <!--</li>-->
                      <li class="btn-box">
                          <a href="#contactUs" class="theme-btn btn-one">Contact Us</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>

<div class="mobile-menu">
  <div class="menu-backdrop"></div>
  <div class="close-btn"><i class="fas fa-times"></i></div>
  
  <nav class="menu-box">
      <div class="nav-logo"><a href="#"><img src="{{asset('app-front/images/JidaByte-logo-white.png')}}" alt="" title=""></a></div>
      <div class="menu-outer"></div>
      <div class="contact-info">
          <h4>Contact Info</h4>
          <ul>
              <!--<li></li>-->
              <!--<li><a href="tel:+00-123456789">+00-123456789</a></li>-->
              <li><a href="mailto:info@example.com">info@jidabyte.com</a></li>
          </ul>
      </div>
      <div class="social-links">
          <ul class="clearfix">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
          </ul>
      </div>
  </nav>
</div><!-- End Mobile Menu -->