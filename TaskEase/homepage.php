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
  <link rel="stylesheet" href="./assets/css/style.css">

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
            <a href="aboutUs.html" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="serviceHome.php" class="navbar-link">Our Services</a>
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

      <a href="#" class="btn btn-primary">
    <img src="./resource/user.png" alt="User Profile" 
         style="width: 25px; height: 25px; border-radius: 50%; vertical-align: middle; margin-right: 5px;"></a>

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

            <h1 class="h1 hero-title">Finding Best Services Specific Solution with Experts.</h1>

            <p class="hero-text">
              We’re a creative company that focuses on establishing long-term relationships with customers.
            </p>

            <div class="btn-wrapper">

              <a href="serviceHome.php" class="btn btn-primary">Find Services</a>

              <a href="#" class="btn btn-outline">Contact Us</a>

            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/hero-slide-1.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

                <li class="slider-item">

                  <div class="hero-card">
                    <figure class="img-holder" style="--width: 575; --height: 550;">
                      <img src="./assets/images/hero-slide-2.jpg" width="575" height="550" alt="hero banner"
                        class="img-cover">
                    </figure>

                    <button class="play-btn" aria-label="play adex intro">
                      <ion-icon name="play" aria-hidden="true"></ion-icon>
                    </button>
                  </div>

                </li>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/hero-slide-3.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

              </ul>
            </div>

            <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
              <ion-icon name="arrow-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-slider-next>
              <ion-icon name="arrow-forward"></ion-icon>
            </button>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          <p class="section-subtitle" id="service-label">What We Do?</p>

          <h2 class="h2 section-title">
            The service we offer is specifically designed to meet your needs.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">24/7 Support</h3>

                <p class="card-text">
                  Our website offers 24/7 service, ensuring convenience and reliability anytime you need. Whether it's home services, we are always available to assist you.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">User Friendly</h3>

                <p class="card-text">
                  Our website is designed to be user-friendly, ensuring easy navigation, quick access to services, and a seamless experience. Enjoy hassle-free browsing with a simple, intuitive interface.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="cloud-download-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Expert Solution</h3>

                <p class="card-text">
                  We provide expert services with skilled professionals ensuring top-quality solutions. Our team is dedicated to delivering reliable, efficient, and high-standard services tailored to your needs
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Home Services</h3>

                <p class="card-text">
                  We offer a wide range of home services, including cleaning, repairs, and maintenance. Our trusted professionals ensure quality, reliability, and convenience at your doorstep.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="800" height="580" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle" id="about-label">Why Choose Us?</p>

            <h2 class="h2 section-title">
              We bring solutions to make life easier for our clients.
            </h2>

            <ul>

              <li class="about-item">
                <div class="accordion-card expanded" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Professional Expert</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    We provide expert services with skilled professionals ensuring top-quality solutions. Our team is dedicated to delivering reliable, efficient, and high-standard services tailored to your needs.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Top-Notch Support</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    We provide top-notch services with a focus on quality, reliability, and customer satisfaction. Our expert team ensures a seamless experience, meeting your needs with excellence.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Exclusive Assets</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    We offer exclusive asset services, ensuring premium quality, security, and reliability. Our expert team provides tailored solutions to manage and enhance your valuable assets efficiently.
                  </p>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="./assets/images/feature-banner.png" width="800" height="531" loading="lazy" alt="feature banner"
              class="w-100">
          </figure>

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">Our Solutions</p>

            <h2 class="h2 section-title">
              We make your spending stress-free for you to have the perfect control.
            </h2>

            <p class="section-text">
              We provide exclusive asset services, ensuring top-quality management, security, and reliability. Our expert team offers tailored solutions to enhance and maintain your valuable assets efficiently. With a customer-focused approach, we deliver premium service, meeting your specific needs with professionalism, innovation, and excellence in every aspect.
            </p>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    User Friendly
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    24/7 Support
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Expert Solution
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Home Services
                  </span>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #STATS
      -->

      <section class="stats" aria-label="our stats">
        <div class="container">

          <ul class="stats-card has-bg-image" style="background-image: url('./assets/images/stats-bg.jpg')">

            <li>
              <p class="card-text">
                <span class="h1">500+</span>

                <spna class="span">Completed Services Task</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">245+</span>

                <spna class="span">Happy Customers</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">75+</span>

                <spna class="span">Expert Gig Workers</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">10+</span>

                <spna class="span">Awards Won</spna>
              </p>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PROJECT
      -->

      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <p class="section-subtitle" id="project-label">Case Studies</p>

          <h2 class="h2 section-title">
            Check out some of our awesome projects with creative ideas and great design.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/blog-1.jpg" width="560" height="350" loading="lazy"
                    alt="Ligula tristique quis risus" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Ligula tristique quis risus</a>
                  </h3>

                  <p class="card-text">
                    Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras
                    imperdiet nun eu dolor.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-04-14">14 Apr 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Coding</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/blog-2.jpg" width="560" height="350" loading="lazy"
                    alt="Nullam id dolor elit id nibh" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Nullam id dolor elit id nibh</a>
                  </h3>

                  <p class="card-text">
                    Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras
                    imperdiet nun eu dolor.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-03-29">29 Mar 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Workspace</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="./assets/images/blog-3.jpg" width="560" height="350" loading="lazy"
                    alt="Ultricies fusce porta elit" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Ultricies fusce porta elit</a>
                  </h3>

                  <p class="card-text">
                    Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras
                    imperdiet nun eu dolor.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-02-26">26 Feb 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Meeting</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" aria-label="call to action">
        <div class="container">

          <h2 class="h2 section-title">
            Join our community by using our services and live stress free life.
          </h2>

          <a href="#" class="btn btn-primary">Try it For Free</a>

        </div>
      </section>

    </article>
  </main>





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