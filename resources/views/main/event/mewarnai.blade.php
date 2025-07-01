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
    <h2 class="text-center mb-5">✨ BACK TO SCHOOL - LOMBA MEWARNAI ✨</h2>

    <!-- Gambar 6 Juli -->
    <div class="row gx-3 justify-content-center mb-4">
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/6juli-1.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 380px; cursor:pointer;" 
                alt="13 Juli 1"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/6juli-2.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 380px; cursor:pointer;" 
                alt="13 Juli 2"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

     <!-- Teks 1 -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Daftarkan buah hati Anda sekarang juga untuk mengikuti lomba mewarnai dalam rangka acara <strong>BACK TO SCHOOL</strong> bersama <strong>@chiki_indonesia</strong> yang akan diadakan pada :
        </p>
        <p>
            📆 <strong>Minggu, 6 Juli 2025</strong><br>
            ⏰ <strong>09.00 WIB - Selesai</strong><br>
            📍 <strong>Borma Gempol (Jl. Gempol Sari No. 9 Cimahi)</strong>
        </p>
        <p>
            Kategori : TK & SD 1-3<br>
            Link pendaftaran : <a href="https://s.id/LombaMewarnaiLTT" target="_blank">s.id/LombaMewarnaiLTT</a><br>
            Info lebih lanjut : 0822-1401-8470 / 0821-2376-7002
        </p>
    </div>


    <!-- Gambar 13 Juli -->
    <div class="row gx-3 justify-content-center mb-4">
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/13juli-1.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 380px; cursor:pointer;" 
                alt="13 Juli 1"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/13juli-2.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 380px; cursor:pointer;" 
                alt="13 Juli 2"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Teks 2 -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Daftarkan buah hati Anda sekarang juga untuk mengikuti lomba mewarnai dalam rangka acara <strong>BACK TO SCHOOL</strong> bersama <strong>@kenko_id</strong> yang akan diadakan pada :
        </p>
        <p>
            📆 <strong>Minggu, 13 Juli 2025</strong><br>
            ⏰ <strong>08.00 WIB - Selesai</strong><br>
            📍 <strong>Borma Cikutra (Jl. Cikutra Barat No. 66)</strong>
        </p>
        <p>
            Kategori : TK<br>
            Link pendaftaran : <a href="https://s.id/LombaMewarnaiLTT" target="_blank">s.id/LombaMewarnaiLTT</a><br>
            Info lebih lanjut : 0822-1401-8470 / 0821-2376-7002
        </p>
    </div>

    <!--  Gambar 20 Juli -->
    <div class="row gx-3 justify-content-center mb-4">
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/20juli-1.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 380px; cursor:pointer;" 
                alt="20 Juli 1"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/20juli-2.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 380px; cursor:pointer;" 
                alt="20 Juli 2"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Teks 3 -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Daftarkan buah hati Anda sekarang juga untuk mengikuti lomba mewarnai dalam rangka acara <strong>BACK TO SCHOOL</strong> bersama <strong>@indomilk.kids</strong> yang akan diadakan pada :
        </p>
        <p>
            📆 <strong>Minggu, 20 Juli 2025</strong><br>
            ⏰ <strong>09.00 WIB - Selesai</strong><br>
            📍 <strong>Borma Kerkof (Jl. Kerkof No.35, Leuwigajah)</strong>
        </p>
        <p>
            Kategori : TK & SD (Kelas 1-3)<br>
            Link pendaftaran : <a href="https://s.id/LombaMewarnaiLTT" target="_blank">s.id/LombaMewarnaiLTT</a><br>
            Info lebih lanjut : 0822-1401-8470 / 0821-2376-7004
        </p>
    </div>
    <h2 class="text-center mb-5">✨ BACK TO SCHOOL - SIDU ✨</h2>
    <!-- Gambar 30 Juni  -->
    <div class="row gx-3 justify-content-center mb-4">
        <div class="col-md-6 mb-3 d-flex justify-content-center">
            <img 
                src="{{ asset('img/event&news/mewarnai/30juni-1.jpg') }}" 
                class="img-fluid rounded shadow" style="max-height: 480px; cursor:pointer;" 
                alt="30 Juni 1"
                onclick="openModal(this.src, this.alt)"
            >
        </div>
    </div>

    <!-- Teks 3 -->
    <div class="mb-5 px-3">
        <p class="fs-5">
            Dapatkan harga spesial mulai dari Rp 19.900 untuk buku tulis <strong>@sidu.id</strong> 🤩 Jangan lupa ada lucky dipnya juga nih dengan min pembelian buku SIDU 3 pack
        </p>
        <p>
            Program ini berlaku di semua cabang Prama Borma Group di bawah ini :<br>
            📍 Prama Toserba Banjaran, Babakan Sari, Ciparay<br>
            📍 Borma Buah Batu, Cikutra, Cijerah, Kerkof, Gempol<br>
            📍 Prama Fresh Mekarwangi, Burangrang, Garuda, Perintis (Sarijadi)<br>
            📍 Tikma Soreang
        </p>
        <p>
            Buat yang beruntung bisa dapetin sepeda dan bisa langsung dibawa pulang 😉
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
