@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-warning" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Voucher</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">Voucher</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Ketentuan Penggunaan Voucher</h1>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Nilai voucher sesuai</h4>
                                    <span>Nilai Voucher nominal yang tertera sesuai dengan nilai jumlah mata uang yang hanya
                                        dapat di belanjakan di Prama Borma ( Borma Cijerah, Cikutra, Gempol, Kerkof, Buah
                                        Batu, Prama Babakan Sari, Banjaran, Ciparay, Prama Fresh Mekar Wangi, Burangrang,
                                        Perintis, Garuda)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Voucher masih aktif</h4>
                                    <span>Voucher dapat digunakan selama masa berlaku aktif, sesuai dengan yang tertera pada
                                        informasi Voucher</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Voucher tidak dapat di uangkan </h4>
                                    <span>Voucher tidak dapat di uangkan dan hanya berfungsi sebagai pengganti alat bayar
                                        tunai</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Selisih nilai voucher</h4>
                                    <span>Jika nilai belanja lebih besar dari nilai Voucher maka kekurangannya dapat dibayar
                                        dengan Cash/Tunai atau kartu Prabayar/Debit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Surplus nilai voucher</h4>
                                    <span>Jika nilai belanja lebih kecil dari nilai Voucher maka nilai sisa Voucher akan
                                        hangus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Syarat dan Ketentuan</h4>
                                    <span>Syarat dan ketentuan penggunaan Voucher Prama Borma dapat berubah sewaktu-waktu
                                        sesuai kebijakan perusahaan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/layanan/voucher.jpg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
