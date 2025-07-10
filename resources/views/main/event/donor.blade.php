@extends('main.master_layout')

@section('konten')
<style>
    .sidebar-thumb-img {
        height: 150px; 
        width: 100%;
        object-fit: cover; 
        object-position: center top; 
        background-color: #f8f9fa;
        border-radius: 0.25rem;
        transition: transform 0.3s ease;
    }

    .sidebar-thumb-img:hover {
        transform: scale(1.05);
    }

    .sidebar-sticky {
        position: sticky;
        top: 20px;
        max-height: 720px; 
        overflow-y: auto;
        padding-right: 0.5rem;
    }

    @media (max-width: 991.98px) {
        .sidebar-sticky {
            position: static; 
            max-height: none;
            overflow-y: visible;
            padding-right: 0;
            margin-top: 2rem;
        }

        .sidebar-thumb-img {
            height: 100px; 
            object-fit: cover; 
            object-position: center top; 
        }
    }
</style>

<script>
    window.addEventListener("load", function() {
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

<div class="container my-5">
    <div class="row d-flex align-items-start">
        <!-- Konten utama -->
        <div class="col-lg-8 mb-4 mb-lg-0">
            <h2 class="text-center mb-5">🩸AKSI NYATA DONOR DARAH🩸</h2>

            <div class="text-center mb-4">
                <img src="{{ asset('img/event&news/donor/1.jpg') }}" alt="Aksi Donor Darah" class="img-fluid rounded"
                    style="
                        max-width: 80%;
                        max-height: 400px;
                        cursor: pointer;
                        object-fit: contain;
                    "
                    onclick="openModal(this.src, this.alt)">
            </div>

            <div class="pe-lg-4">
                <p class="fs-5 fw-bold">Setetes Darah, Selamatkan Jiwa Vol.5</p>
                <p class="fs-5">
                    Saatnya jadi <strong>pahlawan kemanusiaan!</strong> Donorkan darahmu dan bantu mereka yang sedang
                    berjuang untuk hidup ❤️
                </p>

                <p>
                    📅 <strong>Sabtu, 9 Agustus 2025</strong><br>
                    ⏰ <strong>09.00 - 13.00 WIB</strong><br>
                    📍 <strong>Entrance Borma Gempol</strong>
                </p>

                <p class="fs-5 fw-bold text-success">
                    🎁 Dapatkan gift menarik bagi pendonor yang lolos!!
                </p>

                <p class="fs-5 fw-bold mt-4">
                    🔗 Daftar sekarang:
                    <br>
                    <a href="https://bit.ly/ANDD_Borma9Aug" target="_blank">https://bit.ly/ANDD_Borma9Aug</a>
                </p>

                <p class="mt-4 fs-5 fst-italic">
                    Setetes darah, Sejuta Harapan, Bersama kita bantu sesama.
                </p>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="sidebar-sticky">
                <h5 class="mb-3">Event & News Lainnya</h5>

                <!-- Contoh satu thumbnail -->
                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('event.mewarnai') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/bck1.jpg') }}" alt="Lomba Mewarnai" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">🎨 Lomba Mewarnai</h6>
                        </div>
                    </a>
                </div>

                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('event.pbb') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/pbb1.jpg') }}" alt="Pelatihan PBB" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">🎁 PBB Berhadiah</h6>
                        </div>
                    </a>
                </div>

                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('event.resep') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/resep/churros.jpg') }}" alt="Kegiatan Resep" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">👨‍🍳 RECIPE</h6>
                        </div>
                    </a>
                </div>

                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('event.icecream') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/icecream/3.jpg') }}" alt="Ice Cream" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">🍨 Ice Cream</h6>
                        </div>
                    </a>
                </div>

                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('event.sasha') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/sasha/1.jpg') }}" alt="Sasha Hair Color" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">🧴 Sasha Hair Color</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Zoom Gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" alt="" class="img-fluid rounded"
                    style="width: 100%; max-height: 80vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

@endsection
