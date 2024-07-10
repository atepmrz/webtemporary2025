@extends('main.master_layout')
@section('konten')
    <style>
        .border-borma {
            border-radius: 10px;
        }

        #members #kotak:hover {
            background-color: rgb(0, 223, 223);
        }
    </style>
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/slideshow/pbb.jpg') }}" class="d-block w-100" alt="Image Slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/slideshow/kbkb.jpg') }}" class="d-block w-100" alt="Image Slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/slideshow/mewarnai.jpg') }}" class="d-block w-100" alt="Image Slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/slideshow/icecream.jpg') }}" class="d-block w-100" alt="Image Slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/slideshow/layar.jpg') }}" class="d-block w-100" alt="Image Slide">
                </div>
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
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid border border-3 border-primary" style="border-radius: 25px"
                                src="img/about-1.jpg" />
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid border border-3 border-primary" style="border-radius: 25px"
                                src="img/about-2.jpg" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Layanan</p>
                    <h1 class="display-5 mb-4">Fasilitas Kami</h1>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">30</h1>
                            <h5 class="text-white">Years of</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Supermarket</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Fashion</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Foodcourt</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Area Bermain</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>LAYAR - Layanan Antar</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
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
                        <div class="col-sm-6">
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

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100 border-borma" src="img/feature.jpg" alt="" />
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.instagram.com/reel/C0lfA-aLdXT/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
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
                        <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                        <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">130000</h5>
                        <span class="fs-5 fw-semi-bold text-white">Members</span>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div id="kotak" class="text-center border p-5">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">99570</h5>
                        <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div id="kotak" class="text-center border p-5">
                        <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                        <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">12</h5>
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
                <div class="modal-header bg-primary">
                    <h2 class="modal-title" id="exampleModalLabel">Prama Youtube</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/0qLLXQDizDs?si=zS3Cz26XaZ-iMm7-"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
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
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close fa-pull-right" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <img src="{{ asset('img/iklan/membercard.jpg') }}" alt="Iklan" class="img-fluid rounded" />
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    <script type="text/javascript">
        $(window).on("load", function() {
            $("#myModal").modal("show");
        });
    </script>
@endsection
