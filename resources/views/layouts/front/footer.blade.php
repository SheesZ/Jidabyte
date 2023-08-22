<?php $footercms = DB::table('pages')->where('id', 6)->first(); ?>
<!-- Begin: FOOTER -->
<!-- main-footer -->
<footer class="main__footer" style="background-image: url({{asset('app-front/images/resource/map.png')}});">
  <div class="widget__section">
      <div class="auto-container">
          <div class="news__letter">
              <div class="row">
                  <div class="col-lg-6 col-md-12">
                      <div class="news__letter__left">
                          <div class="news__icon">
                              <i class="flaticon-envelope-1"></i>
                          </div>
                          <div class="news__text">
                              <h3>Subscribe</h3>
                              <p>Get latest news & events details</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                       <form class="news__letter__right">
                          <input name="email" type="email" placeholder="Enter Your Email *" required>
                          <button name="submit" type="submit">GO</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer__middel___content pb_35">
          <div class="auto-container">
              <div class="row">
                  <!--<div class="col-lg-4 col-md-4 col-sm-12">-->
                  <!--    <div class="question">-->
                  <!--        <span>Have Any Question?</span>-->
                  <!--        <h3><a href="tel:+01023456780">+ 010 2345 6780 </a></h3>-->
                  <!--    </div>-->
                  <!--</div>-->
                  <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="footer__logo text-center">
                          <figure>
                              <img src="{{asset('app-front/images/PerfTECH-Logo.png')}}" alt="">
                          </figure>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="question text-right">
                          <div class="question___data">
                              <span>Have Any Question?</span>
                              <h3><a href="mailto:info@valorwide.com">info@jidabyte.com</a></h3>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer___main__content pt_50 pb_60">
          <div class="auto-container">
              <div class="row">
                  <div class="col-lg-6 col-md-6  col-sm-12 footer-column">
                      <div class="footer__text">
                          <p>Powering Your Global Software Reach.</p>
                          <div class="footer__social__media">
                              <ul>
                                  <li><a href="#"> <i class="flaticon-linkedin"></i></a></li>
                                  <li><a href="#"> <i class="flaticon-facebook"></i></a></li>
                                  <li><a href="#"> <i class="flaticon-twitter"></i></a></li>
                                  <!-- <li><a href="#"> <i class="flaticon-dribbble"></i></a></li> -->
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                      <!--<div class="footer__middle__link">-->
                      <!--    <div class="links__widget__link">-->
                      <!--        <div class="widget-title">-->
                      <!--            <h3>Explore</h3>-->
                      <!--        </div>-->
                      <!--        <div class="widget-content">-->
                      <!--            <ul class="links-list clearfix">-->
                      <!--                 <li><a href="#">Services</a></li>-->
                      <!--                <li><a href="#">About</a></li>-->
                      <!--                <li><a href="#">Contact</a></li>-->
                      <!--            </ul>-->
                      <!--        </div>-->
                      <!--    </div>-->
                      <!--</div>-->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                      <div class="footer-widget schedule-widget ">
                          <div class="footer___gallery___image">
                              <div class="footer__gallery">
                                  <div class="inner-box">
                                      <figure class="image-box">
                                          <img src="{{asset('app-front/images/resource/footer-01.png')}}" alt="">
                                      </figure>
                                      <div class="lower-content">
                                          <div class="view-btn"><a href="{{asset('app-front/images/resource/footer-01.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="footer__gallery">
                                  <div class="inner-box">
                                      <figure class="image-box">
                                          <img src="{{asset('app-front/images/resource/footer-02.png')}}" alt="">
                                      </figure>
                                      <div class="lower-content">
                                          <div class="view-btn"><a href="{{asset('app-front/images/resource/footer-02.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="footer__gallery">
                                  <div class="inner-box">
                                      <figure class="image-box">
                                          <img src="{{asset('app-front/images/resource/footer-03.png')}}" alt="">
                                      </figure>
                                      <div class="lower-content">
                                          <div class="view-btn"><a href="{{asset('app-front/images/resource/footer-03.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="footer__gallery">
                                  <div class="inner-box">
                                      <figure class="image-box">
                                          <img src="{{asset('app-front/images/resource/footer-04.png')}}" alt="">
                                      </figure>
                                      <div class="lower-content">
                                          <div class="view-btn"><a href="{{asset('app-front/images/resource/footer-04.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="footer__gallery">
                                  <div class="inner-box">
                                      <figure class="image-box">
                                          <img src="{{asset('app-front/images/resource/footer-05.png')}}" alt="">
                                      </figure>
                                      <div class="lower-content">
                                          <div class="view-btn"><a href="{{asset('app-front/images/resource/footer-05.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="footer__gallery">
                                  <div class="inner-box">
                                      <figure class="image-box">
                                          <img src="{{asset('app-front/images/resource/footer-06.png')}}" alt="">
                                      </figure>
                                      <div class="lower-content">
                                          <div class="view-btn"><a href="{{asset('app-front/images/resource/footer-06.png')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-bottom centred pt_20 pb_20">
      <div class="auto-container">
          <div class="copyright"><p>Copyright © 2023 <a href="#">JidaByte.</a>  All rights reserved.</p></div>
      </div>
  </div>
</footer>
<!-- main-footer end -->

<!--Scroll to top-->
<div class="scroll-to-top">
  <div>
      <div class="scroll-top-inner">
          <div class="scroll-bar">
              <div class="bar-inner"></div>
          </div>
          <div class="scroll-bar-text">Go To Top</div>
      </div>
  </div>
</div>
<!-- scroll to top end -->

<!-- jquery plugins -->

<!-- END Footer -->  

