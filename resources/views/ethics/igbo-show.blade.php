@include('layouts.header')

<section class="detail-page">
    <div class="card-detail">
        <img src="{{ asset('assets/images/'. $archive->image) }}" alt="{{ $archive->title }}">
        <div class="card-content">
            <h2>{{ $archive->title }}</h2>
            <p>{{ $archive->content }}</p>
        </div>
    </div>
</section>

@include('layouts.footer')
