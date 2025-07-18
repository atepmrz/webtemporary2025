let selectedStoreData = {};

let produkData = [];
let produkSingle = '';
let hargaSingle = '';
let satuanSingle = 'pcs';

function initializeStoreData(produkArray, produk, harga, satuan) {
    produkData = produkArray;
    produkSingle = produk;
    hargaSingle = harga;
    satuanSingle = satuan || 'pcs';
}

function openStoreModal() {
    document.getElementById('storeModal').style.display = 'flex';
}

function closeStoreModal() {
    document.getElementById('storeModal').style.display = 'none';
}

function selectStore(storeName, waNumber, storeImage, storeAddress = '') {
    selectedStoreData = {
        name: storeName,
        wa: waNumber,
        image: storeImage,
        address: storeAddress
    };

    document.getElementById('selectedStoreName').textContent = storeName;
    document.getElementById('selectedStoreImage').src = storeImage;

    closeStoreModal();
    document.getElementById('paymentSection').style.display = 'block';

    document.getElementById('paymentSection').scrollIntoView({
        behavior: 'smooth'
    });
}

function sendToWhatsApp() {
    if (!selectedStoreData.wa) {
        alert('Silakan pilih toko terlebih dahulu!');
        openStoreModal();
        return;
    }

    const waNumber = selectedStoreData.wa;
    const voucherCode = document.getElementById('voucherCode').value;

    let message = `Halo admin *${selectedStoreData.name}*,\n\n`;
    message += `Saya ingin memesan:\n`;

    if (Array.isArray(produkData) && produkData.length > 1) {
        produkData.forEach((item, index) => {
            message += `📌 *Produk ${index + 1}:* ${item.nama}\n`;
            message += `💰 *Harga:* Rp. ${parseInt(item.harga).toLocaleString('id-ID')}/${item.satuan || 'pcs'}\n\n`;
        });
        
        const totalHarga = produkData.reduce((sum, item) => sum + parseInt(item.harga), 0);
        message += `💵 *Total Harga:* Rp. ${totalHarga.toLocaleString('id-ID')}\n`;
    } else {
        message += `📌 *Produk:* ${produkSingle}\n`;
        message += `💰 *Harga:* Rp. ${parseInt(hargaSingle).toLocaleString('id-ID')}/${satuanSingle}\n`;
    }

    if (voucherCode) {
        message += `🎟️ *Kode Voucher:* ${voucherCode}\n`;
    }

    message += `\nApakah produk ini masih tersedia?`;

    const encodedMessage = encodeURIComponent(message);
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const waUrl = isMobile ?
        `https://wa.me/${waNumber}?text=${encodedMessage}` :
        `https://web.whatsapp.com/send?phone=${waNumber}&text=${encodedMessage}`;

    window.open(waUrl, '_blank');
}

document.addEventListener('DOMContentLoaded', function() {
    window.onclick = function(event) {
        const modal = document.getElementById('storeModal');
        if (event.target === modal) {
            closeStoreModal();
        }
    }
});