@include('layouts.header')


    <!-- <section class="profile-header">
    <h1>Yoruba People</h1>
    <div class="hero-img-wrapper">
        <img src="images/yoruba-nation.jpeg" alt="Yoruba Culture" class="hero-image">
    </div>
</section> -->

<section class="overview">
  <h2>Explore Hausa Culture</h2>
  <div class="card-container">
    <div class="card">
      <img src="{{asset('assets/images/hausa1.jpg') }}" alt="Hausa Architecture">
      <div class="card-content">
        <h3>Traditional Architecture</h3>
        <p>Hausa architecture is known for its distinctive mud buildings, geometric designs, and ancient city walls...</p>
        <a href="hausa-architecture.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="{{asset('assets/images/hausa2.jpg') }}" alt="Hausa Language">
      <div class="card-content">
        <h3>Hausa Language</h3>
        <p>Spoken widely across West Africa, the Hausa language is a major communication tool and cultural identity marker...</p>
        <a href="hausa-language.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/hausa.jpg" alt="Hausa Clothing">
      <div class="card-content">
        <h3>Traditional Clothing</h3>
        <p>Known for their flowing gowns, turbans, and embroidery, Hausa attire reflects elegance and cultural pride...</p>
        <a href="hausa-clothing.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/hausa4.jpeg" alt="Hausa Festivals">
      <div class="card-content">
        <h3>Cultural Festivals</h3>
        <p>Festivals such as Durbar showcase equestrian parades, music, and dance that celebrate Hausa heritage...</p>
        <a href="hausa-festivals.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/hausa5.jpeg" alt="Hausa Food">
      <div class="card-content">
        <h3>Traditional Cuisine</h3>
        <p>Hausa dishes like Tuwo Shinkafa and Miyan Kuka are staples, rich in flavor and deeply rooted in tradition...</p>
        <a href="hausa-food.php" class="read-more-btn">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="images/hausa6.jpeg" alt="Hausa Music & Dance">
      <div class="card-content">
        <h3>Music & Dance</h3>
        <p>Drumming, praise singing, and cultural dance performances play a key role in Hausa social life and ceremonies...</p>
        <a href="hausa-music.php" class="read-more-btn">Read More</a>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')
