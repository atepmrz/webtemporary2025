@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <h1 class="display-3 text-white animated slideInRight">CSR</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="csr" class="container-fluid">
        <div class="row p-4 g-4">
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/1.jpg') }}" alt="CSR 1"
                        style="border-radius: 15px">
                </div>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/2.jpg') }}" alt="CSR 2"
                        style="border-radius: 15px">
                </div>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/3.jpg') }}" alt="CSR 3"
                        style="border-radius: 15px">
                </div>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/4.jpg') }}" alt="CSR 4"
                        style="border-radius: 15px">
                </div>
            </div>
        </div>

        <div class="row p-4 g-4">
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/5.jpg') }}" alt="CSR 1"
                        style="border-radius: 15px">
                </div>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/6.jpg') }}" alt="CSR 2"
                        style="border-radius: 15px">
                </div>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/7.jpg') }}" alt="CSR 3"
                        style="border-radius: 15px">
                </div>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp">
                    <img class="img-fluid" src="{{ asset('img/tentangkami/csr/8.jpg') }}" alt="CSR 4"
                        style="border-radius: 15px">
                </div>
            </div>
        </div>

    </section>
@endsection
