@extends('main.master_layout')

@section('konten')
    <div class="container">
        <h1 class="text-center mb-5">🎉 Event & Berita Terbaru dari Prama Borma</h1>
        <div class="row">
            
            <!-- News: Donor-Darah -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('news.donor') }}">
                        <img src="{{ asset('img/event&news/donor/1.jpg') }}" class="card-img-top" alt="Donor Darah">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">News</span>
                        <h5 class="card-title"><a href="{{ route('news.donor') }}">🩸 Aksi Nyata Donor Darah</a></h5>
                        <p class="card-text">Setetes darahmu bisa selamatkan nyawa! Yuk gabung jadi pahlawan kemanusiaan.</p>
                        <p class="text-muted">30/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Mewarnai -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('event.mewarnai') }}">
                        <img src="{{ asset('img/event&news/bck1.jpg') }}" class="card-img-top" alt="Lomba Mewarnai">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.mewarnai') }}">🎨 Lomba Mewarnai</a></h5>
                        <p class="card-text">Wujudkan imajinasi si kecil dalam lomba mewarnai penuh warna dan hadiah!</p>
                        <p class="text-muted">30/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: PBB -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('event.pbb') }}">
                        <img src="{{ asset('img/event&news/pbb1.jpg') }}" class="card-img-top" alt="Pelatihan PBB">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.pbb') }}">🎁 PBB - Prama Borma Berhadiah</a></h5>
                        <p class="card-text">Belanja berhadiah Umroh? Cuma di Prama Borma! Yuk ikutan 😍🎉</p>
                        <p class="text-muted">30/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Resep -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('event.resep') }}">
                        <img src="{{ asset('img/event&news/resep/churros.jpg') }}" class="card-img-top" alt="Kegiatan Resep">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.resep') }}">👨‍🍳 RECIPE 👩‍🍳</a></h5>
                        <p class="card-text">Temukan resep simple & lezat! Yuk, mulai petualangan memasak dengan kreasi menarik yang sehat dan enak.</p>
                        <p class="text-muted">25/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Ice Cream -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('event.icecream') }}">
                        <img src="{{ asset('img/event&news/icecream/3.jpg') }}" class="card-img-top" alt="Ice Cream Time!">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.icecream') }}">🍨 Ice Cream</a></h5>
                        <p class="card-text">Sensasi manis segar dengan promo Ice Cream Fair – jangan sampai ketinggalan!</p>
                        <p class="text-muted">25/06/2025</p>
                    </div>
                </div>
            </div>

            <!-- Event: Sasha -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('event.sasha') }}">
                        <img src="{{ asset('img/event&news/sasha/1.jpg') }}" class="card-img-top" alt="Konser Sasha">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Event</span>
                        <h5 class="card-title"><a href="{{ route('event.sasha') }}">🧴 Sasha Hair Color</a></h5>
                        <p class="card-text">Ubah gayamu! Warnai rambut gratis cukup belanja produk Sasha min. Rp 50.000 🎨</p>
                        <p class="text-muted">25-06-2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- <!-- Event: Saporo -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('event.saporo') }}">
                        <img src="{{ asset('img/event/saporo/1.jpg') }}" class="card-img-top" alt="Festival Saporo">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('event.saporo') }}">⛫💨Saporo Spray Paint</a></h5>
                        <p class="card-text">Event sapporo spray paint.</p>
                        <p class="text-muted">25-06-2025</p>
                    </div>
                </div>
            </div> --}}
