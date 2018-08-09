<!-- Social Media Floating -->
<div class="icon-bar">
    <a href="https://www.facebook.com/calypsocabaret/" target="_blank"class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/calypsobkk" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/calypsocabaret/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://page.line.me/calypsocabaret" target="_blank" class="line"><i class="fab fa-line"></i></a>
    <a href="https://www.youtube.com/channel/UC158vpAOSPdDczL2THpNtvQ/videos" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
    <a href="https://www.facebook.com/calypsocabaret/" target="_blank" class="wechat"><i class="fab fa-weixin"></i></a>
</div>
<!-- <a class="navbar-logo" href="#"></a> -->
  <div class="">
    <nav class="navbar-inverse nav-upper d-none d-lg-block">
      <div class="container">
        <ul class="float-right mb-0">
          <li>
            <a href="login.php">
              Representatives
            </a>
          </li>
          <li>
            <a href="">
              <img src="assets/images/img-icon/UK.png" class="img-flag-icon" >
            </a>
          </li>
          <li>
            <a href="">
              <img src="assets/images/img-icon/JP.png" class="img-flag-icon">
            </a>
          </li>
          <li>
            <a href="">
              <img src="assets/images/img-icon/CH.png" class="img-flag-icon">
            </a>
          </li>
        </ul>
        <ul class="nav navbar-upper d-lg-table d-none">
          <li>
            <i class="fas fa-phone-volume fa-lg pr-1"></i>(+66) 82 688 1417
          </li>
        </ul>
      </div>
    </nav>

      <nav class="navbar navbar-expand-lg bg-purple">
        <div class="container">
          <div class="navbar-frame ">
             <a  href="index.php">
               <img class="navbar-logo" src="assets/images/Logo/logo.png">
             </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars font-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php $link = $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];?>
              <li class="nav-item ">
                <a class="nav-link  oop  <?php if($link == 'localhost/calypso/index.php'){echo 'active';} ?> nav-border-right" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link oop dropdown-toggle <?php if($link == 'localhost/calypso/about_cal.php'){echo 'active';} ?> nav-border-right" href="about_cal.php" id="navbarDropdown-about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                  <div class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown-about">
                    <a class="dropdown-item" href="about-cal.php">Calypso Carbaret</a>
                    <a class="dropdown-item" href="about-thai.php">Thai Restaurant</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link oop dropdown-toggle <?php if($link == 'localhost/calypso/list_product.php'){echo 'active';} ?> nav-border-right" href="list_product.php" id="navbarDropdown-gallery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                  <div class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown-gallery">
                    <a class="dropdown-item" href="gallery.php">Calypso Carbaret</a>
                    <a class="dropdown-item" href="gallery.php">Thai Restaurant</a>
                    <a class="dropdown-item" href="gallery.php">Asiatique the Riverfront</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link oop dropdown-toggle <?php if($link == 'localhost/calypso/history.php'){echo 'active';} ?> nav-border-right" href="history.php" id="navbarDropdown-contact" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plan your Visit</a>
                  <div class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown-contact">
                    <a class="dropdown-item" href="map.php">Map</a>
                    <a class="dropdown-item" href="contact.php">Contact</a>
                    <a class="dropdown-item" href="faq.php">Frequently Asked Questions</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link oop <?php if($link == 'localhost/calypso/news.php'){echo 'active';} ?> nav-border-right" href="news.php">News</a>
              </li>
              <li class="nav-items ml-3">
                <a class="nav-link oop nav-border-right px-0" href="booking.php">
                  <img src="assets/images/img-icon/btn-booking.png" class="img-fluid">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
