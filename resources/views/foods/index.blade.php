@extends("layouts.head")

@section("main-content")
<div class="container-lg py-5">
    <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap">
        <div>
            <h1 class="text-white fw-bold display-5">Special <span class="text-warning">Menu</span></h1>
            <p class="text-white-50">The best dishes on our menu</p>
        </div>
        <span class="badge rounded-pill border border-light border-1 m-0">
            <span class="badge rounded-pill bg-black text-black border border-warning border-2 p-3 px-4 shadow">
                <span class="text-warning fs-5">{{ $foods->total() }}</span>
                <span class="ms-1 h6 text-white">items found</span>
            </span>
        </span>
    </div>

    <div class="row g-4">
        @foreach ($foods as $f)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card bg-dark border-0 h-100 shadow rounded-4 overflow-hidden food-card-modern position-relative" style="cursor: pointer;">
                <div class="position-relative p-3">
                    @if ($f->type == 'drink')
                    <img src="{{ asset('/img/drink.png') }}" class="img-fluid w-100 rounded-4 shadow" alt="{{ $f->name }}">
                    @else
                    <img src="{{ asset('/img/food.jpg') }}" class="img-fluid w-100 rounded-4 shadow" alt="{{ $f->name }}">
                    @endif

                    @php
                    $color = match($f->category->name ?? '') {
                    'Salad' => 'success',
                    'Drinks' => 'info',
                    'Fast food' => 'danger',
                    default => 'warning'
                    };
                    @endphp
                    <span class="position-absolute top-0 start-0 m-4 badge bg-{{ $color }} shadow-sm" style="z-index: 2;">
                        {{ $f->category->name ?? 'Menu' }}
                    </span>
                </div>

                <div class="card-body pt-0 px-4 pb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title fw-bold text-white mb-0">{{ $f->name }}</h5>
                        <span class="text-warning fw-bold fs-5">{{ $f->price ?? '0' }}<small class="ms-1 fs-6">TMT</small></span>
                    </div>
                    <p class="text-white-50 small mb-4">
                        <i class="bi bi-shop text-info me-1"></i> {{ $f->restourant->name ?? 'Restaurant' }}
                    </p>
                    <a href="/foods/show/{{ $f->id }}" class="btn btn-warning w-100 rounded-3 fw-bold py-2 shadow-sm text-dark stretched-link">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="my-5" data-bs-theme="dark">
        <div class="d-none d-md-block">
            {{ $foods->links('pagination::bootstrap-5') }}
        </div>
        <div class="d-block d-md-none">
            {{ $foods->links('pagination::simple-bootstrap-5') }}
        </div>
    </div>

</div>
@endsection