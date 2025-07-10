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
            <h1 class="text-center mb-5"><strong>🍽️MY RECIPE🍽️</strong></h1>
            <hr>

            <h2 class="text-center mb-5">🍦 ICE CREAM FAIR - CHURROS RECIPE 🍩</h2>

            <!-- Gambar di tengah -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('img/event&news/resep/churros.jpg') }}" alt="Ice Cream Churros"
                        class="img-fluid rounded shadow" style="max-height: 450px; cursor: pointer;"
                        onclick="openModal(this.src, this.alt)">
                </div>
            </div>

            <!-- Deskripsi dan resep -->
            <div class="mb-5 pe-lg-4">
                <p class="fs-5 fw-bold">Bahan:</p>
                <ul>
                    <li>150 gram tepung terigu</li>
                    <li>250 ml air</li>
                    <li>50 gram margarin</li>
                    <li>20 gram gula pasir</li>
                    <li>¼ sdt garam, vanilla essence</li>
                    <li>2 telur</li>
                    <li>Minyak goreng secukupnya</li>
                </ul>

                <p class="fs-5 fw-bold">Cara Membuat:</p>
                <ol>
                    <li>Siapkan panci berisi air, masukkan garam, margarin dan gula. Rebus hingga mendidih.</li>
                    <li>Matikan kompor, masukkan terigu & vanilla, aduk cepat. Nyalakan kembali dengan api kecil hingga kalis.</li>
                    <li>Masukkan telur, aduk rata. Masukkan ke plastik segitiga yang sudah diberi spuit.</li>
                    <li>Siapkan loyang beralas tepung, semprotkan adonan memanjang. Simpan di freezer hingga agak keras.</li>
                    <li>Panaskan minyak, goreng churros hingga matang.</li>
                    <li>Taruh churros di piring dan tambahkan es krim favoritmu di atasnya.</li>
                </ol>

                <p class="fs-5 fw-bold mt-4">Kontak & Media Sosial:</p>
                <ul>
                    <li>Instagram: @pramaborma_cj</li>
                    <li>WhatsApp: 0822 1401 8470</li>
                    <li>Instagram: @pramafresh.id</li>
                </ul>
                <p>Menu pendamping apa yang cocok sama es krim selain roti? <strong>Churros</strong> bisa nih! Selain enak, bikinnya juga simple 😋</p>

                <p>Dapatkan produk-produk lainnya hanya di cabang-cabang Prama Borma di bawah ini:</p>
                <ul>
                    <li>📍 Prama Toserba Banjaran, Babakan Sari, Ciparay</li>
                    <li>📍 Borma Buah Batu, Cikutra, Cijerah, Kerkof, Gempol</li>
                    <li>📍 Prama Fresh Mekarwangi, Burangrang, Garuda, Perintis (Sarijadi)</li>
                    <li>📍 Tikma Soreang</li>
                </ul>
            </div>

            <hr>
            <h2 class="text-center mb-5">🌮 TACO DAGING & SAYUR 🌮</h2>

            <!-- Gambar di tengah -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('img/event&news/resep/tacodagingsayur.jpg') }}" alt="Taco Daging Sayur"
                        class="img-fluid rounded shadow" style="max-height: 450px; cursor: pointer;"
                        onclick="openModal(this.src, this.alt)">
                </div>
            </div>

            <!-- Deskripsi dan resep -->
            <div class="mb-5 pe-lg-4">
                <p class="fs-5 fw-bold">Bahan:</p>
                <ul>
                    <li>Kulit taco</li>
                    <li>250gr daging sapi giling</li>
                    <li>1 sdm minyak zaitun</li>
                    <li>2 siung bawang putih (haluskan)</li>
                    <li>½ buah bawang bombay (cacah kecil)</li>
                    <li>50gr pasta tomat</li>
                    <li>1 sdt bubuk cabai</li>
                    <li>3 sdm garam</li>
                    <li>1 buah tomat (potong kecil)</li>
                    <li>1 lembar daun lettuce</li>
                    <li>50gr keju cheddar (parut halus)</li>
                </ul>

                <p class="fs-5 fw-bold">Cara Membuat:</p>
                <ol>
                    <li>Panaskan minyak pada wajan, tambahkan bombay dan bawang putih, lalu tumis hingga setengah matang. Masukkan pasta tomat dan bubuk cabai.</li>
                    <li>Masukkan daging giling dan garam lalu masak hingga matang.</li>
                    <li>Masukkan daging pada lembaran taco. Hias dengan tomat, daun lettuce, dan keju cheddar yang sudah diparut.</li>
                </ol>

                <p class="fs-5 fw-bold mt-4">Kontak & Media Sosial:</p>
                <ul>
                    <li>Instagram: @pramaborma_cj</li>
                    <li>WhatsApp: 0822 1401 8470</li>
                    <li>Instagram: @pramafresh.id</li>
                </ul>
                <p>Bikin masakan yang bisa dimasak bareng anak yuk, biar bisa seru-seruan juga nih di dapur sambil merasakan proses membuat makanan, jadi lebih seru dan pastinya jadi pengalaman menarik buat anak😉🥰</p>

                <p>Dapatkan produk-produk lainnya hanya di cabang-cabang Prama Borma di bawah ini:</p>
                <ul>
                    <li>📍 Prama Toserba Banjaran, Babakan Sari, Ciparay</li>
                    <li>📍 Borma Buah Batu, Cikutra, Cijerah, Kerkof, Gempol</li>
                    <li>📍 Prama Fresh Mekarwangi, Burangrang, Garuda, Perintis (Sarijadi)</li>
                    <li>📍 Tikma Soreang</li>
                </ul>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="sidebar-sticky">
                <h5 class="mb-3">Event & News Lainnya</h5>

                <!-- Thumbnail 1 -->
                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('news.donor') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/donor/1.jpg') }}" alt="Aksi Donor Darah" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">🩸 Aksi Donor Darah</h6>
                        </div>
                    </a>
                </div>

                <!-- Thumbnail 2 -->
                <div class="card mb-3 border-0 shadow-sm">
                    <a href="{{ route('event.mewarnai') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/bck1.jpg') }}" alt="Lomba Mewarnai" class="sidebar-thumb-img">
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
                    <a href="{{ route('event.icecream') }}" class="text-decoration-none">
                        <img src="{{ asset('img/event&news/icecream/3.jpg') }}" alt="Ice Cream" class="sidebar-thumb-img">
                        <div class="card-body p-2">
                            <span class="badge bg-primary mb-1">Event</span>
                            <h6 class="card-title mb-1">🍨 Ice Cream</h6>
                        </div>
                    </a>
                </div>

                <!-- Thumbnail 5 -->
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

<!-- Modal untuk zoom gambar -->
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