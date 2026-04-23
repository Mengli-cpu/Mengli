@extends("layouts.head")

@section("main-content")
<div class="container-lg py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-light fw-bold">Restaurants</h1>
        <span class="badge bg-warning text-dark">{{ $restaurants->count() }} places found</span>
    </div>

    <div class="row g-4">
        @foreach ($restaurants as $r)
        <div class="col-12 col-md-6 col-lg-2">
            <div class="card bg-dark border-secondary h-100 shadow-sm hover-effect position-relative">
                <img src="{{ asset('/img/restaurant.png') }}" class="card-img-top p-2 rounded-4" alt="{{ $r->name }}">

                <div class="card-body text-light text-center">
                    <h5 class="card-title fw-bold">{{ $r->name }}</h5>
                    <div class="rating-wrapper">
                        @php $rating =$r->rating ?? 4.8; @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="star-container" style="position: relative; display: inline-block;">
                            <i class="bi bi-star-fill text-secondary"></i>

                            @php
                            $fill = max(0, min(100, ($rating - $i + 1) * 100));
                            @endphp
                            <div class="star-filled" style="--star-width: {{ $fill }}%; width: var(--star-width);">
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                    </div>
                    @endfor
                    <span class="ms-2 text-light-50">{{ $rating }}</span>
                </div>


                <p class="text-white-50 small">
                    <i class="fas fa-map-marker-alt me-1"></i> {{ $r->address ?? 'Ashgabat, Turkmenistan' }}
                </p>

                <a href="/restaurants/show/{{ $r->id }}" class="btn stretched-link btn-outline-warning btn-sm rounded-pill px-4 mt-2">
                    View Menu
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection