@extends('main.master_layout')
@section('konten')
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-3">
        <h1 class="display-3 text-white animated slideInRight">CSR</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-white">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/csr') }}" class="text-white">Tentang Kami</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<section id="csr" class="container-fluid">
    <div class="row p-4 g-4">
        @for ($i = 1; $i <= 4; $i++) <div class="col-md wow fadeInUp">
            <img class="img-fluid" src="{{ asset('img/tentangkami/csr/' . $i . '.jpg') }}" alt="CSR {{ $i }}"
                style="border-radius: 15px; cursor: pointer;" onclick="openModal(this.src, this.alt)">
    </div>
    @endfor
    </div>

    <div class="row p-4 g-4">
        @for ($i = 5; $i <= 8; $i++) <div class="col-md wow fadeInUp">
            <img class="img-fluid" src="{{ asset('img/tentangkami/csr/' . $i . '.jpg') }}" alt="CSR {{ $i }}"
                style="border-radius: 15px; cursor: pointer;" onclick="openModal(this.src, this.alt)">
    </div>
    @endfor
    </div>
</section>

<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" alt="" class="img-fluid rounded"
                    style="width: 100%; max-height: 500px; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(imgSrc, imgAlt) {
            const modalImg = document.getElementById('modalImage');
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modalImg.src = imgSrc;
            modalImg.alt = imgAlt;
            modal.show();
        }
</script>
@endsection