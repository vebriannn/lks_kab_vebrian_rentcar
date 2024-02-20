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
                            <a class="nav-link active" href="#">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('mobil')}}">
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



    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Sewa Mobil Dengan Harga Terjangkau</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <a href="" class="btn btn-primary">Lihat Mobil</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('rental/assets/images/car-right.png') }}" alt="Hero" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <section class="car">
        <div class="container">
            <h2 class="display-4 fw-bold text-center mb-5">Mobil Kami</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-4">
                    <div class="card card-car">
                        <img src="{{ asset('rental/assets/images/car-01.jpg') }}" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mobil 1</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="car.html" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-4">
                    <div class="card card-car">
                        <img src="{{ asset('rental/assets/images/car-06.jpg ') }}" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                            ">Mobil 2</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="car.html" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-4">
                    <div class="card card-car"> 
                        <img src="{{ asset('rental/assets/images/car-08.jpg ') }}" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                            ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="car.html" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>