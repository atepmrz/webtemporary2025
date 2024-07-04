@extends('main.master_layout')
@section('konten')
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/fancybox/fancybox.min.css') }}">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-7">Katalog Prama Fresh</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @for ($x = 1; $x <= 10; $x++)
                    <div class="testimonial-item text-center">
                        <div class="position-relative">
                            <img style="max-height: 400px; max-width:200px" class="img-fluid mx-auto mb-5"
                                src="{{ asset('img/promo/fresh/juli/' . $x . '.jpg') }}">
                        </div>
                    </div>
                @endfor


            </div>
        </div>

        <section>
            <button class="position-relative top-80 start-50 translate-middle btn btn-danger" style="border-radius: 5px"><i
                    class="fa fa-download"></i>
                Download Katalog</button>
        </section>
    </div>
    <!-- Testimonial End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
