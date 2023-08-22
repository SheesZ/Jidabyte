<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=6">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Contact Us | Jida Byte</title>


<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/inc/css.html");
?>


</head>

<body>

<div class="boxed_wrapper">

<!-- preloader -->

<div class="valorwide_preloader">
    <div class="valorwide_preloader bg-black d-flex justify-content-center align-items-center">
    <div class="valorwide_preloader_in">
        <img src="../assets/images/favicon.png" alt="Logo">
    </div>
    </div>
</div>    

<!-- preloader end -->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left"><a href="index-2.html"><img src="../assets/images/PerfTECH-Logo.png" alt=""></a></figure>
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

<?php include($root."/inc/header.php");?>

<!-- page-title-section -->
<section class="page-title-section p_relative text-center" style="background-image: url(../assets/images/resource/page-title.jpg);">
    <div class="shape-1" style="background-image: url(../assets/images/shape/shape-34.png);"></div>
    <div class="shape-2" style="background-image: url(../assets/images/shape/shape-35.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb clearfix">
                <li class="dropdown"><a href="https://jidabyte.design-usa.co/">Home</a></li>
                <li>Contact</li>
            </ul>
            <h1>Contact</h1>
        </div>
    </div>
</section>
<!-- page-title-section-end -->

<!-- Contact-us-section -->
<section class="contact-section two sec-pad">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-7 col-md-6">
                <div class="title-box text-start mb_30">
                    <h5 class="sec-sub-title">contact us</h5>
                    <div class="line-box">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </div>
                    <h2 class="sec-title">Ready to get started?</h2>
                    <p class="text">Your email address will not be published. Required fields are <br />marked *</p>
                </div>
                <div class="form-inner">
                    <form  class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-xl-12 form-group">
                                <input type="text" name="username" placeholder="Your Name">
                            </div>
                            <div class="col-xl-12 form-group">
                                <input type="email" name="email" placeholder="Your Email *" required="">
                            </div>
                            <div class="col-xl-12 form-group">
                                <input type="text" name="phone" placeholder="Your Phone">
                            </div>
                            <div class="col-xl-12 form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-xl-12 form-group message-btn centred">
                                <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="title-box text-start mb_30">
                    <h5 class="sec-sub-title">Our Location</h5>
                    <div class="line-box">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </div>
                    <h2 class="sec-title">Get in touch</h2>
                    <p class="text pr_90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="info-box">
                    <!-- icon-box -->
                    <div class="icon-box">
                        <div class="icon-1">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <h4>Our Address</h4>
                            <p>2750 Quadra Street Victoria Road, New York, <br/>Canada</p>
                        </div>
                    </div>
                    <!-- icon-box -->
                    <div class="icon-box">
                        <div class="icon-1">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div class="info-text">
                            <h4>Contact Number</h4>
                            <ul class="phone-number">
                                <li><a href="tel:(+44)457895789">Mobile: (+44) - 45789 - 5789</a></li>
                                <li><a href="tel:(+44)457899988">Mobile: (+44) - 45789 - 9988</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- icon-box -->
                    <div class="icon-box">
                        <div class="icon-1">
                            <i class="fa fa-phone-volume"></i>
                        </div>
                        <div class="info-text">
                            <h4>Email Address</h4>
                            <ul class="email-add">
                                <li><a href="mailto:info@valorwide.com">Mail: info@jidabyte.com</a></li>
                                <li><a href="mailto:help@valorwide.com">Mail: customersupport@jidabyte.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-us-section-end -->

<!-- map-section -->
<section class="map-section">
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
</section>
<!-- map-section-end-->

<?php include($root."/inc/footer.php");?>

</div>



</body><!-- End of .page_wrapper -->

</html>
