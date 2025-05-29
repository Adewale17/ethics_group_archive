@include('layouts.header')

<section class="overview">
    <h2>Explore Igbo Culture</h2>
    <div class="card-container">
        @foreach ($archives as $archive)
        <div class="card">
<img src="{{ asset('assets/images/' . $archive->image) }}" alt="Igbo Traditional Architecture">
            <div class="card-content">
                <h3>{{ $archive->title }}</h3>
                <p>{{$archive->description}}...</p>
                <a href="igbo-architecture.php" class="read-more-btn">Read More</a>
            </div>
        </div>
        @endforeach


    </div>
</section>

<!-- Footer -->
@include('layouts.footer')
