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

    <script
      src="https://kit.fontawesome.com/5fe51e1cbb.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="style.css" />

    <!-- FONTAWSOME SCRIPT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap"
      rel="stylesheet"
    />
    <!-- FONTAWSOME SCRIPT -->

    <title>Blog Page</title>
  </head>
  <body>
    <!-- NAVIGATION BAR START -->
    <div class="blogs-slider">
      <nav class="navbar" style="position: relative">
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
    </div>
    <!-- NAVIGATION BAR END -->

    <section>
      <div class="blogs-section">
        <div class="blogs-container">
          <h1>Blogs</h1>
          <p>
            At Yellow Pagoda Hotel, we believe that a memorable hotel experience
            goes beyond comfortable rooms and exceptional service. We strive to
            provide our guests with a holistic journey, encompassing local
            culture, travel tips, and insider knowledge that will enhance your
            stay in our vibrant city.Here, you'll find a collection of travel guides, insider tips, and
            captivating stories that showcase the essence of our city. From
            off-the-beaten-path adventures to culinary delights, we'll take you
            on a virtual journey that will awaken your wanderlust and leave you
            eager to explore. Our team of local experts and seasoned travelers
            are dedicated to curating engaging and informative content that
            caters to all types of travelers.
          </p>
        </div>
      </div>
    </section>

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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    .blogs-slider {
      background-image: url("images/main6.jpeg");
      height: 64vh;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .blogs-section {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 320px;
    }
    .blogs-container {
      text-align: center;
      width: 50%;
      padding: 1rem;
    }
    .blogs-container h1 {
      padding: 1rem 0;
    }
    .blogs-container p {
      text-align: justify;
      font-family: "Source Sans 3", sans-serif;
    }
  </style>
</html>
