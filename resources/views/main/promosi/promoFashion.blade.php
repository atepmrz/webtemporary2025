@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
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

    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            <div class="col-md wow fadeInUp">
                <video width="100%" controls style="width: 500px; height:500px">
                    <source src="{{ asset('video/batik.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-md wow fadeInUp">
                <video width="100%" controls style="width: 500px; height:500px">
                    <source src="{{ asset('video/fashion1.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <style>
        .rounded2 {
            border-radius: 10px;
        }
    </style>
    <!-- Promosi -->
    <div class="container-fluid pt-0 my-3 px-0">

        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">

            @for ($x = 1; $x <= 9; $x++)
                <a class="project-item pb-4 px-3" href="{{ url('/layar') }}"><br>
                    <img class="img-fluid rounded2" src="{{ asset('img/promo/jsm/jsm' . $x . '.jpg') }}" alt="" />
                    <div class="project-title">
                        <button class="btn btn-light rounded-4 mb-0 text-primary lead">Beli Sekarang <i class="bi bi-cart"
                                style="color: rgb(0, 180, 0)"></i>
                        </button>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <!-- Project End -->
@endsection
