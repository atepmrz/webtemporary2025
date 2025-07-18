@php
    $produk = request()->get('produk');
    $produkNama = $produk ? ucwords(str_replace('-', ' ', pathinfo($produk, PATHINFO_FILENAME))) : '';
    $pesanWA = $produkNama ? rawurlencode("Halo, saya ingin bertanya apakah stok *$produkNama* masih ada?") : '';

     $cabang = [
        ['nama' => 'Borma Gempol', 'wa' => '6282124639585', 'gambar' => 'bgp.jpg'],
        ['nama' => 'Borma Buah Batu', 'wa' => '6282123767001', 'gambar' => 'bbb.jpg'],
        ['nama' => 'Borma Cijerah', 'wa' => '6282127416745', 'gambar' => 'bcj.jpg'],
        ['nama' => 'Borma Cikutra', 'wa' => '6282123767002', 'gambar' => 'bck.jpg'],
        ['nama' => 'Borma Kerkof', 'wa' => '6282123767004', 'gambar' => 'bkk.jpg'],
        ['nama' => 'Prama Banjaran', 'wa' => '6282123766990', 'gambar' => 'pbj.jpg'],
        ['nama' => 'Prama Babakan Sari', 'wa' => '6282123766991', 'gambar' => 'pbs.jpg'],
        ['nama' => 'Prama Ciparay', 'wa' => '6281313088967', 'gambar' => 'pcp.jpg'],
        ['nama' => 'Prama Fresh Burangrang', 'wa' => '6281223725553', 'gambar' => 'fbr.jpg'],
        ['nama' => 'Prama Fresh Garuda', 'wa' => '6281322386181', 'gambar' => 'fgd.jpg'],
        ['nama' => 'Prama Fresh Mekarwangi', 'wa' => '6282164663838', 'gambar' => 'fmw.jpg'],
        ['nama' => 'Prama Fresh Perintis', 'wa' => '6282117433790', 'gambar' => 'fps.jpg'],
        ['nama' => 'Tikma Soreang', 'wa' => null, 'gambar' => 'tikma.jpg'],
    ];
@endphp
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .team-item {
        will-change: transform, opacity;
    }

    .location-image {
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .location-image {
        height: 300px;
    }

    @media (max-width: 767px) {
        .location-image {
            aspect-ratio: 1/1;
            height: auto;
        }

        .btn-square {
            width: 45px !important;
            height: 45px !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .d-flex {
            align-items: stretch;
        }


        .btn-square i {
            font-size: 1rem !important;
        }

        .team-info-container {
            flex-grow: 1;
            height: 45px !important;
            padding: 5px;
            font-size: 0.7rem !important;
        }

        .team-info-container h5 {
            font-size: 0.65rem !important;
            margin-bottom: 0 !important;
            line-height: 1.2 !important;
        }

        .team-info-container .team-social h3,
        .team-info-container .team-social h4 {
            font-size: 0.6rem !important;
            margin: 0 !important;
        }
    }
</style>
<section id="layar" class="container-fluid">
    <br>
    <div class="container-xxl py-3">
        <div class="container text-center" data-wow-delay="0.3s" style="max-width: 600px;">
            <h2 class="display-6 mb-4">Pilih Lokasi Prama Borma Group</h2>
        </div>

        <div class="row g-4">
            @foreach ($cabang as $i => $c)
                @php
                    $delay = number_format(0.1 + $i * 0.1, 1);
                @endphp
                <div class="col-lg-4 col-md-6 col-6 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                    <div class="team-item rounded overflow-hidden shadow-sm">
                        <img class="img-fluid mb-2 location-image" src="{{ asset('img/lokasi/' . $c['gambar']) }}"
                            alt="Lokasi {{ $c['nama'] }}" loading="lazy" />
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 10px 0 0 10px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>

                            <!-- Ubah bagian ini: -->
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4 team-info-container"
                                style="height: 90px; border-radius: 0 10px 10px 0;">
                                @if ($c['wa'])
                                    <a href="#"
                                        onclick="redirectToWhatsApp('{{ $c['wa'] }}', '{{ $pesanWA }}'); return false;"
                                        class="text-decoration-none text-dark">
                                        <h5>{{ $c['nama'] }}</h5>
                                        <div class="team-social">
                                            <h3 class="text-white mb-0">
                                                Layar <i class="fab fa-whatsapp" style="color: green"></i>
                                            </h3>
                                        </div>
                                    </a>
                                @else
                                    <div class="text-dark">
                                        <h5>{{ $c['nama'] }}</h5>
                                        <div class="team-social">
                                            <h4 class="text-white mb-0">New Store 🛒</h4>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script>
    new WOW().init();

    function redirectToWhatsApp(nomor, pesan) {
        const isMobile = /iPhone|Android|BlackBerry|Opera Mini|IEMobile|WPDesktop/i.test(navigator.userAgent);
        const url = isMobile ?
            `https://wa.me/${nomor}?text=${pesan}` :
            `https://web.whatsapp.com/send?phone=${nomor}&text=${pesan}`;

        window.open(url, '_blank');
    }
</script>
