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

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <title>Title</title>
  </head>
  <body>
    <div class="slider-about">
      <nav class="navbar" style="position: fixed; top: 0">
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
            <h1>About us</h1>
          </div>
        </div>
      </div>
    </div>

    <section>
      <div class="about-main m-auto py-5" style="width: 85%">
        <div class="initial-about-container">
          <div class="welcome-msg" style="width: 100%">
            <div class="welcome-text">
              <h1>Welcome</h1>
              <p class="w-75 wlc-text-p">
                to Hotel Yellow Pagoda, where luxury and convenience blend
                seamlessly to provide an unforgettable experience for our
                esteemed guests. Located just a short 5-minute walk from the
                serene Fewa Lake, our hotel offers a perfect retreat with a
                breathtaking natural beauty.
              </p>
            </div>
          </div>
          <div class="welcome-img" style="width: 100%">
            <img
              src="images/accomodations-img/hotel.jpeg"
              alt=""
              style="width: 100%; height: 400px"
            />
          </div>
        </div>

        <div class="initial-about-container second-initial">
          <div class="welcome-img" style="width: 100%">
            <img
              src="images/main4.jpeg"
              alt=""
              style="width: 100%; height: 400px"
            />
          </div>
          <div class="welcome-msg" style="width: 100%">
            <div class="welcome-text second-wlc-text">
              <h1>Our Services</h1>
              <p class="w-75 second-wlc-text-p">
                Yellow Pagoda Hotel offers a plethora of amenities, including a
                well-equipped fitness center, rejuvenating spa facilities, and a
                sparkling swimming pool for guests to relax and unwind. Yellow
                Pagoda Hotel strives to exceed expectations and ensure a
                delightful experience for every guest.
              </p>
            </div>
          </div>
        </div>

        <div class="initial-about-container">
          <div class="welcome-msg" style="width: 100%">
            <div class="welcome-text">
              <h1>Founder</h1>
              <p class="w-75 wlc-text-p">
                The Foundation of Hotel Yellow Pagoda takes immense pride in its
                establishment and the services it offers to guests. Committed to
                excellence, the Founders have envisioned a haven of comfort and
                sophistication where guests can create lasting memories. With a
                strong belief in the power of hospitality, the Foundation has
                worked tirelessly to create an inviting atmosphere where every
                guest feels valued and cared.
              </p>
            </div>
          </div>
          <div class="welcome-img" style="width: 100%">
            <img
              src="images/founder.png"
              alt=""
              style="width: 100%; height: 400px;"
            />
          </div>
        </div>

        <!-- <div class="secondary-about-container" style="display: flex;">
          <div class="welc-img" style="width: 50%;">
            <img src="images/accomodations-img/Family room with balcony.jpg" alt="" style="height: 400px; width: 100%;" />
          </div>
          <div class="welc-msg" style="width: 50%; display:flex; justify-content: end; align-items: center;">
            <div class="inner-welc-msg">
                <h1>Why Choose us?</h1>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, quod
                placeat! Rerum in debitis doloribus.
                </p>
            </div>
          </div>
        </div> -->
      </div>
    </section>

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
                  <i class="fa-solid fa-envelope"></i>
                  <!-- <span>yellowpagoda12@gmail.com</span> -->
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<style>
  a {
    text-decoration: none;
    color: #000;
  }

  .welcome-msg {
    display: flex;
    align-items: center;
  }
  .wlc-text-p {
    text-align: left;
  }
  .welcome-text h1 {
    padding: 0.8rem 0;
  }
  .second-wlc-text-p {
    padding: 10px 0;
    float: right;
  }
  .initial-about-container {
    display: flex;
  }
  .welcome-img img {
    height: 400px;
  }
  .second-wlc-text {
    text-align: right;
  }

  @media (max-width: 425px) {
    .welcome-text {
      text-align: center;
    }
    .second-wlc-text {
      text-align: center;
    }

    .wlc-text-p {
      text-align: justify;
      margin: auto;
      padding: 0.8rem 0;
    }
    .second-wlc-text-p {
      text-align: justify;
      margin: auto;
      padding: 0.8rem 0;
    }

    .initial-about-container {
      flex-direction: column;
    }
    .welcome-img img {
      height: 400px;
    }
    .second-initial {
      flex-direction: column-reverse;
    }
    .w-75 {
      float: none;
    }
  }

  .slider-about {
    height: 100vh;
    background-image: url(images/main4.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
