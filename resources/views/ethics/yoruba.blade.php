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
        @foreach ($archives as $archive)
        <div class="card">
            <img src="{{ asset('assets/images/' . $archive->image) }}" width="60" width="60"
                alt="Yoruba Traditional Architecture">
            <div class="card-content">
                <h3>{{ $archive->title }}</h3>
                <p>{{$archive->description}}...</p>
                <a href="{{ route('yoruba.show', $archive->id) }}" class="read-more-btn">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('layouts.footer')
