<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Inventory Biji Kopi</a>
        <!-- <a class="navbar-brand" href="/">
            <img src="{{ asset('img\logo.png') }}" alt="logo" height="30" class="d-inline-block align-text-top">
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="\dashboard">
                        <span data-feather="home"></span>Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('\dashboard\category') ? 'active' : '' }}" aria-current="page" href="\dashboard\category">
                        <span data-feather="clipboard"></span>Category</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('\dashboard\product') ? 'active' : '' }}" aria-current="page" href="\dashboard\product">
                        <span data-feather="box"></span>Product</a>
                </li>

                                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('\dashboard\team') ? 'active' : '' }}" aria-current="page" href="\dashboard\team">
                        <span data-feather="user"></span>Employees</a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello , {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/"><i class="bi bi-clipboard-minus"></i> Home</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" action="get">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                            </form>

                    </ul>
                </li>
                @else
                <li>
                <li class="nav-item">
                    <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>