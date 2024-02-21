@extends('Member.layouts.app')

@section('title', 'Mobil')

@section('errors')
    @if(isset($message))
        <div class="fixed-top w-100 alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 10; !important">
            <strong>{{ $message }}</strong> 
            <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection

@section('content')
    <section class="car py-5">
        <div class="container">
            <div class="row">
                <!-- search -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                    <form action="{{ route('getcars') }}" class="d-flex justify-content-center align-items-center gap-3" method="post">
                        @csrf
                        <input type="text" class="form-control search-input" placeholder="Cari Mobil" name="searchcars">
                        <button class="btn btn-primary btn-search">Cari</button>
                    </form>
                </div>
            </div>
            <div class="row">
                @if(isset($cars)) 
                    @foreach ($cars as $car)
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="card card-car">
                                <img src="{{ asset('storage/carsImages/'.$car->images) }}" alt="Car" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text">Rp. {{ number_format($car->price_per_day) }} / Hari</p>
                                    <a href="{{ route('member.sewacars', $car->id) }}" class="btn btn-primary d-block">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection