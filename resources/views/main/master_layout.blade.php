<!DOCTYPE html>
<html lang="en">

@include('main.header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
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
                        <a href="{{ url('katPramaBorma') }}" class="dropdown-item">Katalog Prama Borma</a>
                        <a href="{{ url('katPramaFresh') }}" class="dropdown-item">Katalog Prama Fresh</a>
                        <a href="{{ url('/proGajian') }}" class="dropdown-item">Promo Gajian 25/5</a>
                        <a href="{{ url('/proPintar') }}" class="dropdown-item">Promo Pinter</a>
                        <a href="{{ url('/proJsm') }}" class="dropdown-item">Promo JSM</a>
                        <a href="{{ url('/proSelaras') }}" class="dropdown-item">Selaras</a>
                        <a href="{{ url('/proGiveMeFive') }}" class="dropdown-item">Give Me Five</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Event</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/pbb') }}" class="dropdown-item">Prama Borma Berhadiah</a>
                        <a href="javascript:void(0)" class="dropdown-item">Kejutan Akhir Tahun</a>
                        <a href="javascript:void(0)" class="dropdown-item">Reguler</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/layar') }}" class="dropdown-item">Layanan Antar
                            (LAYAR)</a>
                        <a href="{{ url('/customerCare') }}" class="dropdown-item">Customer Care</a>
                        <a href="{{ url('/voucher') }}" class="dropdown-item">Voucher</a>
                        <a href="{{ url('/lokasi') }}" class="dropdown-item">Lokasi</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/visimisi') }}" class="dropdown-item">Prama Borma Group</a>
                        <a href="javascript:void(0)" class="dropdown-item">CSR</a>
                        <a href="javascript:void(0)" class="dropdown-item">Karir</a>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/6287814523770/?text=" target="_blank"
                class="btn btn-primary px-3 d-none d-lg-block d-md-block" style="border-radius: 8px;">Member</a>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('konten')

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
                    <p class="mb-1">Grab Mart</p>
                    <h6 class="text-light">08:00 am - 20:30 pm</h6>
                    <a href="https://linktr.ee/pramabormagroup" target="_blank"><img
                            src="{{ asset('img/grabmart.png') }}" alt="Grab Mart" style="max-width: 100px">
                    </a>
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

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; 2024 <a class="fw-semi-bold" href="https://www.pramatoserba.co.id/"
                    target="_blank">Prama Borma Toserba Group</a>, All Rights Reserved.</p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Developed with <i class="bi bi-heart-fill text-danger"></i> By <a class="fw-semi-bold"
                    href="https://www.pramasolution.com/" target="_blank">pramasoftdev</a></p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    @include('main.footer')
</body>

</html>
