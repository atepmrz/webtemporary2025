@extends('main.master_layout')
@section('konten')
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-primary" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Selaras</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/promo-selaras') }}" class="text-white">Promosi</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<section id="voucher" class="container-fluid">
    <div class="row p-4 g-4">
        <!-- Keterangan -->
        <div class="col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.5s">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Promo SELARAS (SEnin SeLAsa RAbu Selalu Hemat)</h4>
                                <span>Akhir pekan ada promo di Prama Borma dan Prama Fresh? Iya, setiap akhir pekan ada
                                    promo menarik yang super hemat di PROMO JSM (Jumat Sabtu Minggu). Belanja week end
                                    semakin seru, murah dan pas di kantong.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        <div class="col-md-6 wow fadeInUp">
            <style>
                .carousel-wrapper {
                    position: relative;
                    max-width: 320px;
                    margin: auto;
                }

                .carousel-inner img {
                    border-radius: 15px;
                    width: 100%;
                    height: auto;
                    object-fit: contain;
                }

                .custom-side-nav {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    z-index: 10;
                    background-color: #ff5722;
                    /* Warna oranye solid */
                    border: none;
                    color: white;
                    width: 48px;
                    height: 48px;
                    font-size: 20px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: background 0.3s ease;
                }

                .custom-side-nav:hover {
                    background-color: #e64a19;
                    /* Oranye gelap saat hover */
                }

                .custom-prev {
                    left: -55px;
                }

                .custom-next {
                    right: -55px;
                }

                @media (max-width: 768px) {
                    .custom-side-nav {
                        width: 42px;
                        height: 42px;
                        font-size: 18px;
                    }

                    .custom-prev {
                        left: -45px;
                    }

                    .custom-next {
                        right: -45px;
                    }
                }
            </style>

            <div class="carousel-wrapper">
                <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner text-center">
                        @for ($i = 1; $i <= 4; $i++) <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                            <img src="{{ asset('img/promo/selaras/' . $i . '.jpg') }}" alt="Promo Selaras {{ $i }}">
                    </div>
                    @endfor
                </div>

                <!-- Tombol Prev -->
                <button class="custom-side-nav custom-prev" type="button" data-bs-target="#promoCarousel"
                    data-bs-slide="prev" aria-label="Previous">
                    <i class="fa fa-chevron-left"></i>
                </button>

                <!-- Tombol Next -->
                <button class="custom-side-nav custom-next" type="button" data-bs-target="#promoCarousel"
                    data-bs-slide="next" aria-label="Next">
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection