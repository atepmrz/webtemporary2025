@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-primary" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Selaras</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Promosi</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Selaras</li> --}}
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
                                    <h4>Promo SELARAS (SEnin SeLAsa RAbu Selalu Hemat) </h4>
                                    <span>Akhir pekan ada promo di Prama Borma dan Prama Fresh? Iya, setiap akhir pekan ada
                                        promo menarik yang super hemat di PROMO JSM (Jumat Sabtu Minggu). Belanja week end
                                        semakin seru, murah dan pas di kantong. </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/promo/selaras.jpg') }}" alt="Promo Selaras"
                    style="border-radius: 15px;">
            </div>
        </div>
    </section>
@endsection
