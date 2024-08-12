@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Give Me Five</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Promosi</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Give Me Five</li> --}}
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
                                    <h4>Give Me Five</h4>
                                    <span>Belanja barang import lebih murah di PRAMA FRESH dengan DISKON 5% setiap hari
                                        KAMIS untuk 5 kategori barang import. </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/promo/giveMeFive.jpg') }}" alt="Promo Give Me Five"
                    style="border-radius: 15px;">
            </div>
        </div>
    </section>
@endsection
