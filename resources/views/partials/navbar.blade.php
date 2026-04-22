<nav class="navbar navbar-expand-lg sticky-top glass-nav bg-dark shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="/" style="font-size: 32px; font-weight: 800; color: #fff; letter-spacing: -1px;">
            Has <span class="text-warning">Tagam</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active text-warning' : 'text-white-50' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('restaurants*') ? 'active text-warning' : 'text-white-50' }}" href="/restaurants">Restaurants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('foods*') ? 'active text-warning' : 'text-white-50' }}" href="/foods">Foods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories*') ? 'active text-warning' : 'text-white-50' }}" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="#">About Us</a>
                </li>
                
                <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                    <a class="btn btn-outline-warning rounded-pill px-4" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
