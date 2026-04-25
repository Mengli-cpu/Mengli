@extends("layouts.head")

@section("main-content")
<div class="container py-5">
    <div class="mb-2">
        <a href="/foods" class="text-white-50 text-decoration-none hover-warning">
            <i class="bi bi-arrow-left me-2"></i> Back to Menu
        </a>
    </div>

    <div class="row g-5 align-items-center">
        <div class="col-lg-4">
            <div class="position-relative p-3 bg-dark border border-secondary border-opacity-25 rounded-5 shadow-lg">
                <img src="/img/{{ $food->type == 'drink' ? 'drink.png' : 'food.jpg' }}"
                    class="img-fluid rounded-5 w-100 shadow" alt="{{ $food->name }}">
                <span class="position-absolute top-0 start-0 m-5 badge bg-warning text-black px-3 py-2 rounded-pill shadow">
                    {{ $food->category->name ?? 'General' }}
                </span>
            </div>
        </div>
        <div class="col-lg-8 text-light">
            <div class="ps-lg-4">
                <h1 class="display-4 fw-bold mb-2">{{ $food->name }}</h1>

                <div class="d-flex align-items-center mb-4">
                    <span class="h2 text-warning fw-bold mb-0">{{ $food->price }} TMT</span>
                    <span class="ms-3 badge border border-secondary text-white-50 small">Code: {{ $food->code }}</span>
                </div>

                <hr class="border-secondary border-opacity-25 mb-4">
                <div class="mb-4 p-3 text-black bg-white bg-opacity-5 rounded-4 border border-white border-opacity-10">
                    <p class="small mb-1">Prepared by:</p>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shop text-warning fs-4 me-3"></i>
                        <h5 class="mb-0">{{ $food->restourant->name ?? 'Not Found' }}</h5>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-8 d-flex align-items-center">
                        <button class="btn btn-warning w-100 py-3 rounded-pill fw-bold shadow">
                            <i class="bi bi-cart-plus me-2"></i> Add to Order
                        </button>
                        <button class="btn btn-outline-danger pt-3 pb-2 px-3 rounded-circle mx-3">
                            <i class="bi bi-heart h5"></i>
                        </button>
                        {{ $food->like_count }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection