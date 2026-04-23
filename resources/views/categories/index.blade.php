@extends("layouts.head")

@section("main-content")
<div class="container-lg py-5">
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="sticky-top" style="top: 90px;">
                <div class="card bg-dark border-secondary border-opacity-25 shadow">
                    <div class="card-header bg-transparent border-secondary border-opacity-25 py-3">
                        <h5 class="text-white fw-bold mb-0">Categories</h5>
                    </div>
                    <div class="sidebar-scrollbox" style="max-height: calc(100vh - 150px); overflow-y: auto;">
                        <div id="category-list" class="list-group list-group-flush">
                            @foreach($categories as $c)
                            <a href="#category-{{ $c->id }}" class="list-group-item list-group-item-action bg-transparent text-white-50 border-secondary border-opacity-10 py-3">
                                <i class="bi bi-chevron-right small me-2 text-warning"></i> {{ $c->name }}
                                <span class="badge bg-secondary float-end rounded-pill">{{ $c->food->count() }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            @foreach($categories as $c)
            <div id="category-{{ $c->id }}" class="mb-5">
                <h2 class="text-white fw-bold mb-4 border-start border-warning border-4 ps-3">
                    {{ $c->name }}
                </h2>

                <div class="row g-3">
                    @foreach($c->food as $f)
                    <div class="col-md-6 position-relative">
                        <div class="card bg-dark border-secondary border-opacity-25 h-100 shadow-sm p-2">
                            <div class="d-flex align-items-center">
                                <div style="width: 100px;">
                                    <img src="/img/{{ $f->type == 'drink' ? 'drink.png' : 'food.jpg' }}" class="img-fluid rounded-3" alt="">
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h6 class="text-white fw-bold mb-1">{{ $f->name }}</h6>
                                    <p class="text-white-50 small mb-0">{{ $f->price }} TMT</p>
                                </div>
                                <a href="/foods/show/{{ $f->id }}" class="btn btn-outline-warning btn-sm rounded-circle mx-2 stretched-link">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection