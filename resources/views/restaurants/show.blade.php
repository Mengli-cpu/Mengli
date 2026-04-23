@extends("layouts.head")

@section("main-content")
<div class="container py-5">
    <div class="mb-2">
        <a href="/restaurants" class="text-white-50 text-decoration-none hover-warning">
            <i class="bi bi-arrow-left me-2"></i> Back to Menu
        </a>
    </div>
    <div class="rounded-5 p-5 mb-5 shadow-lg position-relative overflow-hidden"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/img/restaurant-bg.jpg'); background-size: cover;">
        <div class="position-relative z-index-1">
            <h1 class="display-3 fw-bold text-white mb-2">{{ $restourant->name }}</h1>
            <div class="d-flex align-items-center text-warning mb-4">
                <i class="bi bi-star-fill me-2"></i>
                <span class="fw-bold fs-4">{{ $restourant->rating ?? '4.8' }}</span>
                <span class="text-white-50 ms-3 small"><i class="bi bi-geo-alt me-1"></i> {{ $restourant->address }}</span>
            </div>
            <p class="text-white-50 lead col-lg-6">Welcome to the {{ $restourant->name }}!</p>
        </div>
    </div>
    <h2 class="text-white fw-bold mb-4">Our Menu</h2>

    <div class="row g-4">
        @forelse ($restourant->foods as $f)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card bg-dark border-secondary border-opacity-25 h-100 shadow-sm p-2 text-center">
                <img src="/img/{{ $f->type == 'drink' ? 'drink.png' : 'food.jpg' }}" class="card-img-top rounded-4 p-2" alt="">
                <div class="card-body">
                    <h5 class="text-white fw-bold">{{ $f->name }}</h5>
                    <p class="text-warning fw-bold">{{ $f->price }} TMT</p>
                    <a href="/foods/show/{{ $f->id }}" class="btn btn-outline-warning btn-sm rounded-pill w-100">Details</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-white-50">This restaurant doesn't have a menu yet.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection