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
    <!-- Judul utama -->
    <h2 class="text-center mb-4">🩸 AKSI NYATA DONOR DARAH 🩸</h2>

    <!-- Gambar utama -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-6 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/donor/1.jpg') }}" 
                alt="Aksi Donor Darah" 
                class="img-fluid rounded shadow" 
                style="max-height: 450px; cursor: pointer;"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Isi konten -->
    <div class="mb-5 px-3">
        <p class="fs-5 fw-bold">Setetes Darah, Selamatkan Jiwa Vol.5</p>
        <p class="fs-5">
            Saatnya jadi <strong>pahlawan kemanusiaan!</strong> Donorkan darahmu dan bantu mereka yang sedang berjuang untuk hidup ❤️
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

<!--  Zoom Gambar -->
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
