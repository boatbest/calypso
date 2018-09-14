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
        <section>
            <div class="container">
                <div class="row mx-0">
                    <div class="navbar-frame">
                         <a href="index.php">
                           <img class="navbar-logo" src="assets/images/Logo/logo.png">
                         </a>
                    </div>
                </div>
                <div class="row mx-0 pt-4">
                   <div class="header-text-box">
                      <label class="text-box-detail">Map Informations</label>
                   </div>
                </div>
                <div class="row mx-0">
                    <div class="pt-4">
                        <div class="map-font">Map of Calypso Cabaret - Theatre</div>
                        <div class="line-title line-title-h2 map-line-title-w300"></div>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="map-font2">Calypso Cabaret Map</div>
                </div>
                <div class="row">
                   <div class="col-xl-3 col-lg-3 col-md-4 pt-4">
                       <div class="map-icon"><i class="fas fa-train mr-3"></i>BTS and MRT</div>
                       <div class="line-title line-title-h2 line-title-w200"></div>
                       <div class="pt-2">
                         <a href="#" class="demo txt-dec" onclick="currentDiv(2)">
                           <div class="map-font3">BTS Taksin</div>
                         </a>
                         <a href="#" class="demo txt-dec" onclick="currentDiv(1)">
                           <div class="pt-2 map-font3">BTS Siam</div>
                         </a>
                         <a href="#" class="demo txt-dec">
                           <div class="pt-2 map-font3">BTS Phayathai</div>
                         </a>
                         <a href="#" class="demo txt-dec">
                           <div class="pt-2 map-font3">BTS Asok</div>
                         </a>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 pt-4">
                       <div class="map-icon"><i class="fas fa-car mr-3"></i></i>Car</div>
                       <div class="line-title line-title-h2 line-title-w200"></div>
                       <div class="pt-2">
                           <a href="#" class="txt-dec" onclick="currentDiv(3)">
                             <div class="map-font3">Silom/Sathorn</div>
                           </a>
                           <a href="#" class="txt-dec" onclick="currentDiv(4)">
                             <div class="map-font3 pt-2">Siam</div>
                           </a>
                           <a href="#" class="txt-dec" onclick="currentDiv(5)">
                             <div class="map-font3 pt-2">Bangna</div>
                           </a>
                           <a href="#" class="txt-dec" onclick="currentDiv(6)">
                             <div class="map-font3 pt-2">ladpraw</div>
                           </a>
                           <a href="#" class="txt-dec" onclick="currentDiv(7)">
                             <div class="map-font3 pt-2">jatujak</div>
                           </a>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 pt-4">
                       <div class="map-icon"><i class="fas fa-bus mr-3"></i>Bus</div>
                       <div class="line-title line-title-h2 line-title-w200"></div>
                       <div class="pt-2">
                           <a href="#" class="txt-dec">
                             <div class="map-font3">BTS Taksin</div>
                           </a>
                           <a href="#" class="txt-dec">
                             <div class="map-font3 pt-2">BTS Siam</div>
                           </a>
                           <a href="#" class="txt-dec">
                             <div class="map-font3 pt-2">BTS Phayathai</div>
                           </a>
                           <a href="#" class="txt-dec">
                             <div class="map-font3 pt-2">BTS Asok</div>
                           </a>
                       </div>
                   </div>
                </div>

            </div>
        </section>
        <div class="bg-purple pb-5">
            <div class="container">
                <div class="row mx-0 pt-5 justify-content-center">
                    <div class="map-font4">Calypso Cabaret Map</div>
                </div>
                <div class="row mx-0 pt-5">
                    <div class="map-overlay-image">
                       <img src="assets/images/map.jpg" class="map-image-full myMap">
                       <img src="assets/images/map/MapTaksin.jpg" class="map-image-full myMap">
                       <img src="assets/images/map/MapNara.jpg" class="map-image-full myMap">
                       <img src="assets/images/map/MapRama3.jpg" class="map-image-full myMap">
                       <img src="assets/images/map/MapChan.jpg" class="map-image-full myMap">
                       <img src="assets/images/map/MapRama3-Ca.jpg" class="map-image-full myMap">
                       <img src="assets/images/map/MapRama3-B.jpg" class="map-image-full myMap">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark-purple pb-5">
            <div class="row mx-0 pt-5 justify-content-center">
               <div class="header-text-box">
                  <label class="text-box-detail">Map of Calypso Cabaret</label>
               </div>
            </div>
            <div class="row mx-0 pt-5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2740.907129703442!2d100.50244885429196!3d13.704634235849532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc43db2f90af1610f!2sCalypso+Cabaret!5e0!3m2!1sth!2sth!4v1533289105917" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="bg-bottom-linear">
            <div class="row mx-0 pt-5 justify-content-center">
                <div class="map-font5">How to get to Calypso Theater?</div>
            </div>
            <div class="row pt-4 mx-0 justify-content-center">
              <a href="https://www.google.co.th/maps/dir/''/calypso+cabaret+map/@13.7039589,100.4336008,12z/data=!3m1!5s0x30e29896e1e797f7:0xa230d50ab861ff10!4m8!4m7!1m0!1m5!1m1!1s0x30e298971b336697:0xc43db2f90af1610f!2m2!1d100.5036413!2d13.7039688">
                <button type="submit" class="btn-cal btn-cal-md">Click here</button>
              </a>
            </div>
        </div>
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->

    <script>
        var mapIndex = 1;
        showDivs(mapIndex);

        function plusDivs(n) {
          showDivs(mapIndex += n);
        }

        function currentDiv(n) {
          showDivs(mapIndex = n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("myMap");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {mapIndex = 1}
          if (n < 1) {mapIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
          }
          x[mapIndex-1].style.display = "block";
          dots[mapIndex-1].className += " w3-opacity-off";
        }
      </script>
</body>

</html>
