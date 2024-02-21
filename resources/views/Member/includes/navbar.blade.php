<header>
    <nav class="navbar navbar-expand-md py-3 navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Rent Car</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav
                    mb-2 mb-md-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{route('home')}}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('cars') ? 'active' : '' }}" href="{{route('mobil')}}">
                            Mobil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{route('contact')}}">
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>

            @if(auth()->user()) 
                <p  class="p-0 m-0">Hallo {{auth()->user()->name}}, Logout <a href="{{route('member.logout')}}">Disini.</a></p>
            @else
                <div class="d-flex">
                    <a href="{{ route('member.login') }}" class="btn btn-outline-primary">Masuk</a>
                    <a href="{{ route('member.register') }}" class="btn btn-primary ms-3">Daftar</a>
                </div>
            @endif
        </div>
    </nav>
</header>