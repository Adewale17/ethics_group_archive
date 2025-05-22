<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ethnic Groups of Nigeria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

  <!-- Navbar -->
 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" alt="Nigerian Heritage" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon bg-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
  <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

    <!-- Dropdown for Ethnic Groups -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="ethnicDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ethnic Groups
      </a>
      <ul class="dropdown-menu" aria-labelledby="ethnicDropdown">
        <li><a class="dropdown-item" href="yoruba.html">Yoruba</a></li>
        <li><a class="dropdown-item" href="hausa.html">Hausa</a></li>
        <li><a class="dropdown-item" href="igbo.html">Igbo</a></li>
      </ul>
    </li>

    <!-- <li class="nav-item"><a class="nav-link" href="#">Contribute</a></li> -->
    <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
  </ul>
</div>

  </div>
</nav>


    <!-- <section class="profile-header">
    <h1>Yoruba People</h1>
    <div class="hero-img-wrapper">
        <img src="images/yoruba-nation.jpeg" alt="Yoruba Culture" class="hero-image">
    </div>
</section> -->

    <section class="overview">
  <h2>Explore Igbo Culture</h2>
  <div class="card-container">
    <div class="card">
      <img src="images/igbo1.jpeg" alt="Igbo Traditional Architecture">
      <div class="card-content">
        <h3>Traditional Architecture</h3>
        <p>Igbo architecture features mud huts with thatched roofs, reflecting communal living and environmental harmony.</p>
        <a href="igbo-architecture.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/igbo2.jpeg" alt="Igbo Language">
      <div class="card-content">
        <h3>Igbo Language</h3>
        <p>The Igbo language is rich in proverbs and expressions, serving as a vital medium for cultural transmission.</p>
        <a href="igbo-language.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/igbo3.jpeg" alt="Igbo Traditional Attire">
      <div class="card-content">
        <h3>Traditional Attire</h3>
        <p>Igbo attire, adorned with vibrant fabrics and coral beads, signifies status and cultural identity.</p>
        <a href="igbo-attire.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/igbo4.jpeg" alt="Igbo Festivals">
      <div class="card-content">
        <h3>Cultural Festivals</h3>
        <p>Festivals like the New Yam Festival celebrate harvest and community, featuring dances and rituals.</p>
        <a href="igbo-festivals.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/igbo5.jpeg" alt="Igbo Cuisine">
      <div class="card-content">
        <h3>Traditional Cuisine</h3>
        <p>Igbo cuisine includes dishes like Ofe Nsala and Akpu, reflecting the region's agricultural bounty.</p>
        <a href="igbo-cuisine.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/igbo6.jpeg" alt="Igbo Music and Dance">
      <div class="card-content">
        <h3>Music & Dance</h3>
        <p>Igbo music and dance, characterized by rhythmic drumming and expressive movements, are integral to ceremonies.</p>
        <a href="igbo-music-dance.php" class="read-more-btn">Read More</a>
      </div>
    </div>
  </div>
</section>

   <!-- Footer -->
 <footer class="footer bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Quick Links -->
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">About</a></li>
          <li><a href="#" class="text-white">Contact</a></li>
          <li><a href="#" class="text-white">Privacy Policy</a></li>
          <li><a href="#" class="text-white">Terms & Conditions</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <li>Email: <a href="mailto:info@nigerianheritagearchive.com" class="text-white">info@nigerianheritagearchive.com</a></li>
          <li>Phone: +234 123 456 789</li>
          <li>Address: 123 Heritage Street, Lagos, Nigeria</li>
        </ul>
      </div>

      <!-- Social Media -->
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Facebook</a></li>
          <li><a href="#" class="text-white">Twitter</a></li>
          <li><a href="#" class="text-white">Instagram</a></li>
          <li><a href="#" class="text-white">LinkedIn</a></li>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center mt-4">
      <p class="mb-0">&copy; 2025 Nigerian Heritage Archive. All rights reserved.</p>
    </div>
  </div>
</footer>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
