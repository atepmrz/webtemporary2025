@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Promo Fashion</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Promosi</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Promo JSM</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="voucher" class="container-fluid"
        style="background-image:url({{ asset('img/promo/fashion/bg-batik.jpg') }})">
        <div class="row p-4 g-4 text-center rounded2">
            <div class="col-md-6 wow fadeInUp">
                <video class="rounded2" width="100%" controls style="width: 500px; height:500px">
                    <source src="{{ asset('video/batik.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-md-6 wow fadeInUp">
                <video class="rounded2" width="100%" controls style="width: 500px; height:500px">
                    <source src="{{ asset('video/fashion1.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <style>
        .rounded2 {
            border-radius: 10px;
            border: 10px;
        }
    </style>
@endsection
