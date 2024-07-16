@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Promo Pinter</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Promosi</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Promo Pinter</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="voucher">
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
                                    <h4>Promo berlaku setiap 2 periode</h4>
                                    <span>Promo ini berlaku di Toserba Prama Borma setiap 2 periode dalam satu bulannya,
                                        mulai dari tanggal 1 – 15 & 16 – 31 setiap bulannya. Promo PILIHAN TERMURAH jadi
                                        pilihan belanja murah terbaik untuk groseries, daging, buah dan perlangkapan
                                        kebutuhan lainnya hanya di Prama Borma.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Promo pilihan termurah</h4>
                                    <span>Promo PILIHAN TERMURAH jadi pilihan belanja murah terbaik untuk groseries, daging,
                                        buah dan perlangkapan
                                        kebutuhan lainnya hanya di Prama Borma.</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/promo/produkpinter.jpg') }}" alt="Promo Pinter"
                    style="border-radius: 15px">
            </div>
        </div>
    </section>
@endsection
