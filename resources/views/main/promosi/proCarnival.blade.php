@extends('main.master_layout')
@section('konten')
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
    <div class="container py-4">
        <h1 class="display-3 text-white animated slideInRight">Promo Carnival</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/promo-carnival') }}" class="text-white">Promosi</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
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
        height: 470px;
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

<section id="carnival" class="container-fluid">
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
                                <span>📆 Berlaku selama bulan Juli!</span><br>
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
                                <span>🎊 Kumpulkan 5 struk, dapatkan free 1x bermain</span><br>
                                <span>🎊 Free Mandi Bola</span><br>
                                <span>🎊 Main terus Diskon terus</span><br>
                                {{-- <span>Free SABUN </span><br>
                                <span>Free Mandi Bareng ATEP </span><br> --}}
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
                            <img class="promo-card-img" src="{{ asset($file) }}" alt="Promo Carnival"
                                onclick="openModal(this.src, this.alt)">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" alt="" class="img-fluid rounded"
                    style="width: 100%; max-height:580px; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

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

<script>
    function openModal(imgSrc, imgAlt) {
            const modalImg = document.getElementById('modalImage');
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modalImg.src = imgSrc;
            modalImg.alt = imgAlt;
            modal.show();
        }
</script>
@endsection
