<!DOCTYPE html>
<html>
<head>
	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
</head>
<body>
	<!-- START FOOTER -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END FOOTER -->
    <div class="wrapper">
      <div class="row justify-content-center mx-0 mt-4">
          <div class="navbar-frame">
               <a href="index.php">
                 <img class="navbar-logo" src="assets/images/Logo/logo.png">
               </a>
          </div>
      </div>
      <div class="row justify-content-center mx-0 mt-4">
         <div class="header-text-box">
            <label class="text-box-detail">Representatives</label>
         </div>
      </div>
      <div class="row justify-content-center mt-5 mx-0">
          <div class="col-xl-5 col-lg-8 col-md-10">
            <div class="login-box">
  	    				<form>
                  <div class="login-font text-center">Login</div>
    						  <div class="form-group row justify-content-center mt-4">
      						    <input type="text" class="login-form" id="formGroupExampleInput" placeholder="Email">
      						    <input type="text" class="login-form mt-4" id="formGroupExampleInput2" placeholder="Password">
                      <div class="cal-capcha col-xl-5 col-lg-5 col-md-5 mt-4">
                         <img src="assets/images/newCaptchaAnchor.gif" alt="calypso" class="img-fluid">
                      </div>
                      <div class="w-100 mt-4 text-center">
                         <button type="submit" class="btn-cal btn-cal-md">Login</button>
                      </div>
                      <div class="row mt-4">
                          <div class="col-xl-5 col-lg-5 col-md-5 col-5 login-p-t">
                            <div class="line-title line-title-h2 line-title-w100"></div>
                          </div>
                          <div class="col-xl-2 col-lg-2 col-md-2 col-2 text-center">
                            <div class="login-font2">OR</div>
                          </div>
                          <div class="col-xl-5 col-lg-5 col-md-5 col-5 login-p-t">
                            <div class="line-title line-title-h2 line-title-w100"></div>
                          </div>
                      </div>
                      </div>
                      <div class="row justify-content-center mt-4">
                          <div class="login-overlay-image col-xl-5 col-lg-5 col-md-5 col-10">
                            <a href="#">
                              <img src="assets/images/google.png" class="login-image-full">
                            </a>
                          </div>
                      </div>
  						  </form>
  	    	   </div>
          </div>
      </div>
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->
</body>

</html>
