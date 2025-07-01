@extends('main.master_layout')
@section('konten')
<link href="{{ asset('dist/open-image-modal.css') }}" rel="stylesheet" />
<style>
    .border-borma {
        border-radius: 10px;
    }

    #members #kotak:hover {
        background-color: rgb(0, 223, 223);
    }

    .video-container {
        max-width: 100%;
        /* Set a pixel value instead if no parent container*/
        margin: 0 auto;
        /* Center the container */
    }

    .video-container video {
        width: 100%;
        /* Fill the available width */
        height: auto;
        /* Adjust height automatically */
    }
</style>
<!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ url('/pbb') }}"><img src="{{ asset('img/banner/banner1.jpg') }}" class="d-block w-100"
                        alt="Image Slide"></a>
            </div>
            @for ($x = 2; $x <= 2; $x++) <div class="carousel-item">
                <img src="{{ asset('img/banner/banner' . $x . '.jpg') }}" class="d-block w-100" alt="Image Slide">
        </div>
        @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- Carousel End -->

<!-- Page Header Start -->
{{-- <div class="container-fluid pt-1 my-3 px-0">
    <div class="text-center mx-auto mt-2 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px">
        <h1 class="display-5 mb-4">Pemenang Prama Borma Berhadiah 2024</h1>
    </div>
</div> --}}
<!-- Page Header End -->

{{-- <section id="pbb" class="container-fluid">
    <div class="row p-4 g-4">
        <div class="col-md">
            <div class="wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid" src="{{ asset('img/event/pbb1.jpg') }}" alt="pbb" style="border-radius: 15px">
            </div>
        </div>
        <div class="col-md wow">
            <div class="wow fadeInUp" data-wow-delay="0.8s">
                <img class="img-fluid" src="{{ asset('img/event/pbb2.jpg') }}" alt="pbb" style="border-radius: 15px">
            </div>
        </div>
    </div>
</section> --}}

<!-- About Start -->
<div class="container-fluid py-4">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6 col-md-4 col-sm-2">
                <div class="row gx-3 h-500">
                    <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                        <img href="{{ url('/') }}" class="img-fluid border-3 border-primary"
                            style="border-radius: 10px;" src="img/about-1.jpg" onclick="openImageModal.show({
                                img: this,
                                animate: true
                            })" />
                        {{-- <video width="100%" controls>
                            <source src="{{ asset('video/batik.mp4') }}" type="video/mp4">
                        </video> --}}
                    </div>
                    <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                        <img href="{{ url('/') }}" class="img-fluid border-3 border-primary" style="border-radius: 10px"
                            src="img/about-2.jpg" onclick="openImageModal.show({
                                img: this,
                                animate: true
                            })" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="fw-medium text-uppercase text-primary mb-2">Layanan</p>
                <h1 class="display-5 mb-4">Fasilitas Kami</h1>

                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 bg-primary p-3">
                        <h1 class="display-2">30</h1>
                        <h5 class="text-white">Years of</h5>
                        <h5 class="text-white">Experience</h5>
                    </div>
                    <div class="ms-2">
                        <p><i class="fa fa-check text-primary me-2"></i>Supermarket</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Fashion</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Foodcourt</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Area Bermain</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>LAYAR - Layanan Antar</p>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-sm-6 mt-1">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Email</p>
                                <h6 class="mb-0">info@pramatoserba.co.id</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Hubungi kami</p>
                                <h6 class="mb-0">+62 878 1452 3770</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('main.partial.partPromosi')
{{-- @include('main.partial.partBestDeal') --}}
@include('main.partial.partPromoSeasonal')

<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative me-lg-4">
                    <img class="img-fluid w-100 border-borma" src="img/feature.jpg" alt="" />
                    <span
                        class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                        style="width: 120px; height: 120px"></span>
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#"
                        data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                <h1 class="display-5 mb-4">Kenapa Harus Prama Toserba ?</h1>
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Free Ongkir</h4>
                                <span>2,5Km minimum belanja Rp.50.000 selanjutnya Rp.10.000/3Km</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Harga yang Kompetitif</h4>
                                <span>Menawarkan harga yang bersaing dan berbagai promosi atau diskon</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Kualitas Produk yang Terjamin</h4>
                                <span>Telah melewati proses pengecekan kualitas yang ketat</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Sameday Delivery</h4>
                                <span>Pool Layar estimasi 30 menit sampai ke customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Shopping List</h4>
                                <span>Belanja praktis untuk segala kebutuhan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>24/7 Customer Support</h4>
                                <span>Customer Service fast response</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- members Start -->
<section id="members">
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div id="kotak" class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">30</h5>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div id="kotak" class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">169000</h5>
                    <span class="fs-5 fw-semi-bold text-white">Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div id="kotak" class="text-center border p-5">
                    <i class="fa fa-store fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">1957</h5>
                    <span class="fs-5 fw-semi-bold text-white">Mitra Usaha</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div id="kotak" class="text-center border p-5">
                    <i class="fa fa-map-marker-alt fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">13</h5>
                    <span class="fs-5 fw-semi-bold text-white">Lokasi</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facts End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-danger">
                <h2 class="modal-title text-white" id="exampleModalLabel"><i class="bi bi-youtube"></i> Prama Borma
                    CJTV
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    {{-- <iframe width="560" height="315" src="{{ asset('video/opening.mp4') }}"
                        title="YouTube video player" frameborder="0" type="video/mp4"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe> --}}
                    <video controls>
                        <source src="{{ asset('video/opening.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

@include('main.partial.partLayar')
@include('main.partial.partLokasi')

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <button type="button" class="btn-close fa-pull-right bg-warning" data-bs-dismiss="modal"
        aria-label="Close"></button>
    <div class="modal-dialog modal-md" style="border-radius: 15px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/iklan/utama.jpeg') }}" alt="Iklan" class="img-fluid rounded" />
                </a>

                {{-- <video class="img-fluid rounded" width="100%" height="500px" controls>
                    <source src="{{ asset('video/natal.mp4') }}" type="video/mp4">
                </video> --}}

            </div>
            {{-- <a href="{{ url('/pdf/mailerPramaSeasonal.pdf') }}" class="btn btn-danger text-center"
                style="border-radius: 0px"><i class="fa fa-download"></i>
                Download Katalog Edisi Ramadhan
            </a> --}}
        </div>
    </div>
</div>
{{-- end modal --}}

<script type="text/javascript">
    $(window).on("load", function() {
            $("#myModal").modal("show");
        });
</script>
<script src="{{ asset('dist/open-image-modal.js') }}"></script>
@endsection