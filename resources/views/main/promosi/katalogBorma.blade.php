@extends('main.master_layout')
@section('konten')
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        @for ($x = 1; $x <= 10; $x++)
            <div class="testimonial-item text-center">
                <div class="position-relative">
                    <img style="max-height: 600px; max-width:400px" class="img-fluid mx-auto mb-5"
                        src="{{ asset('img/promo/borma/juli/' . $x . '.jpg') }}">
                </div>
            </div>
        @endfor
    </div>
    <section id="donwload">
        <div class="container">
            <div class="row text-center">
                <div class="col-offset-6">
                    <a href="{{ url('/pdf/juli/mailerPrama.pdf') }}" class="btn btn-danger text-center"
                        style="border-radius: 5px"><i class="fa fa-download"></i>
                        Download Katalog
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
