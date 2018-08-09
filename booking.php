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


<!-- Calypso cabaret only -->

                  <div class="card-box">
                      <div class="card-box-header addon-header">
                        <div class="row">
                          <div class="col-12 col-md-6 collpase-box">
                            <h6 class="card-box-title mb-0">CALYPSO CABARET (TICKET ONLY)</h6>
                            <div class="icon-group">
                              <a class="collapsed fade-back" data-toggle="collapse" href="#moredetails1">More details <i class="fas fa-chevron-down"></i></a>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 choose-row">
                            <div class="d-flex justify-content-end text-right">
                              <div class="show-ribbon">
                                <div class="ribbon red-ribbon">20% OFF TODAY</div>
                              </div>
                              <div class="p-2">
                                <p class="sale_price">THB 900</p>
                                <p class="normal_price">THB 1,200</p>
                              </div>
                              <div class="px-2"><button type="button" class="choose-package btn-cal btn-cal-sm mt-1">Choose</button></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-box-content px-4 collapse" id="moredetails1">
                        <!-- <div class="collapse" id="moredetails1"> -->
                          <div class="booking-package mb-2 d-none">
                            <div class="row">
                              <div class="col-lg-4 col-md-3 col-12 ">
                                <div class="form-group form-date">
                                  <label for="formGroupExampleInput">Select Date :</label>
                                  <input type="date" class="form-control cal-form" id="inlineFormInputGroup" placeholder="Select Date" required>
                                  <i class="far fa-calendar-alt"></i>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group form-time">
                                  <label for="formGroupExampleInpu2">Select Time :</label>
                                  <select class="cal-form form-control custom-select time-select" id="" required>
                                    <option selected disabled="">Select Time</option>
                                    <option value="1">17.30 - 19.30</option>
                                    <option value="2">20.00 - 22.00</option>
                                  </select>
                                  <i class="far fa-clock"></i>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-5 col-12 ">
                                <label for="formGroupExampleInput3">Seat :</label>
                                <div class="input-group mb-1 form-count">
                                  <input type="button" value="-" class="qtyminus" field="quantity">
                                  <input type="text" name="quantity" value="0" class="qty form-control" required>
                                  <input type="button" value="+" class="qtyplus" field="quantity">
                                </div>

                                <div class="ribbon orange-ribbon">Avilable Seats : 6</div>
                              </div>
                            </div>
                          </div>
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

<!-- Calypso thai restuarant + Calypso cabaret -->

                  <div class="card-box">
                      <div class="card-box-header addon-header">
                        <div class="row">
                          <div class="col-12 col-md-6 collpase-box">
                            <h6 class="card-box-title mb-0">CALYPSO THAI RESTAURANT + CALYPSO CABARET</h6>
                            <div class="icon-group">
                              <a class="collapsed fade-back" data-toggle="collapse" href="#moredetails2">More details <i class="fas fa-chevron-down"></i></a>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 choose-row">
                            <div class="d-flex justify-content-end text-right">
                              <div class="show-ribbon">
                                <div class="ribbon red-ribbon">25% OFF TODAY</div>
                              </div>
                              <div class="p-2">
                                <p class="sale_price">THB 1,500</p>
                                <p class="normal_price">THB 2,200</p>
                              </div>
                              <div class="px-2"><button type="button" class="choose-package btn-cal btn-cal-sm mt-1">Choose</button></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-box-content px-4 collapse" id="moredetails2">
                        <!-- <div class="collapse" id="moredetails1"> -->
                          <div class="booking-package mb-2 d-none">
                            <div class="row">
                              <div class="col-lg-4 col-md-3 col-12 ">
                                <div class="form-group form-date">
                                  <label for="formGroupExampleInput">Select Date :</label>
                                  <input type="date" class="form-control cal-form" id="inlineFormInputGroup" placeholder="Select Date" required>
                                  <i class="far fa-calendar-alt"></i>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group form-time">
                                  <label for="formGroupExampleInpu2">Select Time :</label>
                                  <select class="cal-form form-control custom-select time-select" id="" required>
                                    <option selected disabled="">Select Time</option>
                                    <option value="1">17.30 - 19.30</option>
                                    <option value="2">20.00 - 22.00</option>
                                  </select>
                                  <i class="far fa-clock"></i>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-5 col-12 ">
                                <label for="formGroupExampleInput3">Seat :</label>
                                <div class="input-group mb-1 form-count">
                                  <input type="button" value="-" class="qtyminus" field="quantity">
                                  <input type="text" name="quantity" value="0" class="qty form-control" required>
                                  <input type="button" value="+" class="qtyplus" field="quantity">
                                </div>

                                <div class="ribbon orange-ribbon">Avilable Seats : 6</div>
                              </div>
                            </div>
                          </div>
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

<!-- Calypso Thai restuarant (dinner only) -->

                  <div class="card-box">
                      <div class="card-box-header addon-header">
                        <div class="row">
                          <div class="col-12 col-md-6 collpase-box">
                            <h6 class="card-box-title mb-0">CALYPSO THAI RESTAURANT (DINNER ONLY)</h6>
                            <div class="icon-group">
                              <a class="collapsed fade-back" data-toggle="collapse" href="#moredetails3">More details <i class="fas fa-chevron-down"></i></a>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 choose-row">
                            <div class="d-flex justify-content-end text-right">
                              <div class="show-ribbon">
                              </div>
                              <div class="p-2">
                                <p class="sale_price">THB 800</p>
                              </div>
                              <div class="px-2"><button type="button" class="choose-package btn-cal btn-cal-sm mt-1">Choose</button></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-box-content px-4 collapse" id="moredetails3">
                        <!-- <div class="collapse" id="moredetails1"> -->
                          <div class="booking-package mb-2 d-none">
                            <div class="row">
                              <div class="col-lg-4 col-md-3 col-12 ">
                                <div class="form-group form-date">
                                  <label for="formGroupExampleInput">Select Date :</label>
                                  <input type="date" class="form-control cal-form" id="inlineFormInputGroup" placeholder="Select Date" required>
                                  <i class="far fa-calendar-alt"></i>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="form-group form-time">
                                  <label for="formGroupExampleInpu2">Select Time :</label>
                                  <select class="cal-form form-control custom-select time-select" id="" required>
                                    <option selected disabled="">Select Time</option>
                                    <option value="1">17.30 - 19.30</option>
                                    <option value="2">20.00 - 22.00</option>
                                  </select>
                                  <i class="far fa-clock"></i>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-5 col-12 ">
                                <label for="formGroupExampleInput3">Seat :</label>
                                <div class="input-group mb-1 form-count">
                                  <input type="button" value="-" class="qtyminus" field="quantity">
                                  <input type="text" name="quantity" value="0" class="qty form-control" required>
                                  <input type="button" value="+" class="qtyplus" field="quantity">
                                </div>

                                <div class="ribbon orange-ribbon">Avilable Seats : 6</div>
                              </div>
                            </div>
                          </div>
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


                  <!-- Summary Mobile site -->
                  <div class="card-box summary-section-mobile mobile-booking-summary">
                    <div class="card-box">
                        <div class="card-box-header">
                            <h5 class="card-box-title">Booking Details</h5>
                            <span class="card-box-title ticket-type">Package Name : CALYPSO CABARET (TICKET ONLY)</span>
                            <div class="row card-box-title">
                              <div class="col-6">
                                <span>Date : </span><span class="ticket-details-small">15 May 2018</span>
                              </div>
                              <div class="col-6">
                                <span>Date : </span><span class="ticket-details-small">18.00</span>
                              </div>
                            </div>
                        </div>
                        <div class="card-box-content">
                          <div class="row sum-details">
                            <div class="col-6 mb-2 text-left">
                              <span class="ticket-details-small">person</span>
                            </div>
                            <div class="col-2 mb-2 text-left">
                              <span class="ticket-details-small">3</span>
                            </div>
                            <div class="col-4 mb-2 text-right">
                              <span class="ticket-details-small">2,700</span>
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
                            <div class="col-12 text-right booking-form-button">
                              <button type="submit" class="btn-cal btn-cal-md mt-2 mr-2 reset">Reset</button>
                              <button type="submit" class="btn-cal btn-cal-md mt-2">Buy</button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <!-- Promotion Code Mobile site -->
                  <div class="card-box summary-section-mobile mobile-booking-summary">
                    <div class="card-box">
                      <div class="card-box-header px-4">
                        <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Instant Confirmation</p>
                        <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Best Price Guarantee</p>
                        <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Best Seat Arrangement</p>
                        <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Net price</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <!-- Summary Desktop site -->
              <!-- Promotion Code Desktop site -->
              <div class="offset-xl-0 offset-4 col-8 col-xl-4 summary-section-desktop desktop-booking-summary">
                <div class="sticky-summary">
                  <div class="card-box">
                      <div class="card-box-header">
                          <h5 class="card-box-title">Booking Details</h5>
                          <span class="card-box-title ticket-type">Package Name : CALYPSO CABARET (TICKET ONLY)</span>
                          <div class="row card-box-title">
                            <div class="col-6">
                              <span>Date : </span><span class="ticket-details-small">15 May 2018</span>
                            </div>
                            <div class="col-6">
                              <span>Date : </span><span class="ticket-details-small">18.00</span>
                            </div>
                          </div>
                      </div>
                      <div class="card-box-content">
                        <div class="row sum-details">
                          <div class="col-6 mb-2 text-left">
                            <span class="ticket-details-small">person</span>
                          </div>
                          <div class="col-2 mb-2 text-left">
                            <span class="ticket-details-small">3</span>
                          </div>
                          <div class="col-4 mb-2 text-right">
                            <span class="ticket-details-small">2,700</span>
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
                          <div class="col-12 text-right booking-form-button">
                            <button type="submit" class="btn-cal btn-cal-md mt-2 mr-2 reset">Reset</button>
                            <button type="submit" class="btn-cal btn-cal-md mt-2">Buy</button>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card-box">
                    <div class="card-box-header px-4">
                      <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Instant Confirmation</p>
                      <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Best Price Guarantee</p>
                      <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Best Seat Arrangement</p>
                      <p class="mb-1"><i class="fas fa-caret-right mr-2"></i>Net price</p>
                    </div>
                  </div>
              </div>
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

    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });

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
                items:2
            },
            768:{
                items:4
            },

        }
    })

    $(".cc-gallery").lightGallery({
        thumbnail:true,
        animateThumb: false,
        showThumbByDefault: true,
        selector: '.gal-img',
    });


    $('.choose-package').on('click', function(){
      $('.choose-package').not(this).each(function(){
        if($(this).text() == 'Choosed'){
          $(this).closest('.row').find('.collpase-box a').click();
          $(this).closest('.card-box').find('.card-box-content .booking-package').toggleClass('d-none');
          $(this).closest('form').find("input[type=text]").val("0");
          $(this).closest('form').find("input[type=date]").val("");
          $(this).closest('form').find("select").prop("selectedIndex", 0);
          $(this).closest('.card-box-header').find('.icon-group a').toggleClass('fade-away fade-back');
          $(this).text('Choose');
        }
      });

      if($(this).text() == 'Choose'){
        if(($(this).closest('.row').find('.collpase-box a').hasClass('collapsed'))){
          $(this).closest('.row').find('.collpase-box a').click();
          $(this).closest('.card-box-header').find('.icon-group a').toggleClass('fade-away fade-back');
        }
        $(this).closest('.card-box').find('.card-box-content .booking-package').toggleClass('d-none');
        $(this).text('Choosed');
      }
      else{
        if(!($(this).closest('.row').find('.collpase-box a').hasClass('collapsed'))){
          $(this).closest('.row').find('.collpase-box a').click();
          $(this).closest('.card-box-header').find('.icon-group a').toggleClass('fade-away fade-back');
        }
        $(this).closest('.card-box').find('.card-box-content .booking-package').toggleClass('d-none');
        $(this).closest('form').find("input[type=text]").val("0");
        $(this).closest('form').find("input[type=date]").val("");
        $(this).closest('form').find("select").prop("selectedIndex", 0);
        $(this).text('Choose');
      }
    });

    $('.reset').on('click', function(){
      $('form').find("input[type=text]").val("0");
      $('form').find("input[type=date]").val("");
      $('form').find("select").prop("selectedIndex", 0);
    });

});


$(window).on('load', function () {

  if (window.matchMedia("(max-width: 768px)").matches) {
    var galheight = $('.card-box-header').width() / 3 ;
    $('.gal-img').css({'height':galheight+'px'});
  }
  else{
    var galheight = $('.card-box-header').width() / 6 ;
    $('.gal-img').css({'height':galheight+'px'});
  }

});

$(window).on('resize', function () {

  if (window.matchMedia("(max-width: 768px)").matches) {
    var galheight = $('.card-box-header').width() / 3 ;
    $('.gal-img').css({'height':galheight+'px'});
  }
  else{
    var galheight = $('.card-box-header').width() / 6 ;
    $('.gal-img').css({'height':galheight+'px'});
  }
});


</script>
