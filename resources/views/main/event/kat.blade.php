@extends('main.master_layout')
@section('konten')
    <link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn bg-primary" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Info Pemenang KAT 2024</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Event</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            {{-- <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Member Aktif</h4>
                                    <span>Daftar gratis sampai akhir tahun 2024 <a href="https://wa.me/6287814523770/?text="
                                            target="_blank">&nbsp; 👉 Link Daftar Member Gratis</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Belanja 75.000</h4>
                                    <span>Min pembelanjaan 75.000 (berlaku kelipatan) akan mendapatkan 1 kupon
                                        digital</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Periode</h4>
                                    <span>Periode program 01 oktober - 31 desember 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Cek Kupon</h4>
                                    <span>Melalui Chatbot di nomor layanan prama borma : 0878-1452-3770</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4 mt-2">
                                    <h4>Pengundian di tanggal <span class="text-danger">18 Januari 2025</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4 mt-2">
                                    <h4>Pengumuman pemenang di tanggal <span class="text-danger">25 Januari 2025</span></h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div> --}}
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/event/kat1.jpg') }}" alt="Kejutan Akhir Tahun"
                    style="border-radius: 15px"
                    onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/event/kat2.jpg') }}" alt="Kejutan Akhir Tahun"
                    style="border-radius: 15px"
                    onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
            <div class="col-md wow fadeInUp">
                <img class="img-fluid" src="{{ asset('img/event/kat3.jpg') }}" alt="Kejutan Akhir Tahun"
                    style="border-radius: 15px"
                    onclick="openImageModal.show({
                    img: this,
                    animate: true
                })">
            </div>
        </div>

        <script src="{{ asset('dist/open-image-modal.js') }}"></script>
    </section>
@endsection
