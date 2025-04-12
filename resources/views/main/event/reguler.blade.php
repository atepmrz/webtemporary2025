@extends('main.master_layout')
@section('konten')
<link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-success" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Demo Masak & Resep Makanan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb animated slideInRight mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Event</a></li>
                    </ol>
                </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="karir" class="container-fluid">
        <div class="row p-4 g-3">
            @for ($x = 1; $x <=4; $x++)
                <div class="col-md">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('img/event/reguler/resep'. $x .'.jpg') }}" alt="Demo Masak & Resep"
                            style="border-radius: 15px" onclick="openImageModal.show({
                                img: this,
                                animate: true
                                })">
                    </div>
                    <br>
                </div>
            @endfor
        </div>
    </section>
    <script src="{{ asset('dist/open-image-modal.js') }}"></script>
@endsection
