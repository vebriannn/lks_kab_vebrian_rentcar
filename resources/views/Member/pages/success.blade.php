<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('rental/assets/css/style.css') }}">

    <style>
        #lottie {
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

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

    <section class="success py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <div id="lottie"></div>
                    <h1 class="display-6 fw-bold mb-2">Penyewaan Berhasil</h1>
                    <p>Terima kasih telah melakukan penyewaan mobil di Rent Car. Mohon menunggu konfirmasi
                        dari kami.</p>
                    <a href="{{route('home')}}" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

    <script>
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: "{{ asset('rental/assets/images/success.json') }}"
        });
    </script>
</body>

</html>