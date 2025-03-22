@extends('main.master_layout')
@section('konten')
<link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-3">
        <h1 class="display-3 text-white animated slideInRight">Promosi Kue & Sirup</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Promosi</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<section id="karir" class="container-fluid">
    <div class="row p-4 g-4">
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/19.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfFqjQ-wKtv2oCSE3dHcMfZWz9dM4R68bg1xA6eyA0annFogA/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/18.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfFqjQ-wKtv2oCSE3dHcMfZWz9dM4R68bg1xA6eyA0annFogA/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/17.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfFqjQ-wKtv2oCSE3dHcMfZWz9dM4R68bg1xA6eyA0annFogA/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.2s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
    </div>
    {{-- ============================================================= --}}
    <div class="row p-4 g-4">
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/16.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc63dhABH9SWE5Wtlyuq7441y1UUksJzUjeIpCKqcw9uUmMpg/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/15.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc63dhABH9SWE5Wtlyuq7441y1UUksJzUjeIpCKqcw9uUmMpg/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/14.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc63dhABH9SWE5Wtlyuq7441y1UUksJzUjeIpCKqcw9uUmMpg/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.2s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
    </div>
    {{-- ============================================================= --}}
    <script src="{{ asset('dist/open-image-modal.js') }}"></script>
</section>
@endsection
