@extends('main.master_layout')
@section('konten')
    <section id="promo" class="container-fluid">
        <div class="container pt-3">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @for ($x = 1; $x <= 12; $x++)
                    <div class="testimonial-item align-items-center text-center">
                        <div class="position-relative">
                            <img style="max-height: 600px; max-width:400px" class="img-fluid mx-auto mb-5"
                                src="{{ asset('img/promo/fresh/' . $x . '.jpg') }}">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="donwload" class="container-fluid">
        <div class="container">
            <div class="row text-center">
                <div class="col-offset-6">
                    <a href="{{ url('/pdf/mailerPramaFresh.pdf') }}" class="btn btn-danger text-center"
                        style="border-radius: 5px"><i class="fa fa-download"></i>
                        Download Katalog
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
