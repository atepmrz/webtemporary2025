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
    <h2 class="text-center mb-5">✨ SASHA - HAIR COLORING ✨</h2>

    <div class="row justify-content-center mb-4">
        <div class="col-md-6 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/sasha/1.jpg') }}" 
                alt="Sasha Hair Coloring Event" 
                class="img-fluid rounded shadow" 
                style="max-height: 450px; cursor: pointer;"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Teks event -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Sini kumpul yang suka ganti-ganti warna rambut 🤩😍 Cukup dengan beli produk <strong>@sashahair_id</strong> min Rp 50.000 bisa di warnain gratis loh 🥰
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
