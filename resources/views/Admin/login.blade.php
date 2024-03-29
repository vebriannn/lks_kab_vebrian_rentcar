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


    {{-- <header>
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
                            <a class="nav-link " href="{{route('mobil')}}">
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
    </header> --}}

    <section class="login py-5">
        <div class="container">
        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Masuk</h3>
                            <form action="{{ route('admin.login.auth') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" >
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>
                                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                            </form>
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