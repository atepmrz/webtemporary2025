@extends('main.master_layout')
@section('konten')
<!-- Page Header -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
    <div class="container py-4">
        <h1 class="display-3 text-white animated slideInRight">Promo Gajian 25/5</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/promo-gajian') }}" class="text-white">Promosi</a>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<style>
    .promo-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 400px;
        /* Ukuran tinggi yang lebih besar */
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

    .owl-carousel-wrapper {
        position: relative;
    }

    .custom-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
        z-index: 20;
        pointer-events: none;
    }

    .custom-nav button {
        pointer-events: all;
        background-color: rgba(255, 87, 34, 0.4);
        /* oranye transparan */
        border: none;
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        /* bayangan halus */
        transition: all 0.3s ease;
        backdrop-filter: blur(2px);
        /* blur background sedikit */
    }

    .custom-nav button:hover {
        background-color: rgba(255, 87, 34, 0.7);
        /* lebih pekat saat hover */
    }
</style>
<section id="voucher" class="container-fluid">
    <div class="row p-4 g-4">
        <!-- Text Section -->
        <div class="col-md-4">
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

        <!-- Carousel Section -->
        <div class="col-md-8 wow fadeInUp">
            <div class="owl-carousel-wrapper">
                <!-- Custom Buttons -->
                <div class="custom-nav">
                    <button id="customPrev"><i class="fa fa-chevron-left"></i></button>
                    <button id="customNext"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="owl-carousel owl-theme">
                    @foreach ($files as $file)
                    <div class="item">
                        <div class="promo-card">
                            <span class="promo-badge">HOT</span>
                            <a href="{{ url('/layar') }}">
                                <img class="promo-card-img" src="{{ asset($file) }}" alt="Promo">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Owl Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
            var owl = $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: false,
                autoplay: true, // Tambahkan ini supaya autoplay
                autoplayTimeout: 3000, // Durasi tiap slide (3 detik)
                autoplayHoverPause: true, // Pause kalau hover
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });

            $('#customPrev').click(function() {
                owl.trigger('prev.owl.carousel');
            });

            $('#customNext').click(function() {
                owl.trigger('next.owl.carousel');
            });
        });
</script>
@endsection