@extends('main.master_layout')
@section('konten')
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        @for ($x = 1; $x <= 8; $x++)
            <div class="testimonial-item text-center">
                <div class="position-relative">
                    <img style="max-height: 600px; max-width:400px" class="img-fluid mx-auto mb-5"
                        src="{{ asset('img/promo/fresh/juli/' . $x . '.jpg') }}">
                </div>
            </div>
        @endfor
    </div>


    <section>
        <button class="position-relative top-80 start-50 translate-middle btn btn-danger" style="border-radius: 5px"><i
                class="fa fa-download"></i>
            Download Katalog</button>
    </section>
@endsection
