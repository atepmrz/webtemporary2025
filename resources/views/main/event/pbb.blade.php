@extends('main.master_layout')

@section('konten')
<!-- untuk menghilangkan spinner -->
<script>
    window.addEventListener("load", function () {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
        }
    });

    function openModal(imgSrc, imgAlt) {
        const modalImg = document.getElementById('modalImage');
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modalImg.src = imgSrc;
        modalImg.alt = imgAlt;
        modal.show();
    }
</script>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<style>
    .custom-nav {
        position: absolute;
        top: 45%;
        transform: translateY(-50%);
        font-size: 2rem;
        color: #000;
        background: rgba(255, 255, 255, 0.7);
        border: none;
        border-radius: 50%;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 1000;
    }

    .custom-nav:hover {
        background: rgba(255, 255, 255, 0.9);
    }

    .custom-prev {
        left: -20px;
    }

    .custom-next {
        right: -20px;
    }

    @media (max-width: 576px) {
        .custom-prev {
            left: 10px !important;
        }

        .custom-next {
            right: 10px !important;
        }

        .owl-carousel .item img {
            max-height: 300px !important;
        }
    }

    .owl-carousel .item img {
        max-height: 380px;
        transition: transform 0.3s ease;
    }

    .owl-carousel .item img:hover {
        transform: scale(1.02);
    }

    .owl-carousel-wrapper {
        position: relative;
        padding: 0 50px;
    }
</style>

<div class="container-fluid my-5 px-0">
    <h2 class="text-center mb-4">✨ PRAMA BORMA BERHADIAH ✨</h2>

    <!-- Banner full width -->
    <div class="mb-4">
        <img 
            src="{{ asset('img/event&news/pbb/banner1.jpg') }}" 
            alt="PBB 2025 Banner" 
            class="img-fluid w-100" 
            style="max-height: 500px; object-fit: cover; cursor: pointer;"
            onclick="openModal(this.src, this.alt)"
        >
    </div>

    <!-- Teks Deskripsi -->
    <div class="container mb-5 px-3" style="max-width: 900px;">
        <p class="fs-5">
            Belanja min <strong>225.000</strong> selama periode <strong>1 Mei - 30 Juni 2025</strong>, berkesempatan mendapatkan <strong>Hadiah Utama Umroh</strong> untuk 3 Member beruntung 🥳🤩
        </p>
        <p class="fw-bold">🔥 Mekanisme:</p>
        <ul>
            <li>Sudah menjadi Member Prama Borma Group (Prama, Borma, Prama Fresh, dan Tikma)</li>
            <li>Berbelanja min 225.000 (berlaku kelipatan)</li>
            <li>Otomatis mendapatkan 1 kupon undian</li>
        </ul>

        <p class="fw-bold">🔥 Daftar Member:</p>
        <ul>
            <li>WA ke no Layanan Prama Borma: 0878-1452-3770</li>
            <li>Menghubungi bagian Informasi / Penitipan Barang</li>
            <li>Free Registration</li>
            <li>Dapatkan 1 poin setiap belanja Rp 10.000</li>
        </ul>

        <p>
            Program undian ini berlaku di semua cabang Prama Borma Group di bawah ini:
        </p>
        <ul>
            <li>📍 Prama Toserba Banjaran, Babakan Sari, Ciparay</li>
            <li>📍 Borma Buah Batu, Cikutra, Cijerah, Kerkof, Gempol</li>
            <li>📍 Prama Fresh Mekarwangi, Burangrang, Garuda, Perintis (Sarijadi)</li>
            <li>📍 Tikma Soreang</li>
        </ul>

        <p class="fs-5">
            <strong>Belanja pakai Member, KEUNTUNGAN MENANG LEBIH BESAR 🤩🤩</strong>
        </p>
        <p>
            Jadi buat yang udah join member, jangan lupa dipakai membernya.<br>
            Siapa tahu, kamu jadi salah satu pemenang hadiah utama di PBB 2025 ini loh 😉
        </p>
    </div>

    <!-- Carousel Gambar -->
    <div class="owl-carousel-wrapper container position-relative mb-5">
        <div class="owl-carousel owl-theme">
            @for ($i = 1; $i <= 16; $i++)
                <div class="item p-2">
                    <img 
                        src="{{ asset('img/event/pbb/pbb' . $i . '.jpg') }}" 
                        class="img-fluid rounded shadow" 
                        alt="PBB Gambar {{ $i }}" 
                        style="cursor: pointer;"
                        onclick="openModal(this.src, this.alt)"
                    >
                </div>
            @endfor
        </div>
        <!-- Custom nav buttons -->
        <button class="custom-nav custom-prev" id="customPrev">&lt;</button>
        <button class="custom-nav custom-next" id="customNext">&gt;</button>
    </div>
</div>

<!-- Modal Zoom Gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <img id="modalImage" src="" alt="" class="img-fluid rounded" style="width: 100%; max-height: 380px; object-fit: contain;">
      </div>
    </div>
  </div>
</div>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        const owl = $('.owl-carousel');
        owl.owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:3000,
            responsive:{
                0:{ items:1 },
                600:{ items:2 },
                1000:{ items:3 }
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
