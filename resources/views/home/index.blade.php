@extends("layouts.head")

@section("main-content")
<div class="container-lg py-5 px-4 border-end border-start border-warning">
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
    <div class="d-flex justify-content-between align-items-center flex-wrap pt-4">
        <div>
            <h1 class="text-white fw-bold display-5">Food<span class="text-warning">s</span></h1>
        </div>
        <span class="badge rounded-pill bg-dark text-black border border-warning p-3 px-4 shadow">
            <span class="text-warning fs-5">{{ $foods->count() }}</span> <span class="ms-1 text-light">items found</span>
        </span>
    </div>
    <div class="row g-4 mt-0">
        @foreach ($foods as $f)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 h-100 shadow rounded-4 overflow-hidden food-card-modern position-relative">
                <div class="position-relative p-3">
                    @if ($f->type == 'drink')
                    <img src="{{ asset('/img/drink.png') }}" class="img-fluid w-100 rounded-4 shadow" alt="{{ $f->name }}">
                    @else
                    <img src="{{ asset('/img/food.jpg') }}" class="img-fluid w-100 rounded-4 shadow" alt="{{ $f->name }}">
                    @endif
                    @php
                    $color = match($f->category->name ?? '') {
                    'Pizza' => 'danger',
                    'Drinks' => 'info',
                    'Burgers' => 'success',
                    default => 'warning'
                    };
                    @endphp
                    <span class="position-absolute top-0 start-0 m-4 badge h3 bg-{{ $color }} shadow-sm">
                        {{ $f->category->name ?? 'Menu' }}
                    </span>
                </div>

                <div class="card-body pt-0 px-4 pb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title fw-bold text-white mb-0">{{ $f->name }}</h5>
                        <span class="text-warning fw-bold fs-5">{{ $f->price ?? '0' }}<small class="ms-1 fs-6">TMT</small></span>
                    </div>

                    <p class="text-white-50 small mb-4">
                        <i class="bi bi-shop text-info me-1"></i> {{ $f->restourant->name ?? 'Lezzet Space' }}
                    </p>
                    <a href="/foods/show/{{ $f->id }}" class="btn btn-warning stretched-link w-100 rounded-3 fw-bold py-2 shadow-sm text-dark">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection