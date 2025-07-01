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

<div class="container my-5">
    <!-- Judul -->
    <h2 class="text-center mb-5">✨ ICE CREAM FAIR - KREASI HIAS ES KRIM ✨</h2>

    <!-- Baris Gambar -->
    <div class="row gx-3 justify-content-center mb-4">
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/icecream/1.jpg') }}" 
                class="img-fluid rounded shadow" 
                style="max-height: 380px; cursor:pointer;" 
                alt="Event Tikma Soreang"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/icecream/2.jpg') }}" 
                class="img-fluid rounded shadow" 
                style="max-height: 380px; cursor:pointer;" 
                alt="Event Prama Babakan Sari"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Teks -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Hias es krim sesukamu dan dapatkan pula tiket masuk ke <strong>Playland</strong> atau <strong>Koin Carnival</strong> 🤩😍<br>
            Dan menangkan voucher belanja <strong>Rp 200.000</strong> untuk peserta favorit! 🥰
        </p>
        <p>
            📆 <strong>Sabtu, 28 Juni 2025</strong><br>
            📍 <strong>Tikma Soreang</strong> & <strong>Prama Babakan Sari</strong>
        </p>
        <p>
            🔗 Link pendaftaran: <a href="https://s.id/KreasiHiasEskrim" target="_blank">s.id/KreasiHiasEskrim</a><br>
            📞 Info lebih lanjut: 0822-1401-8470
        </p>
    </div>
</div>
{{-- tampilan gambar --}}
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <img id="modalImage" src="" alt="" class="img-fluid rounded" style="width: 100%; max-height: 80vh; object-fit: contain;">
      </div>
    </div>
  </div>
</div>
@endsection
