@include('layouts.header')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1>Preserving Nigerian Cultural Heritage</h1>
            <p>Explore the traditions, artifacts, languages, and stories of Nigeria's diverse ethnic groups in one
                digital archive.</p>
            <a href="#" class="btn btn-main px-4 py-2">Explore Now</a>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="container text-center">
        <h2 class="section-title">Featured Cultures</h2>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src={{ asset('assets/images/yorubaw.jpg')}} class="card-img-top" alt="Yoruba Culture">
                    <div class="card-body">
                        <h5 class="card-title">Yoruba</h5>
                        <p class="card-text">Rich in arts, music, and traditional attire. Discover the Yoruba legacy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src={{ asset('assets/images/hausa.jpg') }} class="card-img-top" alt="Hausa Culture">
                    <div class="card-body">
                        <h5 class="card-title">Hausa</h5>
                        <p class="card-text">Explore the deep-rooted Islamic traditions and vibrant crafts of the Hausa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src={{ 'assets/images/igbo1.jpeg' }} class="card-img-top" alt="Igbo Culture">
                    <div class="card-body">
                        <h5 class="card-title">Igbo</h5>
                        <p class="card-text">Known for entrepreneurship, festivals, and rich oral history.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
  @include('layouts.footer')
