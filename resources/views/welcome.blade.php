@extends('layouts.main')
@section('content')
<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
<!-- banner-section -->
<section class="banner-section p_relative">    
  <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
      <!-- Slide-1 -->
      <div class="slide-item p_relative">
          <div class="image-layer p_absolute" style="background-image:url({{ asset('app-front/images/banner/banner-1.jpg') }});"></div>
          <div class="auto-container">
              <div class="content-box p_relative d_block">
                  <h5 class="banner-sub-title p_relative d_block">Empowering Success</h5>
                  <h2 class="banner-title p_relative d_block">Powering Your  <br />Global <span
                     style="background-image: url({{asset('app-front/images/shape/line.png')}});"> Software Reach.</span></h2>
                  <div class="btn-box">
                      <a href="https://jidabyte.design-usa.co/about/" class="theme-btn btn-one">Read More</a>
                  </div>
              </div> 
          </div>
          <div class="pattern-layer-1" style="background-image: url({{asset('app-front/images/shape/shape-1.png')}});"></div>
          <div class="pattern-layer-2" style="background-image: url({{asset('app-front/images/shape/shape-2.png')}});"></div>
          <div class="pattern-layer-3" style="background-image: url({{asset('app-front/images/shape/shape-3.png')}});"></div>
      </div>      
      <!-- Slide-1 -->
      <div class="slide-item p_relative">
          <div class="image-layer p_absolute" style="background-image:url({{asset('app-front/images/banner/banner-2.jpg') }});"></div>
          <div class="auto-container">
              <div class="content-box p_relative d_block">
                  <h5 class="banner-sub-title p_relative d_block">Empowering Success</h5>
                  <h2 class="banner-title p_relative d_block">Seamless Software  <br /><span 
                    style="background-image: url({{asset('app-front/images/shape/line.png')}});">Distribution.</span></h2>
                  <div class="btn-box">
                      <a href="https://jidabyte.design-usa.co/about/" class="theme-btn btn-one">Read More</a>
                  </div>
              </div> 
          </div>
          <div class="pattern-layer-1" style="background-image: url({{asset('app-front/images/shape/shape-1.png')}});"></div>
          <div class="pattern-layer-2" style="background-image: url({{asset('app-front/images/shape/shape-2.png')}});"></div>
          <div class="pattern-layer-3" style="background-image: url({{asset('app-front/images/shape/shape-3.png')}});"></div>
      </div>          
  </div>
</section>
<!-- banner-section end -->
<!-- service-section -->
<section class="service-section" style="background-image: url({{asset('app-front/images/background/white-pattern-bg-1.png')}});">
  <div class="auto-container">
      <div class="title-box mb_35">
          <h5 class="sec-sub-title">Our Service List</h5>
              <div class="line-box">
                  <span class="line-1"></span>
                  <span class="line-2"></span>
                  <span class="line-3"></span>
              </div>
          <h2 class="sec-title">We Provide Solutions For <br /> Our Clients</h2>
      </div>  
  </div>
</section>
<section class="service-icon-main">
  <div class="auto-container">
      <div class="row g-3">
          <!-- column-start -->
          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="service-icon-box">
                  <div class="icon-box">
                      <div class="icon-box-inner">
                          <i class="flaticon-task-list"></i>
                      </div>
                      <h5><a href="#">Cloud Service Provider</a></h5>
                  </div>
                  <p>As a Cloud Service Provider, we deliver scalable solutions for seamless digital transformation.</p>
              </div>
          </div>
          <!-- column-start -->
          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="service-icon-box">
                  <div class="icon-box">
                      <div class="icon-box-inner">
                          <i class="flaticon-darts"></i>
                      </div>
                      <h5><a href="#">Advisory & Consulting</a></h5>
                  </div>
                  <p>Expert advisory empowers businesses, optimizing cloud strategies for sustained success.</p>
              </div>
          </div>
          <!-- column-start -->
          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="service-icon-box">
                  <div class="icon-box">
                      <div class="icon-box-inner">
                          <i class="flaticon-response"></i>
                      </div>
                      <h5><a href="#">Technology Implementation and Management</a></h5>
                  </div>
                  <p>Efficiently implementing and managing technology solutions for streamlined business operations.</p>
              </div>
          </div>
          <!-- column-start -->
          <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="service-icon-box">
                  <div class="icon-box">
                      <div class="icon-box-inner">
                          <i class="flaticon-economics"></i>
                      </div>
                      <h5><a href="#">Cloud / Software Distribution</a></h5>
                  </div>
                  <p>Enabling global access to cutting-edge software through seamless cloud distribution.</p>
              </div>
          </div>
      </div>
  </div>
</section> 
<!-- service-section-end -->

<!-- about-section -->
<section class="about-section">
  <div class="auto-container">
      <div class="row g-3">
          <!-- Image Column -->
          <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="about-image">
                  <div class="shape-1" style="background-image: url({{asset('app-front/images/shape/shape-4.png')}});"></div>
                  <div class="shape-2" style="background-image: url({{asset('app-front/images/shape/shape-5.png')}});"></div>
                  <figure class="image">
                      <img src="{{asset('app-front/images/about/about-1.png')}}" alt="">
                  </figure>
                  <div class="video-box">
                      <div class="image-box">
                          <img src="{{asset('app-front/images/about/about-2.png')}}" alt="">
                      </div>
                      <div class="play-btn">
                          <div class="valorwide_player_btn">
                              <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play"></i></a>
                          </div>     
                          <h6>Watch the video</h6>
                      </div>
                  </div>
                  <div class="shape-3" style="background-image: url({{asset('app-front/images/shape/shape-6.png')}});"></div>
              </div>
          </div>
          <!-- Content Column -->
          <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="about-content">
                  <div class="title-box">
                      <h5 class="sec-sub-title">About Us</h5>
                      <div class="line-box">
                          <span class="line-1"></span>
                          <span class="line-2"></span>
                          <span class="line-3"></span>
                      </div>
                      <h2 class="sec-title">Empowering Software <br /> <span>Expansion</span> in APAC.</h2>
                      <p>Jidabyte is a company founded by two high calibre sales management professionals with excellent track record of success in the enterprise market segment in the APAC region. The idea originated from the market need of simplified and efficient cloud /software distribution and consumption. Jidabyte aims to help global software companies to expand their footprint in APAC and, help Australian software companies to expand globally.</p>
                  </div>  
                  <div class="row upper-col">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <ul class="about-list">
                              <li>Cloud Service Provider</li>
                              <li>Advisory & Consulting</li>
                              <li>Technology Implementation and Management</li>
                          </ul>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <!--<div class="icon-box">-->
                          <!--    <div class="inner">-->
                          <!--        <i class="flaticon-badge-2"></i>-->
                          <!--        <h6>Since 2016</h6>-->
                          <!--    </div>-->
                          <!--</div>-->
                      </div>
                  </div>
                  <div class="row lower-col">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="btn-box">
                              <a href="#" class="theme-btn btn-one">Read More</a>
                          </div>
                      </div>
                      <div class="col-lg-8 col-md-6 col-sm-12">
                          <!--<div class="icon-box">-->
                          <!--    <i class="flaticon-phone"></i>-->
                          <!--    <div class="content">-->
                          <!--        <span>Need help?  Call us:</span>-->
                          <!--        <h5> (+800) 1234 5678 90</h5>-->
                          <!--    </div>-->
                          <!--</div>-->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- about-section-end -->

<!-- choose-section -->
<section class="choose-section sec-pad" style="background-image: url({{asset('app-front/images/background/choose-bg.png')}});">
  <div class="auto-container">
      <div class="title-box mb_60">
          <h5 class="sec-sub-title">What we do</h5>
          <div class="line-box">
              <span class="line-1"></span>
              <span class="line-2"></span>
              <span class="line-3"></span>
          </div>
          <h2 class="sec-title">Why You Should Choose <br /> Us</h2>
      </div> 
      <div class="row g-4">
          <!-- column-start -->
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="choose-image-box ">
                  <img src="{{asset('app-front/images/choose/choose-1.jpg')}}" alt="">
                  <div class="content">
                      <div class="icon-box">
                          <i class="flaticon-list"></i>
                      </div>
                      <h3><a href="#">Innovation</a></h3>
                      <p>Revolutionizing the industry through visionary technology, our company thrives on innovation.</p>
                      <span class="number-text">01</span>
                  </div>
              </div>
          </div>
              <!-- column-start -->
              <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="choose-image-box ">
                  <img src="{{asset('app-front/images/choose/choose-2.jpg')}}" alt="">
                  <div class="content">
                      <div class="icon-box">
                          <i class="flaticon-list"></i>
                      </div>
                      <h3><a href="#">Technological Strategists</a></h3>
                      <p>Guiding our tech landscape, our strategists pioneers future-driven solutions and growth.</p>
                      <span class="number-text">02</span>
                  </div>
              </div>
          </div>
              <!-- column-start -->
              <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="choose-image-box ">
                  <img src="{{asset('app-front/images/choose/choose-3.jpg')}}" alt="">
                  <div class="content">
                      <div class="icon-box">
                          <i class="flaticon-list"></i>
                      </div>
                      <h3><a href="#">Global Outreach</a></h3>
                      <p>With a worldwide presence, our company fosters connections and transcends borders.</p>
                      <span class="number-text">03</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- choose-section-end -->


<section class="auto-container">
  <div class="cta-section mt_140 pr_100 pl_100" style="background-image: url({{asset('app-front/images/background/cta-bg.png')}});">
      <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="image-box">
                  <div class="shape-1">
                      <img src="{{asset('app-front/images/shape/shape-7.png')}}" alt="">
                  </div>
                  <div class="shape-2">
                      <img src="{{asset('app-front/images/shape/shape-8.png')}}" alt="">
                  </div>
                  <div class="image">
                      <img src="{{asset('app-front/images/resource/cta-1.png')}}" alt="">
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-12 box-1">
              <h2>Let's we talk about the business for better grow up</h2>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 box-2">
              <div class="btn-box">
                  <a href="#" class="theme-btn btn-two">All services</a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- cta-section-end -->


<!-- contact-section -->
<section class="contact-section" id="contactUs">
  <div class="shape-1" style="background-image: url({{asset('app-front/images/shape/shape-10.png')}});"></div>
  <div class="auto-container">
      <div class="row">
          <div class="col-lg-8 col-md-6 col-sm-12">
              <div class="left-col pt_90 pb_90">
                  <div class="title-box tow mb_30">
                      <h5 class="sec-sub-title">Connect With Us</h5>
                      <div class="line-box">
                          <span class="line-1"></span>
                          <span class="line-2"></span>
                          <span class="line-3"></span>
                      </div>
                      <h2 class="sec-title">Let’s Work Together?</h2>
                  </div>
                  <div class="form-inner">
                      <form  class="default-form"> 
                          <div class="row clearfix">
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <input type="text" name="username" placeholder="Your Name">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <input type="email" name="email" placeholder="Your Email *" required="">
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                  <input type="text" name="phone" placeholder="Your Phone">
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                  <input type="text" name="subject" placeholder="Your Address">
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <textarea name="message" placeholder="Message"></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                  <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="shape-2" style="background-image: url({{asset('app-front/images/shape/shape-11.png')}});"></div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="right-col" style="background-image: url({{asset('app-front/images/shape/shape-12.png')}});">                        
                  <figure class="image clearfix">
                      <img src="{{asset('app-front/images/resource/contact-1.png')}}" alt="">
                  </figure>
              </div>                    
          </div>
      </div>
  </div>
</section>
<!-- contact-section-end -->





<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection
@section('js')
<script type="text/javascript"></script>
@endsection