@extends('main.master_layout')
@section('konten')
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Promo Carnival</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Promosi</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<style>
    .promo-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 470px;
        max-width: auto-fit;
        /* display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); */

        /* padding: 10px; */
        /* Ukuran tinggi yang lebih besar */
    }

    .promo-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .promo-card img {
        transition: transform 0.5s ease;
        width: 100%;
        height: 100%;
        /* Mengisi seluruh tinggi kartu */
        object-fit: cover;
        /* Menjaga rasio aspek gambar */
    }

    .promo-card:hover img {
        transform: scale(1.05);
    }

    .promo-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #ff5722;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 12px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
</style>

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
                                <h4>🎪 LIBUR TELAH TIBA! Diskon GILA-GILAAN</h4>
                                <span>🎁 Hadiah langsung – Games seru</span><br>
                                <span>📆 Hanya sampai 6 Juli!</span><br>
                                <span>📍 Datang & Rayakan Belanja Meriahmu Sekarang!</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>🎪 Bermain sepuasnya</h4>
                                <span>🎊 Free Mandi Bola</span><br>
                                {{-- <span>Free SABUN</span><br>
                                <span>Free Mandi Bareng ATEP </span><br> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="promo-card">
                        <img src="{{ asset('img/promo/carnival/carniv1.jpg') }}" alt="Promo Carnival 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-card">
                        <img src="{{ asset('img/promo/carnival/carniv2.jpg') }}" alt="Promo Carnival 2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-card">
                        <img src="{{ asset('img/promo/carnival/carniv4.jpg') }}" alt="Promo Carnival 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
