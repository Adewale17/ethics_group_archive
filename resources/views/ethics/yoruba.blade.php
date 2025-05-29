@include('layouts.header')

    <!-- <section class="profile-header">
    <h1>Yoruba People</h1>
    <div class="hero-img-wrapper">
        <img src="images/yoruba-nation.jpeg" alt="Yoruba Culture" class="hero-image">
    </div>
</section> -->

    <section class="overview">
        <h2>Explore Yoruba Culture</h2>
        <div class="card-container">
            <div class="card">
                <img src="{{asset('assets/images/yoruba1.jpeg') }}" alt="Ifa Religion">
                <div class="card-content">
                    <h3>Ifa Religion</h3>
                    <p>Ifa is a system of divination and a central aspect of Yoruba spirituality...</p>
                    <a href="ifa.php" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('assets/images/yoruba2.png') }}" alt="Yoruba Language">
                <div class="card-content">
                    <h3>Yoruba Language</h3>
                    <p>The Yoruba language is rich in proverbs, poetry, and oral traditions...</p>
                    <a href="language.php" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('assets/images/yoruba3.png') }}" alt="Yoruba Clothing">
                <div class="card-content">
                    <h3>Yoruba Clothing</h3>
                    <p>Traditional Yoruba clothing is known for its vibrant colors and intricate designs...</p>
                    <a href="clothing.php" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img src="images/yoruba4.jpeg" alt="Yoruba Festivals">
                <div class="card-content">
                    <h3>Yoruba Festivals</h3>
                    <p>Festivals like the Osun-Osogbo are central to Yoruba culture and traditions...</p>
                    <a href="festivals.php" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="card">
                <img src="images/yoruba5.jpeg" alt="Yoruba Cuisine">
                <div class="card-content">
                    <h3>Yoruba Cuisine</h3>
                    <p>Yoruba dishes like Amala, Ewedu, and Gbegiri reflect a rich culinary heritage rooted in tradition
                        and hospitality.</p>
                    <a href="yoruba-cuisine.php" class="read-more-btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/yoruba6.jpeg" alt="Yoruba Music and Dance">
                <div class="card-content">
                    <h3>Music & Dance</h3>
                    <p>Yoruba music and dance, driven by talking drums and vibrant movements, are vital to ceremonies
                        and celebrations.</p>
                    <a href="yoruba-music-dance.php" class="read-more-btn">Read More</a>
                </div>
            </div>

        </div>
    </section>

@include('layouts.footer')
