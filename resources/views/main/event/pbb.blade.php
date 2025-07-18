@extends('main.master_layout')

@section('konten')
    <!-- untuk menghilangkan spinner -->
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

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

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
            left: 5px;
        }

        .custom-next {
            right: 5px;
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
            max-height: 425px;
            transition: transform 0.3s ease;
        }

        .owl-carousel .item img:hover {
            transform: scale(1.02);
        }

        .owl-carousel-wrapper {
            position: relative;
            padding: 0 50px;
        }

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

        /* gambar pengudian */
        .additional-images {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .additional-image {
            height: 390px;
            width: 100%;
            object-fit: contain;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            background-color: #f8f9fa;
        }

        .additional-image:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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

            .additional-image {
                height: 3600px;
            }
        }

        @media (max-width: 576px) {
            .additional-image {
                height: 260px;
            }
        }
    </style>

    <div class="container-fluid my-5 px-0">
        <!-- Judul -->
        <h2 class="text-center mb-4">✨PRAMA BORMA BERHADIAH✨</h2>

        <!-- Banner full width -->
        <div class="mb-4">
            <img src="{{ asset('img/event&news/pbb/banner1.jpg') }}" alt="PBB 2025 Banner" class="img-fluid w-100"
                style="max-height: 500px; object-fit: cover; cursor: pointer;">
        </div>

        <!-- Teks dan Sidebar -->
        <div class="container">
            <div class="row d-flex align-items-start">
                <!-- Konten teks -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <!-- Teks Deskripsi -->
                    <div class="mb-5 pe-lg-4">
                        <p class="fs-5">
                            Belanja min <strong>225.000</strong> selama periode <strong>1 Mei - 30 Juni 2025</strong>,
                            berkesempatan
                            mendapatkan <strong>Hadiah Utama Umroh</strong> untuk 3 Member beruntung 🥳🤩
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
                            <a href="{{ route('event.resep') }}" class="text-decoration-none">
                                <img src="{{ asset('img/event&news/resep/churros.jpg') }}" alt="Kegiatan Resep"
                                    class="sidebar-thumb-img">
                                <div class="card-body p-2">
                                    <span class="badge bg-primary mb-1">Event</span>
                                    <h6 class="card-title mb-1">👨‍🍳 RECIPE</h6>
                                </div>
                            </a>
                        </div>

                        <!-- Thumbnail 4 -->
                        <div class="card mb-3 border-0 shadow-sm">
                            <a href="{{ route('event.icecream') }}" class="text-decoration-none">
                                <img src="{{ asset('img/event&news/icecream/3.jpg') }}" alt="Ice Cream"
                                    class="sidebar-thumb-img">
                                <div class="card-body p-2">
                                    <span class="badge bg-primary mb-1">Event</span>
                                    <h6 class="card-title mb-1">🍨 Ice Cream</h6>
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

        <!-- Carousel Gambar -->
        <div class="owl-carousel-wrapper container-fluid position-relative mb-5">
            <div class="owl-carousel owl-theme">
                @for ($i = 1; $i <= 16; $i++)
                    <div class="item p-2">
                        <img src="{{ asset('img/event&news/pbb/pbb' . $i . '.jpg') }}" class="img-fluid rounded shadow"
                            alt="PBB Gambar {{ $i }}" style="cursor: pointer;"
                            onclick="openModal('{{ asset('img/event&news/pbb/pbb' . $i . '.jpg') }}', 'PBB Gambar {{ $i }}')">
                    </div>
                @endfor
            </div>
            <!-- Custom nav buttons -->
            <button class="custom-nav custom-prev" id="customPrev">
                <</button>
                    <button class="custom-nav custom-next" id="customNext">></button>
        </div>

        <!-- Gambar Pengudian -->
        <div class="container additional-images">
            <h3 class="text-center mb-4">🎉 Pengudian Prama Borma Berhadiah 2025 🎉</h3>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <img src="{{ asset('img/event&news/pbb/ppbb1.jpeg') }}" alt="Dokumentasi Event 1"
                        class="additional-image"
                        onclick="openModal('{{ asset('img/event&news/pbb/ppbb1.jpeg') }}', 'Dokumentasi Event 1')">
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <img src="{{ asset('img/event&news/pbb/ppbb2.jpeg') }}" alt="Dokumentasi Event 2"
                        class="additional-image"
                        onclick="openModal('{{ asset('img/event&news/pbb/ppbb2.jpeg') }}', 'Dokumentasi Event 2')">
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <img src="{{ asset('img/event&news/pbb/ppbb3.jpeg') }}" alt="Dokumentasi Event 3"
                        class="additional-image"
                        onclick="openModal('{{ asset('img/event&news/pbb/ppbb3.jpeg') }}', 'Dokumentasi Event 3')">
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <img src="{{ asset('img/event&news/pbb/ppbb4.jpeg') }}" alt="Dokumentasi Event 4"
                        class="additional-image"
                        onclick="openModal('{{ asset('img/event&news/pbb/ppbb4.jpeg') }}', 'Dokumentasi Event 4')">
                </div>
            </div>

            <!-- Informasi Pengundian -->
            <div class="mt-5 pt-4 border-top">
                <div class="mb-5 pe-lg-4">
                    <p class="fs-5">
                        <strong>PENGUNDIAN PRAMA BORMA BERHADIAH ✨</strong>
                    </p>

                    <p class="fs-5">
                        <strong>JANGAN SAMPAI KETINGGALAN !!!</strong>
                    </p>

                    <p>
                        Acara Pengundian PBB - Prama Borma Berhadiah 2025 yang akan dilaksanakan :
                    </p>
                    <ul>
                        <li>📅 Sabtu, 19 Juli 2025</li>
                        <li>🕘 09.00 WIB - Selesai</li>
                        <li>📍 Prama Banjaran</li>
                    </ul>

                    <p>
                        Acara ini disiarkan secara langsung di :
                    </p>
                    <ul>
                        <li>Youtube : pramaborma cjtv</li>
                        <li>IG : pramaborma_cj & pramafresh.id</li>
                    </ul>

                    <p>
                        Akan ada berbagai acara menarik selama Pengundian, diantaranya :
                    </p>
                    <ul>
                        <li>🔥 Senam Bu-Ria</li>
                        <li>🔥 Jaipong</li>
                        <li>🔥 Lomba Makan Boncabe</li>
                        <li>🔥 Milktruck Greenfields</li>
                        <li>🔥 Live Music</li>
                        <li>🔥 Free Sampling produk sponsor</li>
                        <li>🔥 Diskon produk sampai 20%</li>
                        <li>🔥 Demo Masak</li>
                    </ul>

                    <p class="fs-5">
                        <strong>‼️ PENGUNDIAN INI AKAN DILANGSUNG SECARA TERBUKA DAN DISAKSIKAN OLEH NOTARIS, DINSOS, DAN
                            KEPOLISIAN SETEMPAT SERTA PEJABAT BERWENANG DI PRAMA BANJARAN ‼️</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Zoom Gambar -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Close" style="z-index: 1100;"></button>
                    <img id="modalImage" src="" alt="" class="img-fluid rounded"
                        style="width: 100%; max-height: 95vh; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            const owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
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
