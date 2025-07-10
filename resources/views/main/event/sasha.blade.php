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
                <h2 class="text-center mb-5">✨SASHA - HAIR COLORING✨</h2>

                <!-- Baris Gambar -->
                <div class="row gx-3 justify-content-center mb-4">
                    <div class="col-md-6 mb-3 d-flex justify-content-center">
                        <img src="{{ asset('img/event&news/sasha/1.jpg') }}" alt="Sasha Hair Coloring Event"
                            class="img-fluid rounded shadow" style="max-height: 450px; cursor: pointer;"
                            onclick="openModal(this.src, this.alt)">
                    </div>
                </div>

                <!-- Teks -->
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        Sini kumpul yang suka ganti-ganti warna rambut 🤩😍 Cukup dengan beli produk
                        <strong>@sashahair_id</strong> min Rp 50.000 bisa di warnain gratis loh 🥰
                    </p>
                    <p>
                        Catat waktu dan tempatnya biar ga kelewatan eventnya ya 😉
                    </p>
                    <p>
                        📆 <strong>Sabtu - Minggu, 27 - 29 Juni 2025</strong><br>
                        📍 <strong>Borma Kerkof (Jl. Kerkof No. 35, Leuwigajah)</strong>
                    </p>
                    <p>
                        Slot terbatas setiap harinya, jadi jangan sampai ketinggalan yaa 😉
                    </p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-sticky">
                    <h5 class="mb-3">Event & News Lainnya</h5>

                    <!-- Thumbnail 1 -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <a href="{{ route('news.donor') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/donor/1.jpg') }}" alt="Aksi Donor Darah"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🩸 Aksi Donor Darah</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 2 -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <a href="{{ route('event.mewarnai') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/bck1.jpg') }}" alt="Lomba Mewarnai"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎨 Lomba Mewarnai</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 3 -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <a href="{{ route('event.pbb') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/pbb1.jpg') }}" alt="Pelatihan PBB" class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">🎁 PBB Berhadiah</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 4 -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <a href="{{ route('event.resep') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/resep/churros.jpg') }}" alt="Kegiatan Resep"
                                class="sidebar-thumb-img">
                            <div class="card-body p-2">
                                <span class="badge bg-primary mb-1">Event</span>
                                <h6 class="card-title mb-1">👨‍🍳 RECIPE</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Thumbnail 5 -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <a href="{{ route('event.sasha') }}" class="text-decoration-none">
                            <img src="{{ asset('img/event&news/sasha/1.jpg') }}" alt="Sasha Hair Color"
                                class="sidebar-thumb-img">
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
    {{-- tampilan gambar --}}
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
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
