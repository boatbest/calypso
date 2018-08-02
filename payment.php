<!DOCTYPE html>
<html>
<head>
	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/gack.css">
    <!-- END HEADER -->
</head>
<body>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>



	<!-- START FOOTER -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END FOOTER -->
    <div class="wrapper">


      <section class="payment-section">
          <div class="container">
              <div class="top-title mx-auto">
                  <img src="assets/images/Logo/logo.png" alt="Calypso logo" class="top-title-img">
              </div>
              <h2 class="text-top-title text-center">Booking</h2>
              <div class="text-top-excerpt">
                <nav class="breadcrumb justify-content-center">
                  <a class="breadcrumb-item" href="#">Booking Summary</a>
                  <span class="breadcrumb-item active">Customer Information</span>
                  <span class="breadcrumb-item">Order Completed</span>
                </nav>
              </div>
              <div class="row">
                  <div class="col-12 col-xl-8">
                    <form>
                      <div class="card-box">
                          <div class="card-box-header">
                              <h4 class="card-box-title">Traveler's Infarmation</h4>
                          </div>
                          <div class="card-box-content px-4">
                              <h5 class="payment-box-title">CALYPSO CABARET (TICKET ONLY)</h5>
                              <div class="row">
                                  <div class="col-xl-2 col-lg-2 col-md-3 col-12">
                                    <div class="form-group">
                                      <label for="formGroupExampleInput">Title<span class="text-red">*</span> :</label>
                                      <select class="cal-form form-control custom-select" id="">
                                         <option selected></option>
                                         <option value="mr">Mr.</option>
                                         <option value="ms">Ms.</option>
                                         <option value="mrs">Mrs.</option>
                                       </select>
                                    </div>
                                  </div>
                                  <div class="col-xl-5 col-lg-5 col-md-4 col-12">
                                    <div class="form-group">
                                      <label for="formGroupExampleInpu2">First Name<span class="text-red">*</span> :</label>
                                      <input type="text" class="form-control cal-form" id="" placeholder="Please enter your first name">
                                    </div>
                                  </div>
                                  <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                                    <div class="form-group">
                                      <label for="formGroupExampleInput3">Family Name<span class="text-red">*</span> :</label>
                                      <input type="text" class="form-control cal-form" id="" placeholder="Please enter your family name">
                                    </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="formGroupExampleInpu2">Phone Number<span class="text-red">*</span> :</label>
                                      <input type="text" class="form-control cal-form" id="" placeholder="Please enter your first name">
                                    </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                      <label for="formGroupExampleInput">Country/Region of Travel Document<span class="text-red">*</span> :</label>
                                      <select class="cal-form form-control custom-select" id="">
                                         <option selected></option>
                                         <option value="mr">Mr.</option>
                                         <option value="ms">Ms.</option>
                                         <option value="mrs">Mrs.</option>
                                       </select>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <label for="formGroupExampleInpu2">Email Address (Voucher will be sent to the providing email below)<span class="text-red">*</span> :</label>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control cal-form" id="" placeholder="example@mail.com">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <label for="formGroupExampleInpu2">Confirm Email<span class="text-red">*</span> :</label>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control cal-form" id="" placeholder="example@mail.com">
                                    </div>
                                  </div>
                                  <div class="col-xl-12">
                                    <div class="form-group">
                                      <label for="formGroupExampleInput">Your Requirement<span class="text-red">*</span> :</label>
                                      <textarea class="form-control cal-form" rows="3" placeholder="Please enter your requirement" id=""></textarea>
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
                            <!-- credit card -->
                              <div class="row mb-2">
                                  <div class="col-xl-12 col-12">
                                    <div class="custom-radio">
                                      <input type="radio" id="customRadio1" name="customRadio" class="">
                                      <label class="pl-2" for="customRadio1">Credit/Debit Card</label>
                                    </div>
                                  </div>
                                  <div class="col-12 pl-5">
                                    <div class="row">
                                      <div class="col-lg-7 col-12">
                                        <div class="form-group">
                                          <label for="formGroupExampleInpu2">Card Number :</label>
                                          <div class="input-group mb-2">
                                                 <input type="text" class="form-control cal-form" id="inlineFormInputGroup" placeholder="----- ---- ---- ----">
                                                 <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                 </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-5 col-0">
                                      </div>
                                      <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                          <label for="formGroupExampleInput">Expire Date :</label>
                                          <select class="cal-form form-control custom-select" id="">
                                             <option selected></option>
                                             <option value="1">01</option>
                                             <option value="2">02</option>
                                             <option value="3">03</option>
                                           </select>
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                        <div class="form-group">
                                          <label for="formGroupExampleInput">Expire Month :</label>
                                          <select class="cal-form form-control custom-select" id="">
                                             <option selected></option>
                                             <option value="1">2015</option>
                                             <option value="2">2016</option>
                                             <option value="3">2017</option>
                                           </select>
                                        </div>
                                      </div>
                                      <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                                        <div class="form-group">
                                          <label for="formGroupExampleInpu2">Security Code <i class="far fa-question-circle" data-toggle="tooltip" data-placement="right" title="Description"></i></label>
                                          <input type="text" class="form-control cal-form" id="" >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>

                              <!-- Walk-in -->
                              <div class="row mb-2">
                                    <div class="col-xl-12 col-12">
                                      <div class="custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="">
                                        <label class="pl-2" for="customRadio1">Walk-in</label>
                                      </div>
                                    </div>
                                    <div class="col-12 pl-5">
                                      <div class="row">
                                        <div class="col-md-6 col-12">
                                          <div class="form-group">
                                            <label for="formGroupExampleInpu2">First Name :</label>
                                            <input type="text" class="form-control cal-form" id="" placeholder="Please enter your first name">
                                          </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                          <div class="form-group">
                                            <label for="formGroupExampleInput3">Family Name :</label>
                                            <input type="text" class="form-control cal-form" id="" placeholder="Please enter your family name">
                                          </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                          <div class="form-group">
                                            <label for="formGroupExampleInpu2">Email Address :</label>
                                            <input type="text" class="form-control cal-form" id="" placeholder="example@mail.com">
                                          </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                          <div class="form-group">
                                            <label for="formGroupExampleInput3">Phone Number :</label>
                                            <input type="text" class="form-control cal-form" id="" placeholder="Please enter your phone number">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <!-- Bank -->
                                <div class="row mb-2">
                                      <div class="col-xl-12 col-12">
                                        <div class="custom-radio">
                                          <input type="radio" id="customRadio1" name="customRadio" class="">
                                          <label class="pl-2" for="customRadio1">Bank Channels</label>
                                        </div>
                                      </div>
                                </div>


                          </div>
                      </div>
                      <div class="card-box">
                          <div class="card-box-header">
                              <div class="row">
                                <div class="col-4">
                                  
                                </div>
                                <div class="col-4">

                                </div>
                                <div class="col-4">

                                </div>
                                <div class="col-4">

                                </div>
                                <div class="col-4">

                                </div>
                                <div class="col-4">

                                </div>
                              </div>
                          </div>
                          <div class="card-box-content px-4">

                          </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-12 col-xl-4">
                    <form>
                      <div class="card-box">
                          <div class="card-box-header">
                              <h4 class="card-box-title">CALYPSO CABARET SHOW</h4>
                          </div>
                          <div class="card-box-content">
                          </div>
                      </div>
                    </form>
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
