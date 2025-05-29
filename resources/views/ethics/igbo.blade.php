@include('layouts.header')

    <section class="overview">
  <h2>Explore Igbo Culture</h2>
  <div class="card-container">
    <div class="card">
      <img src="{{asset('assets/images/igbo1.jpeg') }}" alt="Igbo Traditional Architecture">
      <div class="card-content">
        <h3>Traditional Architecture</h3>
        <p>Igbo architecture features mud huts with thatched roofs, reflecting communal living and environmental harmony.</p>
        <a href="igbo-architecture.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="{{asset('assets/images/igbo2.jpeg') }}" alt="Igbo Language">
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
@include('layouts.footer')
