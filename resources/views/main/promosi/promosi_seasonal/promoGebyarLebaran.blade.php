@extends('main.master_layout')
@section('konten')
<link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
<style>
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #04AA6D;
    }

    .button1:hover {
        background-color: white;
        color: #04AA6D;
    }
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-success" data-wow-delay="0.1s">
    <div class="container py-3">
        <h1 class="display-3 text-white animated slideInRight">Promo Gebyar Lebaran</h1>
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
        @for ($x = 1; $x <= 4; $x++)
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/promo/gebyar/'. $x . '.jpg') }}" alt="Late Night Shopping"
                        style="border-radius: 10px" onclick="openImageModal.show({
                        img: this,
                        animate: true
                        })">
                    <a class="project-item pb-4 px-3" href="{{ url('/layar') }}">
                        <button class="btn btn-light rounded-4 mb-0 text-white lead bg-success mt-3 button1">Order Now
                            <i class="bi bi-whatsapp" style="color: rgb(0, 180, 0)"></i>
                        </button>
                    </a>
                </div>
            </div>
        @endfor
        <br>
    </div>
    {{-- ============================================================= --}}
    <div class="row p-4 g-4">
        @for ($x = 5; $x <= 8; $x++)
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/promo/gebyar/'. $x . '.jpg') }}" alt="Late Night Shopping"
                        style="border-radius: 10px" onclick="openImageModal.show({
                        img: this,
                        animate: true
                        })">
                    <a class="project-item pb-4 px-3" href="{{ url('/layar') }}">
                        <button class="btn btn-light rounded-4 mb-0 text-white lead bg-success mt-3 button1">Order Now
                            <i class="bi bi-whatsapp" style="color: rgb(0, 180, 0)"></i>
                        </button>
                    </a>
                </div>
            </div>
        @endfor
        <br>
    </div>
    {{-- ============================================================= --}}
    <div class="row p-4 g-4">
        @for ($x = 9; $x <= 12; $x++)
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/promo/gebyar/'. $x . '.jpg') }}" alt="Late Night Shopping"
                        style="border-radius: 10px" onclick="openImageModal.show({
                        img: this,
                        animate: true
                        })">
                    <a class="project-item pb-4 px-3" href="{{ url('/layar') }}">
                        <button class="btn btn-light rounded-4 mb-0 text-white lead bg-success mt-3 button1">Order Now
                            <i class="bi bi-whatsapp" style="color: rgb(0, 180, 0)"></i>
                        </button>
                    </a>
                </div>
            </div>
        @endfor
        <br>
    </div>
    {{-- ============================================================= --}}
    <script src="{{ asset('dist/open-image-modal.js') }}"></script>
</section>
@endsection
