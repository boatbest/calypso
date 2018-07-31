<!-- Image and text -->

<!-- <a class="navbar-logo" href="#"></a> -->
  <div class="">
    <nav class="navbar-inverse nav-upper d-none d-lg-block">
      <div class="container">
        <ul class="float-right mb-0">
          <li>
            <a href="">
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
                    <a class="dropdown-item" href="#">Calypso Carbaret</a>
                    <a class="dropdown-item" href="#">Thai Restaurant</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link oop dropdown-toggle <?php if($link == 'localhost/calypso/list_product.php'){echo 'active';} ?> nav-border-right" href="list_product.php" id="navbarDropdown-gallery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                  <div class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown-gallery">
                    <a class="dropdown-item" href="#">Calypso Carbaret</a>
                    <a class="dropdown-item" href="#">Thai Restaurant</a>
                    <a class="dropdown-item" href="#">Asiatique the Riverfront</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link oop dropdown-toggle <?php if($link == 'localhost/calypso/history.php'){echo 'active';} ?> nav-border-right" href="history.php" id="navbarDropdown-contact" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plan your Visit</a>
                  <div class="dropdown-menu bg-purple" aria-labelledby="navbarDropdown-contact">
                    <a class="dropdown-item" href="#">Map</a>
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href="#">Frequently Asked Questions</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link oop <?php if($link == 'localhost/calypso/news.php'){echo 'active';} ?> nav-border-right" href="news.php">News</a>
              </li>
              <li class="nav-items">
                <a class="nav-link oop nav-border-right px-0 ml-4 ml-lg-0" href="booking.php">
                  <img src="assets/images/img-icon/btn-booking.png" class="img-fluid">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>


