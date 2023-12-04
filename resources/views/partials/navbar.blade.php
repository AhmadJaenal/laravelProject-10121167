<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar-expand-md navbar-light bg-light" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('viewLandingPage') }}">Geanore<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ request()->routeIs('viewLandingPage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('viewLandingPage') }}">Home</a>
                </li>
                <li class="nav-item {{ request()->routeIs('viewShopPage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('viewShopPage') }}">Shop</a>
                </li>
                <li class="nav-item {{ request()->is('viewAboutPage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('viewAboutPage') }}">About us</a>
                </li>
                <li class="nav-item {{ request()->is('viewServicePage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('viewServicePage') }}">Services</a>
                </li>
                <li class="nav-item {{ request()->is('viewBlogPage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('viewBlogPage') }}">Blog</a>
                </li>
                <li class="nav-item {{ request()->is('viewContactPage') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('viewContactPage') }}">Contact us</a>
                </li>
            </ul>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <div class="btn-group mx-4">
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                    @else
                        <img src="{{ asset('img/icon_user.svg') }}" width="20px" data-bs-toggle="dropdown">
                    @endauth
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        @auth
                            <form action="{{ route('actionlogout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-rigth"> Log Out</i>
                                </button>
                            </form>
                        @else
                            <form action="{{ route('login') }}" method="get">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-rigth"> Log In</i>
                                </button>
                            </form>
                        @endauth
                    </ul>
                </div>
                <li><a class="nav-link" href="viewCartPage/{{ auth()->user()->id }}"><img
                            src="{{ asset('img/icon_cart.svg') }}" width="20px"></a></li>
            </ul>
        </div>
    </div>

</nav>
<!-- End Header/Navigation -->
