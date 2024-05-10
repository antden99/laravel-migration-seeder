<header class="bg-dark text-center text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active_nav' : '' }}"
                                href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'trains' ? 'active_nav' : '' }}"
                                href="{{route('trains')}}">Trains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'price' ? 'active_nav' : '' }}"
                                href="{{route('price')}}">Price</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
