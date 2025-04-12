@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Promo Gajian 25/5</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Promosi</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Promo Gajian</li> --}}
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
                                    <h4>PROMO GAJIAN setiap tanggal 25</h4>
                                    <span>Nikmati PROMO GAJIAN 25/5 setiap tanggal 25 sampai dengan tanggal 5 setiap
                                        bulannya</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Belanja murah saat gajian</h4>
                                    <span>Belanja bulanan semakin murah saat gajian atau #PayDay yang berlaku di seluruh
                                        Toserba Prama, Borma dan Prama Fresh dengan harga yang murah dan banyak
                                        promonya</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/promo/promogajian.jpeg') }}" alt="Promo gajian 25/5"
                    style="border-radius: 15px;">
            </div>
        </div>
    </section>
@endsection
