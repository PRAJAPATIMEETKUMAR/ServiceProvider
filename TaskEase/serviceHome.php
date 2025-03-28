<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>TaskEase</title>
  <meta name="title" content="TaskEase">
  <meta name="description" content="This is a service Provider Website">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="serviceHome.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slide-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slide-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slide-3.jpg">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home" class="logo-light">

        <img src="./assets/images/logo-dark.svg" width="74" height="24" alt="Adex home" class="logo-dark">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Our Services</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Contact</a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

          <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <a href="#" class="btn btn-primary">Login</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <h2 class="h2 hero-title">Finding Best Services Specific Solution with Experts.</h2>

            <p class="hero-text">
              We’re a creative company that focuses on establishing long-term relationships with customers.
            </p>
           </div>
        </div>
      </section>

      <div class="grid-container">
    <!-- Card 1 -->
    <a href="service1.html" class="card">
      <h2 class="card-title">House Cleaning</h2>
      <img src="./resource/cleaning.jpg" class="card-image" />
      <p class="card-description">
        Regular cleaning, deep cleaning, and specialized services like carpet or window cleaning.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 2 -->
    <a href="service2.html" class="card">
      <h2 class="card-title">Garden Maintenance</h2>
      <img src="./resource/garden-maintenance-service.jpg" alt="Image 2" class="card-image" />
      <p class="card-description">
        Landscaping, lawn mowing, gardening, and seasonal yard care.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 3 -->
    <a href="service3.html" class="card">
      <h2 class="card-title">Plumbing</h2>
      <img src="./resource/Plumbing.jpg" alt="Image 3" class="card-image" />
      <p class="card-description">
        Repairing leaks, installing fixtures, and handling any water-related issues.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 4 -->
    <a href="service4.html" class="card">
      <h2 class="card-title">Appliance Repair and Maintenance </h2>
      <img src="./resource/Appliance.jpg" alt="Image 4" class="card-image" />
      <p class="card-description">
        Fixing and servicing household appliances like refrigerators, ovens, and washing machines.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 5 -->
    <a href="service5.html" class="card">
      <h2 class="card-title">Painting</h2>
      <img src="./resource/painting.jpg" alt="Image 5" class="card-image" />
      <p class="card-description">
        Interior and exterior painting, as well as wallpaper installation and removal.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 6 -->
    <a href="service6.html" class="card">
      <h2 class="card-title">Roofing Services</h2>
      <img src="./resource/roofing.jpg" alt="Image 6" class="card-image" />
      <p class="card-description">
        Repairing roofs and ensuring proper drainage.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 7 -->
    <a href="service7.html" class="card">
      <h2 class="card-title">Furniture Installation</h2>
      <img src="./resource/furniture-installation-service.jpg" alt="Image 7" class="card-image" />
      <p class="card-description">
        Furniture installation service professionally assembles and positions your furniture to ensure it fits perfectly and looks great in your space.
      </p>
      <button class="read-more">Read More</button>
    </a>
    <!-- Card 8 -->
    <a href="service8.html" class="card">
      <h2 class="card-title">Electrical Services</h2>
      <img src="./resource/electronics.jpg" alt="Image 8" class="card-image" />
      <p class="card-description">
        Wiring, lighting installation, electrical repairs, and home safety upgrades.
      </p>
      <button class="read-more">Read More</button>
    </a>
    
  </div>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container grid-list">

      <div class="footer-brand">

        <a href="#" class="logo">
          <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home">
        </a>

        <p class="footer-text">
          &copy; 2025 prajapatimeetkumar. <br> All rights reserved.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Get in Touch</p>
        </li>

        <li>
          <address class="footer-text">
            Kamana Chokdi, Visnagar, Gujarat, India
          </address>
        </li>

        <li>
          <a href="mailto:info@email.com" class="footer-link">infotaskease@email.com</a>
        </li>

        <li>
          <a href="tel:001234567890" class="footer-link">+(91) 8849582321</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Learn More</p>
        </li>

        <li>
          <a href="#" class="footer-link">About Us</a>
        </li>

        <li>
          <a href="#" class="footer-link">Our Story</a>
        </li>

        <li>
          <a href="#" class="footer-link">Projects</a>
        </li>

        <li>
          <a href="#" class="footer-link">Terms of Use</a>
        </li>

        <li>
          <a href="#" class="footer-link">Privacy Policy</a>
        </li>

      </ul>

      <div class="footer-list">

        <p class="h4 footer-list-title">Our Newsletter</p>

        <p class="footer-text">
          Subscribe to our newsletter to get our news & deals delivered to you.
        </p>

        <form action="" class="input-wrapper">
          <input type="email" name="email_address" placeholder="Email Address" required class="input-field">

          <button type="submit" class="submit-btn">Join</button>
        </form>

      </div>

    </div>
  </footer>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>