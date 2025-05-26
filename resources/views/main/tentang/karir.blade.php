@extends('main.master_layout')
@section('konten')
<link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
    <div class="container py-3">
        <h1 class="display-3 text-white animated slideInRight">Karir</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
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
            <a href="https://bit.ly/InternshipPramaBorma-2025" target="_blank" class="text-center lead"
                data-wow-delay="0.1s">
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
    <div class="row p-4 g-4">
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/13.jpg') }}" alt="Loker"
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
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/8.jpg') }}" alt="Loker"
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
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/9.jpg') }}" alt="Loker"
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
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/10.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc1NAmHa0AgmFLUGrkGcus0_UcnEgxaB3KY7N0MA3SN4BJihQ/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/11.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc1NAmHa0AgmFLUGrkGcus0_UcnEgxaB3KY7N0MA3SN4BJihQ/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/12.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc1NAmHa0AgmFLUGrkGcus0_UcnEgxaB3KY7N0MA3SN4BJihQ/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.2s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
    </div>
    {{-- ============================================================= --}}
    <div class="row p-4 g-4">
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/1.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfT_YbzoMpbAM4bDyWw43-9Ur2At98KlizbJojQ1gDd3b3E8A/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/2.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfT_YbzoMpbAM4bDyWw43-9Ur2At98KlizbJojQ1gDd3b3E8A/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.1s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/3.jpg') }}" alt="Loker"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfT_YbzoMpbAM4bDyWw43-9Ur2At98KlizbJojQ1gDd3b3E8A/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.2s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
    </div>
    {{-- ============================================================= --}}
    <div class="row p-4 g-4">
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/4.jpg') }}" alt="Loker magang IT"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfT_YbzoMpbAM4bDyWw43-9Ur2At98KlizbJojQ1gDd3b3E8A/viewform"
                target="_blank" class="text-center lead" data-wow-delay="0.3s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.4s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/5.jpg') }}" alt="Loker Frontend"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://bit.ly/RekrutmenIntern-Juli24" target="_blank" class="text-center lead"
                data-wow-delay="0.4s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>

        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="{{ asset('img/tentangkami/karir/6.jpg') }}" alt="Loker Backend"
                    style="border-radius: 15px" onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <br>
            <a href="https://bit.ly/RekrutmenPramaHO-April2024" target="_blank" class="text-center lead"
                data-wow-delay="0.6s">
                <i class="bi bi-journal-text"></i> Kirim CV Lamaran disini
            </a>
        </div>
    </div>


    <script src="{{ asset('dist/open-image-modal.js') }}"></script>
</section>
@endsection
