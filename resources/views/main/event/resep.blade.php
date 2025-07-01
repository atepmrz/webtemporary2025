@extends('main.master_layout')

@section('konten')
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
        <!-- Judul -->

        <h1 class="text-center mb-5"><strong>🍽️ MY RECIPE 🍽️</strong></h1>
        <hr>


        <h2 class="text-center mb-5">🍦 ICE CREAM FAIR - CHURROS RECIPE 🍩</h2>

        <!-- Gambar di tengah -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset('img/event&news/resep/churros.jpg') }}" alt="Ice Cream Churros" class="img-fluid rounded shadow"
                    style="max-height: 450px; cursor: pointer;" onclick="openModal(this.src, this.alt)">
            </div>
        </div>

        <!-- Deskripsi dan resep -->
        <div class="mb-5 px-3" style="max-width: 800px; margin: 0 auto;">
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
                <li>Matikan kompor, masukkan terigu & vanilla, aduk cepat. Nyalakan kembali dengan api kecil hingga kalis.
                </li>
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
            <p>Menu pendamping apa yang cocok sama es krim selain roti? <strong>Churros</strong> bisa nih! Selain enak,
                bikinnya juga simple 😋</p>

            <p>Dapatkan produk-produk lainnya hanya di cabang-cabang Prama Borma di bawah ini:</p>
            <ul>
                <li>📍 Prama Toserba Banjaran, Babakan Sari, Ciparay</li>
                <li>📍 Borma Buah Batu, Cikutra, Cijerah, Kerkof, Gempol</li>
                <li>📍 Prama Fresh Mekarwangi, Burangrang, Garuda, Perintis (Sarijadi)</li>
                <li>📍 Tikma Soreang</li>
            </ul>
        </div>
    </div>

    <!-- Modal Gambar Besar -->
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
