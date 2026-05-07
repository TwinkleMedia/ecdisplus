<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/styleecdis.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="./styleecdis.css">
  <link rel="stylesheet" href="./style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="favicon.png">

</head>

<body>
  <section>
    <?php include './navbar.php'; ?>
  </section>

  <!-- ================= PAGE HEADER ================= -->
  <section class="page-header">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <div class="page-header-content">
            <h1>Who we are</h1>
            <ul class="breadcrumb-list">
              <li><a href="./index.php">Home</a></li>
              <li>/</li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= ABOUT INTRO ================= -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 order-2 order-lg-1">
          <div class="section-heading">
            <h3>World-class Training Facility for All Brand Type Specific ECDIS training</h3>
          </div>

       <p>
  At ECDISPLUS, we specialize in delivering manufacturer-approved, type-specific ECDIS training designed for safe and efficient navigation. With state-of-the-art simulators and expert instructors, our programs prepare seafarers to operate ECDIS systems effectively, comply with international regulations, and enhance maritime safety.
</p>

<p>
  Our goal is simple:
  <br><br>
  <strong>Safe Navigation</strong> – Minimizing risks through professional training
  <br>
  <strong>Safe Life</strong> – Equipping seafarers with skills for real-world challenges
  <br>
  <strong>Cleaner Sea</strong> – Promoting environmentally responsible operations
  <br><br>
  Your trusted partner in building competence for the modern bridge.
  <br>
 
</p>
        </div>

        <div class="col-lg-6 order-1 order-lg-2">
          <div class="about-image">
            <img src="./assets/choose (1).png" alt="About us">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ================= VIDEO SECTION ================= -->
  <!-- <section class="video-section">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-lg-6">
        <div class="section-heading">
          <span class="subheading">Working Process</span>
          <h3>Watch video to know more about us</h3>
        </div>
      </div>

      <div class="col-lg-6 text-lg-end text-center">
        <a href="#" class="video-btn">
          <i class="fa fa-play"></i>
        </a>
      </div>

    </div>
  </div>
</section> -->

  <!-- ================= FEATURES ================= -->
  <section class="about-section light-bg">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <div class="section-heading">
            <span class="subheading">Top Categories</span>
            <h3>IMO & Flag State Approved ECDIS Training for Seafarers</h3>
          </div>

          <div class="feature-box">
            <h4>Type Approved ECDIS Training</h4>
            <p>We provide type approved ECDIS training as per IMO, STCW and Flag State requirements, accepted by
              shipping companies worldwide.</p>
          </div>

          <div class="feature-box">
            <h4>Manufacturer-Specific Practical Training</h4>
            <p>Hands-on training on type approved ECDIS systems including JRC, Furuno, Wartsila, Simrad and other major
              manufacturers.</p>
          </div>

          <!-- <a href="about-us.php" class="btn-main">More About ECDISPLUS</a> -->
        </div>


        <div class="col-lg-6">
          <div class="about-image">
            <img src="./assets/2-2 (1).png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ================= TEAM ================= -->
  <!-- <section class="team-section">
  <div class="container">
    <div class="section-heading text-center">
      <h3>Our Team</h3>
    </div>

    <div class="row">
      
      <div class="col-lg-3 col-md-6">
        <div class="team-card">
          <img src="./assets/team/rashmi.jpg" alt="">
          <h4>Rashmi</h4>
          <p>Founder</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="team-card">
          <img src="./assets/team/ramakant.jpg" alt="">
          <h4>Ramakant Yadav</h4>
          <p>Technical Head</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="team-card">
          <img src="./assets/team/pawan.jpeg" alt="">
          <h4>Pawan</h4>
          <p>IT Technical</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="team-card">
          <img src="./assets/team/Vedika.jpeg" alt="">
          <h4>Vedika</h4>
          <p>Business Development Manager</p>
        </div>
      </div>
    </div>
  </div>
</section> -->



  <?php
  include './footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>