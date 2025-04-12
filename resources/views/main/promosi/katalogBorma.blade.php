@extends('main.master_layout')
@section('konten')
<link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
<section id="promo" class="container-fluid">
    <div class="container pt-3">
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @for ($x = 1; $x <= 16; $x++) <div class="testimonial-item align-items-center text-center">
                <div class="position-relative">
                    <img style="max-height: 600px; max-width:400px" class="img-fluid mx-auto mb-5"
                        src="{{ asset('img/promo/borma/' . $x . '.jpg') }}">
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

{{-- <section id="promo">
    <div class="container">
        <!-- Carousel Start -->
        <div class="container-fluid px-5 py-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{ asset('img/promo/borma/juli/1.jpg') }}" class="d-flex w-50 offset-3"
                            alt="Image Slide" style="max-height: 600px; max-width:400px">
                    </div>

                    @for ($x = 1; $x <= 10; $x++) <div class="carousel-item">
                        <img src="{{ asset('img/promo/borma/juli/' . $x . '.jpg') }}" class="d-flex w-50 offset-4"
                            alt="Image Slide" style="max-height: 600px; max-width:400px">
                </div>
                @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>
</section> --}}
<!-- Carousel End -->

<section id="donwload" class="container-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-offset-5">
                <a href="{{ url('/pdf/mailerPramaReguler.pdf') }}" class="btn btn-danger text-center"
                    style="border-radius: 5px"><i class="fa fa-download"></i>
                    Download Katalog Prama Borma
                </a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('dist/open-image-modal.js') }}"></script>
@endsection
