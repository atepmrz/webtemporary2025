@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-0 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-5 d-flex">
            <h1 class="display-3 text-white animated slideInRight">Layanan Antar</h1>

            <div class="d-lg-flex d-none w-60 wow fadeInUp">
                <img class="img-fluid px-5" src="{{ asset('img/header/layar-header.jpg') }}" alt="header layar">
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    @include('main.partial.partLayar')
@endsection
