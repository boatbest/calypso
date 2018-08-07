<!DOCTYPE html>
<html>
<head>
	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/gack.css">
    <!-- END HEADER -->
</head>
<body>

  <style type="text/css">
    .booking-ol-dot {
      position: initial;
      margin-top: 25px;
    }
    .booking-ol-dot .active {
      background-color: #ce0604;
    }
    .booking-fix-heige-img {
      overflow: hidden;
      height: 103vmin;
    }
    .booking-fix-heige-img img {
      width:100%;
      height:100%;
      object-fit:cover;
    }

    @media (max-width: 575.98px) {
      .booking-fix-heige-img {
          overflow: hidden;
          height: 60vmin;
      }
    }
    @media (min-width: 576px) {
      .booking-fix-heige-img {
          overflow: hidden;
          height: 55vmin;
      }
    }
    @media (min-width: 768px) {
      .booking-fix-heige-img {
          overflow: hidden;
          height: 65vmin;
      }
    }
    @media (min-width: 992px) {
      .booking-fix-heige-img {
          overflow: hidden;
          height: 85vmin;
      }
    }
    @media (min-width: 1200px) {}
    @media (min-width: 1600px) {}
  </style>



	<!-- START FOOTER -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END FOOTER -->
    <div class="wrapper">
      <section class="booking-top-section">
        <div class="top-title mx-auto">
            <img src="assets/images/Logo/logo.png" alt="Calypso logo" class="top-title-img">
        </div>
        <h2 class="text-top-title text-center">Booking</h2>
        <div class="text-top-excerpt">
          <nav class="breadcrumb justify-content-center">
            <span class="breadcrumb-item active">Booking Summary</span>
            <span class="breadcrumb-item">Customer Information</span>
            <span class="breadcrumb-item">Order Completed</span>
          </nav>
        </div>
      </section>
      <section class="booking-section bg-page-booking">
        <div class="container">
          <div class="row">
              <div class="col-12 pl-5">
                <h4 class="payment-box-title">Choose Package</h4>
              </div>
              <div class="col-12 col-xl-8">
                <form>
                  <div class="card-box">
                      <div class="card-box-header">
                        <div class="row">
                          <div class="col-7">
                            <h5 class="card-box-title">CALYPSO CABARET (TICKET ONLY)</h5>
                            <div class="icon-group"><a data-toggle="collapse" href="#moredetails1">More details <i class="fas fa-chevron-down"></i></a></div>
                          </div>
                          <div class="col-3 px-0">

                          </div>
                          <div class="col-2 px-0">

                          </div>
                        </div>
                      </div>
                      <div class="card-box-content px-4">
                        <div class="collapse" id="moredetails1">
                            <div class="details-text-editor">
                              <!-- Text editor? -->
<pre style="color:white;font-family:kanit;font-weight:300;">
PRICE INCLUDES:

Calypso Cabaret Ticket
Performance duration 70mins with 15 show numbers.
One beverage inside the theater (Drink choices as listed on ticket)
VAT and Service Charge

Daily Show Time:
First round starts at 19:30
Second round starts at 21:00
</pre>
                              <!-- end text editor? -->

                              <div class="owl-carousel owl-theme cc-gallery">
                                    <div class="item">
                                      <div class="gal-img test" href="assets/images/02.jpg">
                                         <img src="assets/images/02.jpg" />
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gal-img" href="assets/images/04.jpg">
                                         <img src="assets/images/04.jpg" />
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gal-img" href="assets/images/06.jpg">
                                         <img src="assets/images/06.jpg" />
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gal-img" href="assets/images/01.jpg">
                                         <img src="assets/images/01.jpg" />
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gal-img" href="assets/images/03.jpg">
                                         <img src="assets/images/03.jpg" />
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="gal-img" href="assets/images/05.jpg">
                                         <img src="assets/images/05.jpg" />
                                      </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="card-box">
                      <div class="card-box-header">
                          <h4 class="card-box-title">Payment Card</h4>
                      </div>
                      <div class="card-box-content px-lg-4 px-0">


                      </div>
                  </div>

                  <!-- Summary Mobile site -->
                  <div class="card-box d-md-none d-block summary-section-mobile">
                      <div class="card-box-header">
                          <h5 class="card-box-title">CALYPSO CABARET SHOW</h5>
                      </div>
                      <div class="card-box-header px-4">
                          <div class="row">
                            <div class="col-12 mb-2">
                              <span>Package Name : CALYPSO CABARET (TICKET ONLY)</span>
                            </div>
                            <div class="col-6 mb-2 text-left">
                              <span>Date</span>
                            </div>
                            <div class="col-6 mb-2 text-right">
                              <span>15 May 2018</span>
                            </div>
                            <div class="col-6 mb-2 text-left">
                              <span>Time</span>
                            </div>
                            <div class="col-6 mb-2 text-right">
                              <span>18:00</span>
                            </div>
                            <div class="col-6 mb-2 text-left">
                              <span>Person</span>
                            </div>
                            <div class="col-6 mb-2 text-right">
                              <span>3</span>
                            </div>
                          </div>
                      </div>
                      <div class="card-box-content">
                        <div class="row">
                          <div class="col-6 mb-2 text-left">
                            <span>Total</span>
                          </div>
                          <div class="col-6 mb-2 text-right">
                            <span class="mr-2">THB</span><span>2,700</span>
                          </div>
                          <div class="col-6 mb-2 text-left">
                            <span>Payment Amount</span>
                          </div>
                          <div class="col-6 mb-2 text-right sum-price">
                            <span class="mr-2">THB</span><span>2,700</span>
                          </div>
                        </div>
                      </div>
                  </div>

                  <!-- Promotion Code Mobile site -->
                  <div class="card-box d-md-none d-block summary-section-mobile">
                      <div class="card-box-content">
                        <h5 class="card-box-title pl-0">Promo Code</h5>
                        <input type="text" class="form-control cal-form w-100" id="" placeholder="ENTER YOUT COUPON">
                        <div class="w-100 text-center">
                          <button type="submit" class="btn-cal btn-cal-md mt-2">Apply</button>
                        </div>
                      </div>
                  </div>
                </form>
              </div>

              <!-- Summary Desktop site -->
              <!-- Promotion Code Desktop site -->
              <div class="col-12 col-xl-4 d-md-block d-none summary-section-desktop">
                  <div class="card-box">
                      <div class="card-box-header">
                          <h5 class="card-box-title">CALYPSO CABARET SHOW</h5>
                      </div>
                      <div class="card-box-header px-4">
                        <div class="row">
                          <div class="col-12 mb-2">
                            <span>Package Name : CALYPSO CABARET (TICKET ONLY)</span>
                          </div>
                          <div class="col-6 mb-2 text-left">
                            <span>Date</span>
                          </div>
                          <div class="col-6 mb-2 text-right">
                            <span>15 May 2018</span>
                          </div>
                          <div class="col-6 mb-2 text-left">
                            <span>Time</span>
                          </div>
                          <div class="col-6 mb-2 text-right">
                            <span>18:00</span>
                          </div>
                          <div class="col-6 mb-2 text-left">
                            <span>Person</span>
                          </div>
                          <div class="col-6 mb-2 text-right">
                            <span>3</span>
                          </div>
                        </div>
                      </div>
                      <div class="card-box-content">
                        <div class="row">
                          <div class="col-6 mb-2 text-left">
                            <span>Total</span>
                          </div>
                          <div class="col-6 mb-2 text-right">
                            <span class="mr-2">THB</span><span>2,700</span>
                          </div>
                          <div class="col-6 mb-2 text-left">
                            <span>Payment Amount</span>
                          </div>
                          <div class="col-6 mb-2 text-right sum-price">
                            <span class="mr-2">THB</span><span>2,700</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <form>
                    <div class="card-box">
                      <div class="card-box-content">
                        <h5 class="card-box-title pl-0">Promo Code</h5>
                        <input type="text" class="form-control cal-form" id="" placeholder="ENTER YOUT COUPON">
                        <div class="w-100 text-right">
                          <button type="submit" class="btn-cal btn-cal-md mt-2">Apply</button>
                        </div>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
        </div>
      </section>
      <section class="booking-slide-section bg-bottom-linear">
          <div class="container">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="booking-fix-heige-img"><img class="d-block w-100" src="assets/images/plan.gif" alt="First slide"></div>
              </div>
              <div class="carousel-item">
                <div class="booking-fix-heige-img"><img class="d-block w-100" src="assets/images/01.jpg" alt="Second slide"></div>
              </div>
              <div class="carousel-item">
                <div class="booking-fix-heige-img"><img class="d-block w-100" src="assets/images/02.jpg" alt="Third slide"></div>
              </div>
            </div>
            <ol class="carousel-indicators booking-ol-dot">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
          </div>

          </div>
      </section>


    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->
</body>
</html>


<script>


$(document).ready(function() {

    $('.owl-carousell').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            }
        }
    })

    $('.cc-gallery').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:4
            },
        }
    })

    $(".cc-gallery").lightGallery({
        thumbnail:true,
        animateThumb: false,
        showThumbByDefault: false,
        selector: '.gal-img',
    });

});


$(window).on('load', function () {


});


$('.icon-group').find('a').on('click', function(){


  setTimeout(function(){
    $('.gal-img').each(function () {
      var galwidth = $('.gal-img').width();
      $('.gal-img').css({'height':galwidth+'px'});
    });
  }, 1500);




});

</script>
