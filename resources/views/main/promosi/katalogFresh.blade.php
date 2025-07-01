@extends('main.master_layout')
@section('konten')
<style>
    .slider {
        margin-bottom: 30px;
        position: relative;
    }

    .slider .owl-item.active.center .slider-card {
        transform: scale(1.15);
        opacity: 1;
        background: linear-gradient(to bottom, #ff5e62, #ff9966);
        color: #fff;
    }

    .slider-card {
        background: #fff;
        padding: 0;
        margin: 50px 15px 90px 15px;
        border-radius: 5px;
        box-shadow: 0 15px 45px -20px rgb(0 0 0 / 73%);
        transform: scale(0.9);
        opacity: 0.5;
        transition: all 0.3s;
    }

    .slider-card img {
        border-radius: 5px 5px 0 0;
    }

    .owl-nav .owl-prev,
    .owl-nav .owl-next {
        position: absolute;
        top: calc(50% - 25px);
        opacity: 1;
        font-size: 30px !important;
        z-index: 1;
    }

    .owl-nav .owl-prev {
        left: -25px;
    }

    .owl-nav .owl-next {
        right: -25px;
    }

    .owl-nav:hover .owl-prev,
    .owl-nav:hover .owl-next {
        opacity: 1;
        pointer-events: auto;
    }

    .owl-nav .owl-prev:hover,
    .owl-nav .owl-next:hover {
        transform: scale(1.2);
    }
</style>
<section id="slider" class="pt-5">
    <div class="container">
        <div class="slider">
            <div class="owl-carousel">
                @foreach ($files as $file )
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="{{ asset($file) }}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
    integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function(){
         $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<section id="donwload" class="container-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-offset-6">
                <a href="{{ url('/pdf/mailerFresh.pdf') }}" class="btn btn-danger text-center"
                    style="border-radius: 5px"><i class="fa fa-download"></i>
                    Download Katalog Prama Fresh
                </a>
            </div>
        </div>
    </div>
</section>
@endsection