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
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/5fe51e1cbb.js"
      crossorigin="anonymous"
    ></script>

    <!-- FANCY BOX Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    
    <title>Gallery Page</title>
  </head>
  <body>
    <!-- NAVIGATION PART START -->
    <div class="gallery-slider">
      <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">
          <img src="images/logo.png" alt="Logo" />
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
          <div>
            <h1>Gallery</h1>
            <p>
              We share with you some of our beautiful hotel scenery and moments.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- NAVIGATION PART END -->

    <!-- GALLERY SECTION START -->
    <section>
        <div
      class="gallery-container"
      style="text-align: center; padding: 1.2rem 0"
    >
      <div class="gallery-images">
        <div class="gallery-cards">
          <div class="gallery">
            <a id="fancybox" data-fancybox="gallery" href="images/accomodations-img/entranceImg.jpeg"><img src="images/accomodations-img/entranceImg.jpeg" alt="" /></a>
          </div>
          <div class="gallery">
            <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back2.jpeg"><img src="images/outer-hotel/back2.jpeg" alt="" /></a>
          </div>
          <div class="gallery">
            <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back3.jpeg"><img src="images/outer-hotel/back3.jpeg" alt="" /></a>
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
            <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back7.jpeg"><img src="images/outer-hotel/back7.jpeg" alt="" /></a>
          </div>
          <div class="gallery">
            <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back3.jpeg"><img src="images/outer-hotel/back3.jpeg" alt="" /></a>
          </div>
          <div class="gallery">
            <a id="fancybox" data-fancybox="gallery" href="images/outer-hotel/back2.jpeg"><img src="images/outer-hotel/back2.jpeg" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- GALLERY SECTION END -->

    <!-- Footer Section Start Here-->
    <footer>
      <div id="footer">
        <div class="footer-container">
          <div class="footer-info">
            <img src="images/Logo.png" alt="Logo Img" />
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
                  <a href=""
                    ><i class="fa-brands fa-facebook"></i
                    ><span class="inner-link-text">Facebook</span></a
                  >
                </li>
                <li>
                  <a href=""
                    ><i class="fa-brands fa-instagram"></i
                    ><span class="inner-link-text">Instagram</span></a
                  >
                </li>
                <li>
                  <a href=""
                    ><i class="fa-brands fa-twitter"></i
                    ><span class="inner-link-text">Twitter</span></a
                  >
                </li>
                <li>
                  <a href=""
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
                <li><a href="">Home</a></li>
                <li><a href="">Blogs</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
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

    <style>
      .gallery-slider {
        background-image: url("images/main3.png");
        background-repeat: no-repeat;
        background-size: cover;
  
        height: 100vh;
      }
  
      @media (max-width: 768px) {
        .gallery img {
          height: 300px;
        }
      }
      @media (max-width: 375px) {
        .gallery-cards {
          padding: 0;
        }
      }
    </style>
  </body>

  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
  crossorigin="anonymous"
  ></script>

  <!-- SCRIPT FOR FANCYBOX -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


</html>
