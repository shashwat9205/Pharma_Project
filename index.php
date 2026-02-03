<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pharma</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="fonts.googleapis.com" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="header-wrapper">
      <!-- pre-header  -->
      <div class="pre-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8">
              <span
                ><i class="bi bi-geo-alt"></i> 177 Giant Hill Road, South
                City</span
              >
              <span class="ms-3"
                ><i class="bi bi-envelope"></i> info@company.com</span
              >
              <span class="ms-3"
                ><i class="bi bi-telephone"></i> +91 99999 99999</span
              >
            </div>
            <div class="col-md-4 text-end">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
              <a href="#" class="social-icon"
                ><i class="bi bi-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>

      <!-- header  -->
      <nav class="navbar navbar-expand-lg main-header">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="images/Logo.png" alt="Logo" height="60" />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Our Products</a>
              </li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">Blog</a></li> -->
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

          <?php if (isset($_SESSION['user_id'])): ?>

  <div class="dropdown">
    <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">
      Hi, <?php echo $_SESSION['user_name']; ?>
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    </ul>
  </div>

<?php else: ?>

  <a href="login.php" class="btn btn-outline-light">User Login</a>

<?php endif; ?>

          </div>
        </div>
      </nav>

      <!-- hero-section  -->
      <div class="hero-section">
        <div class="container">
          <h1>Pharmaceutical Solutions for Business</h1>
          <p>Serving Wholesalers, Pharmacies & Institutions</p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
            mollis, nisi non tristique vestibulum, arcu diam ultrices mauris, id
            nulla vestibulum metus metus vel mauris. Aenean malesuada ipsum sit
            amet sapien posuere, nec ornare arcu commodo.
          </p>
          <a href="#" class="btn btn-hero btn-lg btn-primary">Get Best Price</a>
        </div>

        <div class="hero-content mt-5">
          <span>• Request Quotes</span>
          <span>• Bulk Orders</span>
          <span>• Verified Sources</span>
        </div>
      </div>
    </div>


    <!-- about-home-section -->

    <section class="about-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <span class="about-tag">● About Us</span>

            <img
              src="images/section1.png"
              class="img-fluid about-img"
              alt="About"
            />
          </div>

          <div class="col-lg-6">
            <h2 class="about-title">
              Get to Know The<br />
              Story Behind Our Company
            </h2>

            <p class="about-text">
              We are a trusted pharma B2B supplier providing quality medicines,
              bulk solutions, and verified sourcing for distributors, hospitals,
              and healthcare institutions.
            </p>

            <div class="row mt-4">
              <div class="col-md-5">
                <div class="experience-box">
                  <h1>25+</h1>
                  <p>Years of Experience</p>
                </div>
              </div>

              <div class="col-md-7">
                <ul class="about-list">
                  <li>Certified & Verified Medicines</li>
                  <li>Bulk & Institutional Supply</li>
                  <li>Trusted Distribution Network</li>
                  <li>Regulatory Compliant Products</li>
                  <li>On-Time Delivery Assurance</li>
                </ul>
              </div>
            </div>

            <a href="#" class="btn btn-success">View More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- product-main-section -->

    <section class="products-section">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <span class="section-tag">● Our Products</span>
            <h2 class="section-title">Discover Our Recommended Products</h2>
          </div>
          <a href="product.html" class="btn btn-success">More Products</a>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="product-category sticky-box">
              <h5>Product Category</h5>
              <ul>
                <li>Cleanroom Furniture</li>
                <li>Air System</li>
                <li>Safety Equipment</li>
                <li>Cleanroom Consumables</li>
                <li>Equipment & Instruments</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="row g-4">
              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <img src="images/first.png" alt="" />
                  <h6>Xerosera-SP</h6>
                  <p>
                    Aceclofenac 100mg + Paracetamol 325mg + Serratiopeptidase
                  </p>
                  <a href="#">Detail Product →</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <img src="images/second.png" alt="" />
                  <h6>Buromont-LC</h6>
                  <p>
                    Montelukast Sodium and Levocetirizine Hydrochloride Tablets
                    IP
                  </p>
                  <a href="#">Detail Product →</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <img src="images/third.png" alt="" />
                  <h6>RHYZAL-DSR</h6>
                  <p>Rabeprazole Sodium and Domperidone (SR) CAPSULES</p>
                  <a href="#">Detail Product →</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <img src="images/fourth.png" alt="" />
                  <h6>AUGIBRI-CV 625</h6>
                  <p>Amoxycillin and Potassium Clavulanate Tablets IP</p>
                  <a href="#">Detail Product →</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <img src="images/fifth.png" alt="" />
                  <h6>Pantobre-DSR</h6>
                  <p>
                    Pantoprazole Gastro-Resistant and Domperidone
                    Prolonge-Release Capsules IP
                  </p>
                  <a href="#">Detail Product →</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="product-card">
                  <img src="images/sixth.png" alt="" />
                  <h6>Brisef-200</h6>
                  <p>Cefixime Tablets I.P. 200mg</p>
                  <a href="#">Detail Product →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- stats-section  -->

    <section class="pharma-highlight">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="highlight-title">
              Reliable Pharmaceutical Supply,<br />
              With Results That Matter
            </h2>

            <p class="highlight-text">
              We are a trusted medicine B2B supplier serving distributors,
              hospitals, pharmacies, and healthcare institutions with certified
              products, transparent sourcing, and timely delivery.
            </p>

            <a href="#" class="btn btn-outline-light"> Discover Products → </a>
          </div>

          <div class="col-lg-6">
            <div class="row g-0">
              <div class="col-6">
                <div class="stat-box green">
                  <h3>5K+</h3>
                  <p>Business Clients</p>
                </div>
              </div>

              <div class="col-6">
                <div class="stat-box dark">
                  <h3>25+</h3>
                  <p>Years of Experience</p>
                </div>
              </div>

              <div class="col-6">
                <div class="stat-box green">
                  <h3>200+</h3>
                  <p>Products Portfolio</p>
                </div>
              </div>

              <div class="col-6">
                <div class="stat-box dark">
                  <h3>10M+</h3>
                  <p>Annual Supply Units</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- why-choose-us-section -->

    <section class="choose-us d-flex">
      <div class="col-lg-4 mt-5">
        <p class="choose-title mb-5">● Why Choose Us</p>
        <h1 class="choose-heading">
          Reliable Pharmaceutical Solutions for Your Business
        </h1>
        <p class="mb-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ex
          tortor, vehicula non felis vitae, accumsan nec faucibus ipsum.
        </p>
        <a href="#" class="btn btn-success">Get Started</a>
      </div>

      <div class="col-lg-4 justify-content-center">
        <div class="below">
          <img src="images/choose-main.png" alt="" />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="why-item mb-3">
          <i class="bi bi-patch-check"></i>
          <div>
            <h3>Verified Medicines</h3>
            <p>
              We supply verified pharmaceutical products sourced exclusively
              from licensed manufacturers and government-approved suppliers,
              ensuring authenticity, safety, and full regulatory compliance.
            </p>
          </div>
        </div>

        <div class="why-item mb-3">
          <i class="bi bi-award"></i>
          <div>
            <h3>Quality Assurance</h3>
            <p>
              Our quality assurance process includes batch verification,
              documentation checks, and regulatory compliance validation,
              ensuring every supplied product meets safety, quality, and
              efficacy standards.
            </p>
          </div>
        </div>

        <div class="why-item">
          <i class="fas fa-handshake"></i>
          <div>
            <h3>Trusted Partnerships</h3>
            <p>
              Our trusted partnerships are built on consistent supply,
              transparent pricing, and dependable service, supporting hospitals,
              distributors, and pharmacies in meeting their operational and
              patient-care needs.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- feedback-section  -->

    <section class="feedback">
      <div class="row align-items-center me-4">
        <div class="col-lg-9 d-flex justify-content-between">
          <p class="feedback-title">● Testimonials</p>
          <h1 class="feedback-heading me-3">
            Trusted Feedback From Our <br />
            Customers
          </h1>
        </div>

        <div class="col-lg-3">
          <p>
            Ut luctus consequat nulla ac tristique. Integer iaculis risus nec
            nisi aliquet non porta leo rutrum id vehicula.
          </p>
        </div>
      </div>

      <div class="row mt-5 p-2">
        <div class="col-lg-8 d-flex">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <p class="card-text p-3">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Praesent sodales justo non libero convallis, nec tristique
                  velit fringilla. Maecenas felis turpis, ultricies vitae
                  vulputate vitae, bibendum non ipsum. Donec tempus felis dolor,
                  vitae lacinia neque lobortis eget.
                </p>
                <div
                  class="customer-feedback d-flex align-items-center justify-content-center gap-3"
                >
                  <i class="fa fa-user user-icon" aria-hidden="true"></i>
                  <div class="customer-name">
                    <h5>Akash Tiwari</h5>
                    <span>Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 ms-2">
            <div class="card">
              <div class="card-body">
                <p class="card-text p-3">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Praesent sodales justo non libero convallis, nec tristique
                  velit fringilla. Maecenas felis turpis, ultricies vitae
                  vulputate vitae, bibendum non ipsum. Donec tempus felis dolor,
                  vitae lacinia neque lobortis eget.
                </p>

                <div
                  class="customer-feedback d-flex align-items-center justify-content-center gap-3"
                >
                  <i class="fa fa-user user-icon" aria-hidden="true"></i>
                  <div class="customer-name">
                    <h5>Akash Tiwari</h5>
                    <span>Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 ratings p-4">
          <div class="star-client d-flex align-items-center gap-4">
            <h1 class="number-rating">4.5</h1>
            <div class="cont-stars ">
              <div class="stars">
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star-half"></i></span>
              </div>
              <h5>Client Ratings</h5>
            </div>
          </div>

          <div class="star-content mt-4">

          <h6>Aenean malesuada, mi sit amet mattis dui condimentum, 
            neque nisi lacinia erat, nec varius purus nisl pretium libero.</h6>
            </div>
        </div>
      </div>
    </section>



    <!-- footer  -->

<footer class="pharma-footer">

  <div class="pharma-footer-top">
    <div class="container ">
      <div class="row">

        <div class="col-lg-4 ">
          <h5 class="pf-title">Call Us</h5>
          <p class="pf-text">📞 +91 98765 43210</p>

          <h5 class="pf-title mt-4">Email Us</h5>
          <p class="pf-text">✉️ info@pharmasupply.com</p>

          <h5 class="pf-title mt-4">Our Location</h5>
          <p class="pf-text">
            177 Business Park,<br>
            Mumbai, Maharashtra – 400001
          </p>
        </div>

        <div class="col-lg-4">
          <img src="images/logo.png" alt="Logo" class="pf-logo">

          <p class="pf-about">
            We are a trusted pharmaceutical B2B supplier delivering
            verified medicines with transparency, reliability, and
            regulatory compliance.
          </p>

          <div class="pf-links">
            <a href="#">About Us</a>
            <a href="#">Our Products</a>
            <a href="#">Contact Us</a>
            <a href="#">Our Team</a>
          </div>

          <div class="pf-gallery">
            <img src="images/pharma1.png" alt="">
            <img src="images/pharma2.png" alt="">
            <img src="images/pharma3.png" alt="">
            <img src="images/pharma4.png" alt="">
          </div>
        </div>

        <div class="col-lg-4">
          <h5 class="pf-title">Subscribe Newsletter</h5>
          <p class="pf-text">
            Join our newsletter to receive updates,
            offers, and pharma industry insights.
          </p>

          <form class="pf-newsletter">
            <input type="email" placeholder="Email">
            <button type="submit">Subscribe</button>
          </form>

          <h5 class="pf-title mt-4">Find Us On</h5>
          <div class="pf-social">
            <a href="#">f</a>
            <a href="#">i</a>
            <a href="#">t</a>
            <a href="#">y</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  
  <div class="pharma-footer-bottom">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <p class="pf-copy">
            © 2025 Pharma Supply. All rights reserved.
          </p>
        </div>

        <div class="col-lg-6 text-end">
          <a href="#">Terms & Conditions</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Help & FAQs</a>
        </div>

      </div>
    </div>
  </div>

</footer>


























    <script>
      const header = document.querySelector(".main-header");
      window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </body>
</html>



