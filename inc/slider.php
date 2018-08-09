<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item_size active">
      <video autoplay muted loop>
        <source src="assets/images/VDO/Pexels_Videos_4725.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
    <div class="carousel-item carousel-item_size">
      <img class="d-block w-100 slide-item" src="assets/images/Banner/banner-1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item carousel-item_size">
      <video autoplay muted loop>
        <source src="assets/images/VDO/Night_At_Vegas.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
  </div>

  <script type="text/javascript">
    
  </script>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="slide-box">
      <div class="form-title text-center">
        <h3>Booking</h3>
      </div>
      <div class="form-excerpt text-center mb-4">
        <label>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label>
      </div>
      <form>
          <div class="input-group form-booking mb-4 select">
            <select class="form-control has-form" required>
              <option selected disabled="">Select Package</option>
              <option value="">Package 1</option>
              <option value="">Package 2</option>
              <option value="">Package 3</option>
            </select>
            <i class="fas fa-ticket-alt fa-lg"></i>
          </div>
          <div class="input-group form-booking mb-4">
            <input type="date" class="form-control has-form" id="inlineFormInputGroup" placeholder="Select Date" required>
            <i class="far fa-calendar-alt fa-lg"></i>
          </div>
          <div class="input-group form-booking mb-4 select">
            <select class="form-control has-form" required>
              <option selected disabled="">Select Time</option>
              <option value="">17.30 - 19.30</option>
              <option value="">20.00 - 22.00</option>
            </select>
            <i class="far fa-clock fa-lg"></i>
          </div>
          <label for="count">Ticket</label>
          <div class="input-group form-booking mb-4">
            <input type="button" value="-" class="qtyminus" field="quantity">
            <input type="text" name="quantity" value="0" class="qty form-control has-form2" required>
            <input type="button" value="+" class="qtyplus" field="quantity">
          </div>
          <div class="w-100 text-center">
            <button type="submit" class="btn-cal btn-cal-md">Booking</button>
          </div>
      </form>
  </div>
</div>