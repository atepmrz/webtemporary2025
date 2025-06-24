@extends('main.master_layout')
@section('konten')
<style>
    .rounded-soft-img {
        border-radius: 20px;
        display: block;
        width: 100%;
        height: auto;
        margin: 0 auto;
    }

    @media (min-width: 992px) {
        .rounded-soft-img {
            width: 100%;
            height: auto;
        }
    }
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header py-0 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row">
            <!-- Judul Teks -->
            <div class="col-12 text-center mb-4">
                <h1 class="display-3 text-white animated slideInRight">Layanan Antar</h1>
            </div>

            <!-- Gambar -->
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <img class="rounded-soft-img wow fadeInUp" src="{{ asset('img/header/layar-header.jpg') }}"
                    alt="header layar">
            </div>
        </div>
    </div>

</div>
<!-- Page Header End -->
@include('main.partial.partLayar')
@endsection
