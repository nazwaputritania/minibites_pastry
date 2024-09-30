<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="padding: 2rem 4rem; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">
            <img src="{{ asset('images/benarlogo.png') }}" alt="Logo MiniBites" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!" style="color: #CD3449; font-size: 1.2rem;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!" style="color: #CD3449; font-size: 1.2rem;">Menu</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #CD3449; font-size: 1.2rem;">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!" style="font-size: 1rem;">All Products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!" style="font-size: 1rem;">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!" style="font-size: 1rem;">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn" style="background-color: #CD3449; color: white; margin-right: 1rem;" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-light text-dark ms-1 rounded-pill">0</span>
                </button>
                @auth
                    <a class="btn btn-outline-danger" href="{{ route('dashboard') }}" style="color: #CD3449; border-color: #CD3449; font-size: 1.2rem;">Profile</a>
                @else
                    <a class="btn btn-outline-danger" href="{{ route('login') }}" style="color: #CD3449; border-color: #CD3449; font-size: 1.2rem;">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
