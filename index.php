<?php include('process/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />

    <!-- FONTS LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&family=Source+Sans+3&display=swap" rel="stylesheet">
    <!-- FONTS LINKS -->

    <!-- TESTIMONIALS SCRIPTS START-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <!-- TESTIMONIALS SCRIPTS END-->

    <!-- FANCY BOX STYLESHEET LINK START -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- FANCY BOX STYLESHEET LINK END -->

    <!-- STYLESHEET CSS LINK START -->
    <link rel="stylesheet" href="style.css" />
    <!-- STYLESHEET CSS LINK END -->

    <!-- JS LINK -->
    <script src="js/script.js"></script>

    <script
      src="https://kit.fontawesome.com/5fe51e1cbb.js"
      crossorigin="anonymous"
    ></script>

    <title>Index Page</title>
  </head>
  <body>
    <div class="slider">
      <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">
          <a href="index.html"><img src="images/logo.png" alt="Logo" /></a>
        </div>

        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>

          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="blog.php">Blogs</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="about.php">About us</a></li>
          </div>
        </ul>
      </nav>

      <div class="title">
        <div class="inner-title">
          <h1>Welcome to<br />Hotel Yellow Pagoda</h1>
        </div>
      </div>
    </div>

    <div class="cover-box">
      <div class="booking-box">
        <div class="textSizing">
          <h1>Book Now</h1>
        </div>
        <form action="form.php" method="" enctype="multipart/form-data">
          <div class="booking-slides">
            <div class="booking-fields">
              <label class="booking-label" for="">Check-In-Date</label><br />
              <input type="date" id="check-in" class="booking-input" />
            </div>
            <div class="booking-fields">
              <label class="booking-label" for="">Check-Out-Date</label><br />
              <input id="check-out" class="booking-input" type="date" name="" />
            </div>
            <div class="booking-fields">  
              <label class="booking-label" for="">Adult</label><br />
              <select id="adult-count" class="booking-select" name="" id="acount">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="booking-fields">
              <label class="booking-label" for="">Child</label><br />
              <select id="child-count" class="booking-select" name="" id="">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
            </div>
            <div class="booking-field">
              <button class="btn btn-primary py-2 px-4" type="submit" onclick="storeData()">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <section id="section">
      <div class="info-card">
        <div class="second-info-card">
          <div class="info-card-contain">
            <div class="info-inner-container">
              <h1>Our Hotel</h1>
              <p>
                provides you with a home like accomodation, food & beverage
                items and quality services.
              </p>
            </div>
          </div>
          <div class="info-image-contain">
            <img src="images/accomodations-img/fromtHotelImg.jpeg" alt="Img" />
          </div>
        </div>
      </div>

      <div class="blogs-container">
        <div class="food-title textSizing" style="text-align: center; padding: 1.4rem">
          <h1>Our Services</h1>
          <p>
            We provied a variety of top class services for our guests.
          </p>
        </div>
        <div class="row">
          <div class="col">
            <div class="services-cards">
              <!-- <div class="curtains">   -->
              <img src="images/facilities/swim.jpeg" alt="" />
              <!-- </div>  -->
              <h1>Swimming Pool</h1>
            </div>
          </div>
          <div class="col">
            <div class="services-cards">
              <!-- <div class="curtains">   -->
              <img src="images/facilities/spa.jpeg" alt="" />
              <!-- </div> -->
              <h1>Spa & Massage</h1>
            </div>
          </div>
          <div class="col">
            <div class="services-cards">
              <!-- <div class="curtains"> -->
              <img src="images/facilities/gym.png" alt="" />
              <!-- </div> -->
              <h1>Interior Gym</h1>
            </div>
          </div>
          <div class="col">
            <div class="services-cards">
              <!-- <div class="curtains"> -->
              <img src="images/facilities/laundry.jpeg" alt="" />
              <!-- </div> -->
              <h1>Laundry Service</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-container" style="text-align: center">
        <div class="rooms-slider">
          <div class="main-rooms-slider">
            <img
              class="mySlides"
              src="images/accomodations-img/deluxe-double.jpg"
              style="width: 100%"
            />
            <img
              class="mySlides"
              src="images/accomodations-img/Family room with balcony.jpg"
              style="width: 100%"
            />
            <img
              class="mySlides"
              src="images/accomodations-img/junior-suite.jpg"
              style="width: 100%"
            />
            <img
              class="mySlides"
              src="images/accomodations-img/kingBed.jpeg"
              style="width: 100%"
            />
          </div>
        </div>

        <div class="slider-info">
          <div class="slider-info-box textSizing">
            <h1>Our Accomodations</h1>
            <p>
              Our hotel offers a wide range of comfortable and spacious Suites &
              Rooms, each designed with modern amenities to ensure a relaxing
              stay.
            </p>
            <a href="rooms.html">Explore</a>
          </div>
        </div>
      </div>

      <!-- GALLERY SECTION START -->
      <div class="gallery-container" style="text-align: center">
        <div class="textSizing">
          <h1>Gallery</h1>
          <p>
            Our beautiful moments of the hotel captured & shown.
          </p>
          <div class="border-box">
            <a href="gallery.html" style="text-decoration: none;">See more</a>
          </div>
        </div>

        <div class="gallery-images">
          <div class="gallery-cards">
            <div class="gallery">
              <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back2.jpeg"><img src="images/outer-hotel/back2.jpeg" alt="" /></a>
            </div>
            <div class="gallery">
              <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back7.jpeg"><img src="images/outer-hotel/back7.jpeg" alt="" /></a>
            </div>
            <div class="gallery">
              <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back4.jpeg"><img src="images/outer-hotel/back4.jpeg" alt="" /></a>
            </div>
            <div class="gallery">
              <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back5.jpeg"><img src="images/outer-hotel/back5.jpeg" alt="" /></a>
            </div>
            <div class="gallery">
              <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back6.jpeg"><img src="images/outer-hotel/back6.jpeg" alt="" /></a>
            </div>
            <div class="gallery">
              <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back3.jpeg"><img src="images/outer-hotel/back3.jpeg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
      <!-- GALLERY SECTION END -->

      <div class="testimonials textSizing" style="text-align: center">
        <h1>Testimonials</h1>
        <p>
          What our guests have to say about the hotel & it's services.
        </p>
      </div>

      <!-- TESTIMONIALS CONTAINER -->
      <div class="testimonials-wrapper">
        <div class="carousel owl-carousel">
          <div class="card card-1">
            <div class="card-1-image">
              <img
                class="img-fluid"
                src="images/clients/profile1.jpg"
                alt=""
                height="50px"
              />
            </div>
            <div class="card-testimonials">
              <h6>- Emily Snow -</h6>
              <p style="font-weight: 400; font-size: 18px; padding: 0 1rem; text-align: justify;">
                "I had an incredible stay at the Hotel Yellow Pagoda. The staff
                was friendly and attentive and the rooms were spacious. The hotel's amenities, such as the pool and spa,
                added an extra touch of luxury to my vacation."
              </p>
            </div>
          </div>
          <div class="card card-2">
            <div class="card-1-image">
              <img
                class="img-fluid"
                src="images/clients/profile2.jpg"
                alt=""
                height="50px"
              />
            </div>
            <div class="card-testimonials">
              <h6>- Alice Winter -</h6>
              <p style="font-weight: 400; font-size: 18px; padding: 0 1rem;">
                "Staying at the Hotel Yellow Pagoda was a delightful experience.
                The hotel's location was perfect, with breathtaking views of the
                surrounding mountains."
              </p>
            </div>
          </div>
          <div class="card card-3">
            <div class="card-1-image">
              <img
                class="img-fluid"
                src="images/clients/profile3.jpg"
                alt=""
                height="50px"
              />
            </div>
            <div class="card-testimonials">
              <h6>- Robert Anderson -</h6>
              <p style="font-weight: 400; font-size: 18px; padding: 0 1rem;">
                "The hotel's restaurant served delicious meals, and the
                concierge was always ready to assist with recommendations for
                local attractions. I wouldn't hesitate to book another stay at
                this fantastic hotel."
              </p>
            </div>
          </div>
          <div class="card card-4">
            <div class="card-1-image">
              <img
                class="img-fluid"
                src="images/clients/profile4.jpg"
                alt=""
                height="50px"
              />
            </div>
            <div class="card-testimonials">
              <h6>- Ramesh Khatri -</h6>
              <p style="font-weight: 400; font-size: 18px; padding: 0 1rem;">
                "My family and I had a fantastic time at the Hotel Yellow
                Pagoda. The hotel's family-friendly atmosphere made our vacation
                truly memorable. The kids loved the pool and the game room."
              </p>
            </div>
          </div>
          <div class="card card-5">
            <div class="card-1-image">
              <img
                class="img-fluid"
                src="images/clients/profile5.jpg"
                alt=""
                height="50px"
              />
            </div>
            <div class="card-testimonials">
              <h6>- Michele Brown -</h6>
              <p style="font-weight: 400; font-size: 18px; padding: 0 1rem;">
                "During my recent business trip, I had the pleasure of staying
                at the Hotel Yellow Pagoda. The hotel provided excellent amenities
                for business travelers, including a well-equipped business
                center and reliable Wi-Fi."
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- TESTIMONIALS CONTAINER -->
    </section>

    <!-- Footer Section Start Here-->
    <footer>
      <div id="footer">
        <div class="footer-container">
          <div class="footer-info">
            <a href="index.html"><img src="images/Logo.png" alt="Logo Img" /></a>
            <p>
              The hotel is ideal place for which it still retains the charm and
              character of your home and brings out highest standards of
              hospitality, service and value for money without compromising on
              quality.
            </p>
          </div>

          <div class="footer-links">
            <div class="inner-links">
              <h4>Our Socials</h4>
              <ul>
                <li>
                  <a href="http://facebook.com"
                  target="_blank"
                    ><i class="fa-brands fa-facebook"></i
                    ><span class="inner-link-text">Facebook</span></a
                  >
                </li>
                <li>
                  <a href="http://instagram.com"
                  target="_blank"
                    ><i class="fa-brands fa-instagram"></i
                    ><span class="inner-link-text">Instagram</span></a
                  >
                </li>
                <li>
                  <a href="http://twitter.com"
                  target="_blank"
                    ><i class="fa-brands fa-twitter"></i
                    ><span class="inner-link-text">Twitter</span></a
                  >
                </li>
                <li>
                  <a href="http://linkedin.com"
                  target="_blank"
                    ><i class="fa-brands fa-linkedin"></i
                    ><span class="inner-link-text">LinkedIn</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-links">
            <div class="inner-links">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><a href="rooms.html">Rooms</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="about.html">About us</a></li>
                
              </ul>
            </div>
          </div>

          <div class="footer-info">
            <div class="contact-info">
              <h3>Contact Info</h3>
              <ul>
                <li>
                    <i class="fa-solid fa-location-dot"></i
                    ><span>Lakeside-6, Pokhara</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-phone"></i
                    ><span>+977 9806754321, 061-55442</span>
                  </li>
                  <li>
                    <i class="fa-solid fa-envelope"></i
                    ><span>yellowpagoda12@gmail.com</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-container">
          <p>@ 2023 Copyright by Hotel Yellow Pagoda</p>
        </div>
      </footer>
      <!-- Footer Section Ends Here-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>

  <style>
    .testimonials-wrapper {
      width: 100%;
    }
    .carousel {
      max-width: 1200px;
      margin: auto;
      padding: 0 30px;
    }
    .carousel .card {
      color: #000;
      text-align: center;
      margin: 20px 0;
      line-height: 20px;
      /* font-size: 90px; */
      font-weight: 600;
      border-radius: 10px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);

      height: 400px;
    }

    .card-1-image {
      /* width: auto; */
      /* margin: auto; */
      display: flex;
      justify-content: center;
      padding: 1em;
    }
    .card .card-1-image img {
      height: 120px;
      max-width: 36%;
      border-radius: 10rem;
    }

    @media (max-width: 1168px) {
      .card .card-1-image img {
      height: 120px;
      max-width: 42%;
      border-radius: 10rem;
    }
  }

    @media (max-width: 375px) {
      .card .card-1-image img {
      height: 100px;
      max-width: 39%;
      /* border-radius: 10rem; */
      }
    }
    @media (max-width: 320px) {
      .card .card-1-image img {
      height: 100px;
      max-width: 48%;
      
    }
      
    }
    .card-testimonials {
      width: 100%;
      padding: 1em;
    }

    .owl-dots {
      text-align: center;
      margin-top: 40px;
      display: none;
    }
    .owl-dot {
      height: 15px;
      width: 45px;
      margin: 0 5px;
      outline: none;
      border-radius: 14px;
      border: 2px solid #0072bc !important;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }
    .owl-dot.active,
    .owl-dot:hover {
      background: #0072bc !important;
    }
  </style>
</html>

<script>
  setTodaysDate();
</script>
<script>
  window.addEventListener('DOMContentLoaded', function() {
    var inputDate = document.getElementById('check-out');

    // Get today's date
    var today = new Date();

    // Set tomorrow's date
    var tomorrow = new Date();
    tomorrow.setDate(today.getDate() + 1);

    // Format the date as YYYY-MM-DD
    var tomorrowFormatted = tomorrow.toISOString().split('T')[0];

    // Set the value of the date input to tomorrow's date
    inputDate.value = tomorrowFormatted;
  });
</script>

<script>
  $(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 3,
        nav: false,
      },
    },
  });
</script>

<!-- For Slider JS -->
<script>
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
      myIndex = 1;
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
  }

</script>

  <!-- SCRIPT FOR FANCYBOX -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
