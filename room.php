<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/5fe51e1cbb.js" crossorigin="anonymous"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Individual Room</title>
  </head>
  <body>
    <!-- NAVIGATION BAR START -->
    <div class="room-slider" >
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
    </div>
    <!-- NAVIGATION BAR END -->

    <div class="main-container">
      <div class="room-info-container">
        <h1>Deulex Double Bedroom</h1>
        <p>
          Classic contemporary, thoughtfully equipped and decorated, our Durbar
          wing’s Deluxe Rooms offer all the facilities you need for a
          comfortable stay.
        </p>

        <div class="slider-container" style="text-align: center;">
          <div class="rooms-slider" style="width: 100%;">
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
        <!-- <a href="form.html" class="btn btn-primary">Book now</a> -->
      <!-- </div>
      <div class="initial-container">
        <div class="contain">
          <img
            class=""
            id="img1"
            src="images/accomodations-img/deluxe-double.jpg"
            alt=""
          />
        </div>
        <div class="contain">
          <img
            class=""
            id="img2"
            src="images/accomodations-img/Family room with balcony.jpg"
            alt=""
            style="display: none"
          />
        </div>
        <div class="contain">
          <img
            class=""
            id="img3"
            src="images/accomodations-img/junior-suite.jpg"
            alt=""
            style="display: none"
          />
        </div>
        <div class="contain">
          <img
            class=""
            id="img4"
            src="images/accomodations-img/kingBed.jpeg"
            alt=""
            style="display: none"
          />
        </div>
      </div>
      <div class="secondary-container">
        <div class="rooms-inner-contain">
          <img src="images/accomodations-img/deluxe-double.jpg" alt="" />
          <img
            src="images/accomodations-img/Family room with balcony.jpg"
            onclick="changeImage('img1','img2')"
            alt=""
          />
          <img
            src="images/accomodations-img/junior-suite.jpg"
            onclick="changeImage('img2','img3')"
            alt=""
          />
          <img
            src="images/accomodations-img/kingBed.jpeg"
            onclick="changeImage('img3','img4')"
            alt=""
          />
        </div>
      </div> -->
    </div>

    <section class="rooms-section" style="padding: 1rem 0;">
      <div class="facilities p-2">
        <h1 style="text-align: center; padding: 0.4em">Facilities</h1>
        <div class="facilities-info">
          <div class="first-innner-facilities">
            <ul style="list-style: none">
              <li><i class="fa-solid fa-check"></i>Multichannel color 32" Flat LCD Television</li>
              <li><i class="fa-solid fa-check"></i>Centralized air conditioning</li>
              <li><i class="fa-solid fa-check"></i>International Direct Dial (IDD) telephones </li>
              <li><i class="fa-solid fa-check"></i>Mini bar at extra cost</li>
              <li><i class="fa-solid fa-check"></i>Private shower bath</li>
              <li><i class="fa-solid fa-check"></i>Hair dryer in bathroom</li>
            </ul>
          </div>
          <div class="second-innner-facilities">
            <ul style="list-style: none">
              <li><i class="fa-solid fa-check"></i>Mini bar at extra cost</li>
              <li><i class="fa-solid fa-check"></i>Private shower bath</li>
              <li><i class="fa-solid fa-check"></i>Hair dryer in bathroom</li>
            </ul>
          </div>
        </div>
      </div>
      
    </section>
    <div class="redirect d-lg-flex d-md-flex d-sm-flex p-4 justify-content-center">
      <div class="redirect-container">
          <a href=""><img src="images/accomodations-img/deluxe-double.jpg" alt=""></a>
      </div>
      <div class="redirect-container">
          <a href=""><img src="images/accomodations-img/deluxe-double.jpg" alt=""></a>
      </div>
      <div class="redirect-container">
          <a href=""><img src="images/accomodations-img/deluxe-double.jpg" alt=""></a>
      </div>
      <div class="redirect-container">
          <a href=""><img src="images/accomodations-img/deluxe-double.jpg" alt=""></a>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>

  <style>
    *{
      padding: 0;
      margin: 0;
    }
    i{
      padding: 0 5px;
    }

    .contain{
      display: flex;
      justify-content: center;
      
    }
    .contain img {
      /* height: 800px; */
      width: 70%;
      
    }

    .rooms-inner-contain {
      padding: 5px;
      text-align: center;
    }
    .rooms-inner-contain img {
      width: 12%;
      height: 100px;
    }
    .room-info-container {
      text-align: center;
      padding: 0.8rem;
      width: 80%;
      margin: auto;
    }

    @media (max-width: 625px){
    .room-info-container{
      width: 100%;
      }

    }


    .room-info-container h1{
      padding: 0.4rem;
    }
    .room-info-container p {
      padding: 0.4rem;
    }
    .redirect{
      border: none;
      box-shadow: 0px 0px 10px;
    }
    .redirect-container{
      padding: 1rem;
      transition: 0.8s;
      
    }
    .redirect-container:hover{
      padding: 0rem;
    }

    .redirect-container img{
      height: 115px;
      width: 100%;
    }
    .redirect-container img:hover{
      font-size: larger;
    }

    @media (max-width:425px) {
      .redirect-container img{
        width: 85%;
    }
      
    }
    .room-slider{
      background-image: url(images/main6.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
      height: 84vh;
    }


 
  </style>


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


</html>

<!-- <script>
  function changeImage(hideId, showId) {
    var hideImage = document.getElementById(hideId);
    var showImage = document.getElementById(showId);

    hideImage.style.display = "none";
    showImage.style.display = "block";
  }
</script> -->

