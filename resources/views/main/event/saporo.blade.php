@extends('main.master_layout')

@section('konten')
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

<div class="container my-5">
    <!-- Judul -->
    <h2 class="text-center mb-5">✨ REPAINT GRATIS ✨</h2>

    <!-- Gambar 2 kolom -->
    <div class="row gx-3 justify-content-center mb-4">
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/saporo/1.jpg') }}" 
                class="img-fluid rounded shadow" 
                style="max-height: 350px; cursor:pointer;" 
                alt="Event Repaint Gratis 1"
                onclick="openModal(this.src, this.alt)"
            >
        </div>

        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/saporo/2.jpg') }}" 
                class="img-fluid rounded shadow" 
                style="max-height: 350px; cursor:pointer;" 
                alt="Event Repaint Gratis 2"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Teks -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Dengan berbelanja produk cat <strong>Sapporo</strong> di cabang <strong>Prama Banjaran</strong>, kamu bisa dapetin <strong>GRATIS repaint</strong> untuk body kendaraan kamu loh 😎
        </p>
        <p class="fs-5">
            Catat waktu dan tempatnya ya, biar gak ketinggalan dan tetep kece buat sunmory 😎😆
        </p>
        <p>
            📅 <strong>28 Juni 2025</strong><br>
            ⏰ <strong>08.00 - 17.00 WIB</strong><br>
            📍 <strong>Prama Banjaran (Jl. Raya Banjaran Barat No.588)</strong>
        </p>
    </div>
</div>

<!-- Modal global -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" alt="" class="img-fluid rounded" style="width: 100%; max-height: 80vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>
@endsection
