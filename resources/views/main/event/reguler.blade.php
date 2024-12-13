@extends('main.master_layout')
@section('konten')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Reguler</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Event</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="karir" class="container-fluid">
        <div class="row p-4 g-3">
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/event/reguler/event1.jpeg') }}" alt="Event 1"
                        style="border-radius: 15px">
                </div>
                <br>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/event/reguler/event2.jpeg') }}" alt="Event 2"
                        style="border-radius: 15px">
                </div>
                <br>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/event/reguler/event3.jpeg') }}" alt="Event 3"
                        style="border-radius: 15px">
                </div>
                <br>
            </div>
            <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/event/reguler/event4.jpeg') }}" alt="Event 4"
                        style="border-radius: 15px">
                </div>
                <br>
            </div>

        </div>

    </section>
@endsection
