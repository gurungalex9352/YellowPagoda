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

    <!-- <script
      src="https://kit.fontawesome.com/5fe51e1cbb.js"
      crossorigin="anonymous"
    ></script> -->

    <link rel="stylesheet" href="style.css" />
    <title>Reservation Page</title>
  </head>
  <body>
    <!-- NAVIGATION PART START -->
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
    <!-- NAVIGATION PART END -->

    <!-- FORM PART START -->
    <section>
      <div class="reservation-section" style="padding: 2rem 0">
        <div class="reserve-head" style="text-align: center; padding: 1rem">
          <img src="images/Logo.png" alt="LogoImg" />
          <h1 style="font-weight: bold; padding: 0.4em 0">
            Hotel Reservation Form
          </h1>
        </div>

        <div class="container-fluid m-auto" style="width: 58%">
          <form
            action="booking.php"
            method="POST"
            enctype="multipart/form-data"
            class="row g-3 needs-validation"
            novalidate
          >
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Name</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom01"
                placeholder="Name"
                name="name"
                required
              />
              <div class="valid-feedback">Looks good!</div>
            </div>

            <div class="col-md-6">
              <label for="validationCustomUsername" class="form-label"
                >E-mail</label
              >
              <div class="input-group">
                <input
                  type="email"
                  class="form-control"
                  id="validationCustomUsername"
                  aria-describedby="inputGroupPrepend"
                  placeholder="E-mail"
                  name="email"
                  required
                />
                
              </div>
            </div>

            <div class="col-md-6">
              <label for="validationCustom05" class="form-label"
                >Check-In-Date</label
              >
              <input
              
                type="date"
                class="form-control"
                id="check-in"
                name="check_in_date"
                required
              />
              
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label"
                >Check-Out-Date</label
              >
              <input
                id="check-out"
                type="date"
                class="form-control"
                id="validationCustom05"
                name="check_out_date"
                requiredr
              />
              
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label"
                >Room type</label
              >
              <select
                type="text"
                class="form-select"
                id="validationCustom05"
                name="room_type"
                required
              >
                <option value="" selected>Choose Room -</option>
                <option value="Deulex Double Bedroom">
                  Deulex Double Bedroom
                </option>
                <option value="Suite Bedroom">Suite Bedroom</option>
                <option value="Family Bedroom">Family Bedroom</option>
                <option value="King's Size Bedroom">King's Size Bedroom</option>
              </select>
              <div class="invalid-feedback">Please provide a valid zip.</div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label"
                >Total number of people</label
              >
              <input
                type="text"
                class="form-control"
                id="total-count"
                placeholder="Total no. of people"
                name="total_guest"
                required
              />
            </div>
            <div class="col-ms-2">
              <label class="form-label">Contact No.</label>
              <input class="form-control w-50" type="text" placeholder="+977-" name="contact_no">
            </div>

            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="submit" onclick="removeItems()" >Submit</button>
            </div>
          </form>
          
        </div>
      </div>
    </section>
    <!-- FORM PART END -->

    <!-- FOOTER PART START -->
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
    <!-- FOOTER PART END -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
  <style>
    * {
      outline: none;
    }
    .menu li a {
      text-decoration: none;
    }
    .reserve-head img {
      height: 160px;
      width: 25%;
    }
    @media (max-width: 768px) {
      .reserve-head img {
        width: 50%;
      }
    }
    @media (max-width: 425px) {
      .reserve-head img {
        width: 75%;
      }
    }
    @media (max-width: 320px) {
      .reserve-head img {
        width: 100%;
      }
    }
  </style>
</html>
<script>
  var check_in_date = localStorage.getItem("check_in_date");
  var check_out_date = localStorage.getItem("check_out_date");
  var total_count = localStorage.getItem("total_count");
    // Populate the form fields with the retrieved values
    document.getElementById("check-in").value = check_in_date;
    document.getElementById("check-out").value = check_out_date;
    document.getElementById("total-count").value = total_count;

    function removeItems(){
      // Clear the stored data from localStorage (optional)
      localStorage.removeItem("check_in_date");
      localStorage.removeItem("check_out_date");
      localStorage.removeItem("total_count");
    }
</script>
