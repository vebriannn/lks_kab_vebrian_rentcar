<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('rental/assets/css/style.css') }}">
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
                            <a class="nav-link " href="{{route('home')}}">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Mobil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">
                                Kontak Kami
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex">
                    <a href="login.html" class="btn btn-outline-primary">Masuk</a>
                    <a href="register.html" class="btn btn-primary ms-3">Daftar</a>
                </div>
            </div>
        </nav>
    </header>
    <section class="car py-5">
        <div class="container">
            <div class="row">
                <!-- search -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <form action="" class="d-flex justify-content-center align-items-center gap-3">
                        <input type="text" class="form-control search-input" placeholder="Cari Mobil">
                        <button class="btn btn-primary btn-search">Cari</button>
                    </form>

                </div>
            </div>
            <div class="row">
                @foreach ($cars as $car)
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card card-car">
                            <img src="{{ asset('carspicture/' .$car->images ) }}" alt="Car" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $car->name }}</h5>
                                <p class="card-text">{{ $car->price_per_day }} / Hari</p>
                                <a href="car.html" class="btn btn-primary d-block">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>