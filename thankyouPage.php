<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script
      src="https://kit.fontawesome.com/5fe51e1cbb.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="style.css">

    <title>Thankyou Page</title>
</head>

<body>
    <!-- NAV BAR START -->
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
    <!-- NAV BAR START -->

    <!-- MAIN SECTION START -->
    <section>
        <div class="container-fluid thankyou-container" style="height: 100vh; display:flex; justify-content:center; align-items:center;">
            <img src="images/" alt="">

            <div class="thankyou-text">
                <h1 style="font-size: 65px; font-weight:bold; text-align:center;"><span style="color: red;">Thank you</span><br>for<br> Choosing us</h1>
            </div>
        </div>
    </section>
    <!-- MAIN SECTION END -->

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
                                <a href="http://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i><span class="inner-link-text">Facebook</span></a>
                            </li>
                            <li>
                                <a href="http://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i><span class="inner-link-text">Instagram</span></a>
                            </li>
                            <li>
                                <a href="http://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span class="inner-link-text">Twitter</span></a>
                            </li>
                            <li>
                                <a href="http://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i><span class="inner-link-text">LinkedIn</span></a>
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
                                <i class="fa-solid fa-location-dot"></i><span>Lakeside-6, Pokhara</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i><span>+977 9806754321, 061-55442</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i><span>yellowpagoda12@gmail.com</span>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<style>
    .thankyou-container {
        background-image: url('images/main3.png');
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 90%;
    }

    .thankyou-text {
        background-color: rgb(0, 0, 0, 0.4);
        padding: 2rem;
        width: 100%;
    }

    .thankyou-text h1 {
        color: #fff;
    }
</style>

</html>