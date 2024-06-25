<!DOCTYPE html>
<html lang="en">

@include('main.header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-dark">
                    <span>Connect with us:</span>
                    <a class="btn btn-link text-dark" href="https://www.facebook.com/pramafresh.id/?locale=id_ID"
                        target="_blank"><i class="fab fa-facebook-f" title="Facebook"></i></a>

                    <a class="btn btn-link text-dark" href="https://www.instagram.com/pramaborma_cj/" target="_blank"><i
                            class="fab fa-instagram" title="Prama Borma"></i></a>

                    <a class="btn btn-link text-dark" href="https://www.instagram.com/pramafresh.id/" target="_blank"><i
                            class="fab fa-instagram" title="Prama Fresh"></i></a>

                    <a class="btn btn-link text-dark" href="https://www.youtube.com/@pramabormacjtv6745"
                        target="_blank"><i class="fab fa-youtube" title="Youtube Prama Borma"></i></a>
                    {{-- <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Hubungi kami:</span>
                    <span class="fs-5 fw-bold">+62 878 1452 3770</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="{{ url('/') }}" class="navbar-brand ps-5 me-0">
            <h2 class="text-white m-0">Prama Toserba</h2>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Promosi</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="javascript:void(0)" class="dropdown-item">Katalog Prama Borma</a>
                        <a href="javascript:void(0)" class="dropdown-item">Katalog Prama Fresh</a>
                        <a href="javascript:void(0)" class="dropdown-item">Promo Gajian 25/5</a>
                        <a href="javascript:void(0)" class="dropdown-item">Promo JSM</a>
                        <a href="javascript:void(0)" class="dropdown-item">Promo Pintar</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Event</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="javascript:void(0)" class="dropdown-item">Prama Borma Berhadiah</a>
                        <a href="javascript:void(0)" class="dropdown-item">Kejutan Akhir Tahun</a>
                        <a href="javascript:void(0)" class="dropdown-item">Reguler</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="javascript:void(0)" class="dropdown-item">Layanan Antar
                            (LAYAR)</a>
                        <a href="javascript:void(0)" class="dropdown-item">Customer Care</a>
                        <a href="javascript:void(0)" class="dropdown-item">Voucher</a>
                        <a href="javascript:void(0)" class="dropdown-item">Lokasi</a>
                    </div>
                </div>


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="javascript:void(0)" class="dropdown-item">Prama Borma Group</a>
                        <a href="javascript:void(0)" class="dropdown-item">CSR</a>
                        <a href="javascript:void(0)" class="dropdown-item">Karir</a>
                    </div>
                </div>
                {{-- <a href="javascript:void(0)" class="nav-item nav-link">Karir</a> --}}
                <a href="https://wa.me/6287814523770/?text=" target="_blank"
                    class="nav-item nav-link btn btn-primary px-3" style="border-radius: 10px;color:white">Member</a>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->

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
                            <img class="img-fluid" src="img/about-1.jpg" />
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-2.jpg" />
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

    <!-- Project Start -->
    <div class="container-fluid pt-0 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px">
            <h1 class="display-5 mb-4">Promosi </h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/promoItem/1.jpeg') }}" alt="" />
                <div class="project-title">
                    <h5 class="text-primary mb-0">Add to Cart <i class="bi bi-cart"
                            style="color: rgb(0, 180, 0)"></i>
                    </h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/promoItem/2.jpeg') }}" alt="" />
                <div class="project-title">
                    <h5 class="text-primary mb-0">Add to Cart <i class="bi bi-cart" style="color: green"></i>
                    </h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/promoItem/3.jpeg') }}" alt="" />
                <div class="project-title">
                    <h5 class="text-primary mb-0">Add to Cart <i class="bi bi-cart" style="color: green"></i>
                    </h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/promoItem/4.jpeg') }}" alt="" />
                <div class="project-title">
                    <h5 class="text-primary mb-0">Add to Cart <i class="bi bi-cart" style="color: green"></i>
                    </h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/promoItem/5.jpeg') }}" alt="" />
                <div class="project-title">
                    <h5 class="text-primary mb-0">Add to Cart <i class="bi bi-cart" style="color: green"></i>
                    </h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/promoItem/6.jpeg') }}" alt="" />
                <div class="project-title">
                    <h5 class="text-primary mb-0">Add to Cart <i class="bi bi-cart" style="color: green"></i>
                    </h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Project End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/feature.jpg" alt="" />
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

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">30</h5>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">130000</h5>
                    <span class="fs-5 fw-semi-bold text-white">Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">99570</h5>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h5 class="display-2 text-primary mb-0" data-toggle="counter-up">13</h5>
                    <span class="fs-5 fw-semi-bold text-white">Lokasi</span>
                </div>
            </div>
        </div>
    </div>
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


    <!-- Lokasi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <!-- <p class="fw-medium text-uppercase text-primary mb-2">Lokasi</p> -->
                <h2 class="display-6 mb-5">Lokasi Prama Borma Group</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('img/lokasi/bgp.jpg') }}" alt="" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px">
                                <h5>Borma Gempol</h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                    <a href="https://wa.me/6282124639585/?text=" target="_blank">
                                        <p class="text-white display-6 mb-0">Layar <i
                                                class="fab fa-whatsapp display-6" style="color: green"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('img/lokasi/pbs.jpg') }}" alt="" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px">
                                <h5>Prama Babakan Sari</h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                    <a href="https://wa.me/6282123766991/?text=" target="_blank">
                                        <p class="text-white display-6 mb-0">Layar <i
                                                class="fab fa-whatsapp display-6" style="color: green"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('img/lokasi/pbj.jpg') }}" alt="" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px">
                                <h5>Prama Banjaran</h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                    <a href="https://wa.me/6282123766990/?text=" target="_blank">
                                        <p class="text-white display-6 mb-0">Layar <i
                                                class="fab fa-whatsapp display-6" style="color: green"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('img/lokasi/fmw.jpg') }}" alt="" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px">
                                <h5>Prama Fresh Mekarwangi</h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                    <a href="https://wa.me/6282164663838/?text=" target="_blank">
                                        <p class="text-white display-6 mb-0">Layar <i
                                                class="fab fa-whatsapp display-6" style="color: green"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('img/lokasi/fps.jpg') }}" alt="" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px">
                                <h5>Prama Fresh Perintis</h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                    <a href="https://wa.me/6282117433790/?text=" target="_blank">
                                        <p class="text-white display-6 mb-0">Layar <i
                                                class="fab fa-whatsapp display-6" style="color: green"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('img/lokasi/fbr.jpg') }}" alt="" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px">
                                <h5>Prama Fresh Burangrang</h5>
                                <span class="text-primary"></span>
                                <div class="team-social">
                                    <a href="https://wa.me/6281223725553/?text=" target="_blank">
                                        <p class="text-white display-6 mb-0">Layar <i
                                                class="fab fa-whatsapp display-6" style="color: green"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lokasi End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6975145640945!2d107.54925967500758!3d-6.926714217799714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e55dc4aea0ed%3A0xfe9f522010bed7aa!2sBORMA%20Toserba%20Gempol%20Sari!5e0!3m2!1sid!2sid!4v1719283344491!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Contact Us</p>
                    <h1 class="display-6 mb-4">Jika Anda Memiliki Pertanyaan, Jangan Ragu Untuk Menghubungi Kami</h1>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Call Us</h6>
                                    <span>+62 878 1452 3770</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Mail Us</h6>
                                    <span>info@pramatoserba.co.id</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-1"></i>PT HARJA GUNATAMA LESTARI </p>
                    <p>Komplek
                        Setrasari Mall II, Jl. Terusan Prof. Dr. Ir Sutami A-7, Sukagalih, Kec. Sukajadi, Kota Bandung,
                        Jawa Barat 40163</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(022) 2010612</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@pramatoserba.co.id</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2"
                            href="https://www.facebook.com/pramafresh.id/?locale=id_ID" target="_blank"><i
                                class="fab fa-facebook-f" title="Facebook"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2"
                            href="https://www.instagram.com/pramaborma_cj/" target="_blank"><i
                                class="fab fa-instagram" title="Prama Borma"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2"
                            href="https://www.instagram.com/pramafresh.id/" target="_blank"><i
                                class="fab fa-instagram" title="Prama Fresh"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2"
                            href="https://www.youtube.com/@pramabormacjtv6745" target="_blank"><i
                                class="fab fa-youtube" title="Youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">Tentang kami</a>
                    <a class="btn btn-link" href="">Sejarah</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Store Hours</h5>
                    <p class="mb-1">Senin - Kamis</p>
                    <h6 class="text-light">08:00 am - 21:00 pm</h6>
                    <p class="mb-1">Jumat - Minggu</p>
                    <h6 class="text-light">08:00 am - 22:00 pm</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dapatkan informasi promo, berita, dan program menarik lainnya dari Prama Borma Cijerah Group</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email" />
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Langganan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

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

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; 2024 <a class="fw-semi-bold" href="https://www.pramatoserba.co.id/"
                    target="_blank">Prama Borma Group</a>, All Right Reserved.</p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Developed By <a class="fw-semi-bold" href="https://www.pramasolution.com/"
                    target="_blank">pramasoftdev</a></p>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    @include('main.footer')

    <script type="text/javascript">
        $(window).on("load", function() {
            $("#myModal").modal("show");
        });
    </script>

    <script type="text/javascript">
        $(window).on("load", function() {
            $("#myModal").modal("show");
        });
    </script>
</body>

</html>
