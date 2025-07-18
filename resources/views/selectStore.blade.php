@extends('main.master_layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/selectStore.css') }}">
@endsection

@section('konten')

    <div class="container-fluid py-5">
        <button class="choose-store-btn" onclick="openStoreModal()">
            <i class="bi bi-shop"></i> Pilih Toko
        </button>

        <div id="paymentSection" class="payment-section">
            <div class="selected-store-info">
                <img id="selectedStoreImage" src="" alt="Toko" class="selected-store-image">
                <div>
                    <h5 id="selectedStoreName" style="margin: 0; font-weight: 600;">Belum memilih toko</h5>
                    <small class="text-muted">Klik "Pilih Toko" di atas jika ingin mengganti</small>
                </div>
            </div>

            <div class="product-info">
                @if(is_array($produkArray) && count($produkArray) > 1)
                    <p><strong>Produk:</strong></p>
                    <ul>
                        @foreach($produkArray as $item)
                            <li>{{ $item['nama'] }} - Rp. {{ number_format($item['harga'], 0, ',', '.') }}/{{ $item['satuan'] ?? 'pcs' }}</li>
                        @endforeach
                    </ul>
                    <p><strong>Total Harga:</strong> Rp. {{ number_format(array_sum(array_column($produkArray, 'harga')), 0, ',', '.') }}</p>
                @else
                    <p><strong>Produk:</strong> {{ $produk }}</p>
                    <p><strong>Harga:</strong> Rp. {{ number_format($harga, 0, ',', '.') }}/{{ $satuan ?? 'pcs' }}</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="voucherCode" class="form-label">Kode Voucher (Opsional)</label>
                <input type="text" class="voucher-input" id="voucherCode" placeholder="Masukkan kode voucher...">
            </div>

            <div class="mb-3">
                <label for="totalPrice" class="form-label">Total Pembayaran</label>
                @if(is_array($produkArray) && count($produkArray) > 1)
                    <input type="text" class="total-input" id="totalPrice"
                        value="Rp. {{ number_format(array_sum(array_column($produkArray, 'harga')), 0, ',', '.') }}" readonly>
                @else
                    <input type="text" class="total-input" id="totalPrice"
                        value="Rp. {{ number_format($harga, 0, ',', '.') }}/{{ $satuan ?? 'pcs' }}" readonly>
                @endif
            </div>

            <button class="wa-button" onclick="sendToWhatsApp()">
                <i class="bi bi-whatsapp"></i> Lanjutkan ke WhatsApp
            </button>
        </div>
    </div>

    <!-- Modal untuk memilih toko -->
    <div id="storeModal" class="store-modal">
        <div class="store-content">
            <span class="close-modal" onclick="closeStoreModal()">&times;</span>
            <h3 class="text-center mb-4" style="font-weight: 600;">Pilih Toko Terdekat</h3>

            <div class="store-grid">
                @foreach ($storesFinal as $store)
                    <div class="store-card"
                        onclick="selectStore('{{ $store['nama'] }}', '{{ $store['wa'] }}', '{{ $store['gambar'] }}', '{{ $store['alamat'] ?? '' }}')">
                        <img src="{{ $store['gambar'] }}" alt="{{ $store['nama'] }}" class="store-image">
                        <div class="store-name">{{ $store['nama'] }}</div>
                        @if(isset($store['alamat']))
                            <div class="store-address">{{ $store['alamat'] }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('js/selectStore.js') }}"></script>
    <script>
        initializeStoreData(
            @json($produkArray),
            "{{ $produk }}",
            "{{ $harga }}",
            "{{ $satuan ?? 'pcs' }}"
        );
    </script>
@endsection

@endsection