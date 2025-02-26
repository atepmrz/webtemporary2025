@extends('main.master_layout')
@section('konten')
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Promo JSM</h1>
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
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.5s">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>PROMO JSM (Jumat Sabtu Minggu)</h4>
                                <span>Akhir pekan ada promo di Prama Borma dan Prama Fresh? Iya, setiap akhir pekan ada
                                    promo menarik yang super hemat di PROMO JSM (Jumat Sabtu Minggu). Belanja week end
                                    semakin seru, murah dan pas di kantong. </span>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Member Day</h4>
                                <span>Belanja pakai Member, lebih murah dan banyak untungnya</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md wow fadeInUp">
            <img class="img-fluid" src="{{ asset('img/promo/jsm/jsm1.jpg') }}" alt="Promo JSM"
                style="border-radius: 15px;">
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

        @for ($x = 1; $x <= 10; $x++) <a class="project-item pb-4 px-3" href="{{ url('/layar') }}"><br>
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