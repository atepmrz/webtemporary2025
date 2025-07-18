const promoModalData = window.promoModalData || [];
let currentPromoItem = null;

function openPromoModal(promoIndex) {
    currentPromoItem = promoModalData[promoIndex];
    const modal = document.getElementById('promoProductModal');
    const modalTitle = document.getElementById('promoModalTitle');
    const modalBody = document.getElementById('promoModalBody');
    
    modalTitle.textContent = currentPromoItem.nama;
    
    if (currentPromoItem.produk.length > 1) {
        let html = '<div class="promo-product-selection">';
        html += '<p style="margin-bottom: 15px; color: #666; font-weight: 500;">Pilih produk yang ingin dibeli:</p>';
        
        currentPromoItem.produk.forEach((produk, index) => {
            html += `
                <div class="promo-product-option">
                    <label class="promo-product-label">
                        <input type="radio" name="selectedPromoProduct" value="${index}" ${index === 0 ? 'checked' : ''}>
                        <div class="promo-product-info">
                            <span class="promo-product-name">${produk.nama}</span>
                            <span class="promo-product-price">Rp ${formatPromoPrice(produk.harga)}</span>
                        </div>
                    </label>
                </div>
            `;
        });
        
        html += '</div>';
        modalBody.innerHTML = html;
    } else {
        const produk = currentPromoItem.produk[0];
        modalBody.innerHTML = `
            <div class="promo-single-product-info">
                <div class="promo-single-product-name">${produk.nama}</div>
                <div class="promo-single-product-price">Rp ${formatPromoPrice(produk.harga)}</div>
                <p style="color: #666; margin-top: 10px;">Klik "Beli Sekarang" untuk melanjutkan</p>
            </div>
        `;
    }
    
    modal.style.display = 'flex';
}

function closePromoModal() {
    const modal = document.getElementById('promoProductModal');
    modal.style.display = 'none';
    currentPromoItem = null;
}

function confirmPromoPurchase() {
    if (!currentPromoItem) return;
    
    let selectedProduct;
    
    if (currentPromoItem.produk.length > 1) {
        const selectedRadio = document.querySelector('input[name="selectedPromoProduct"]:checked');
        if (!selectedRadio) return;
        
        const selectedIndex = parseInt(selectedRadio.value);
        selectedProduct = currentPromoItem.produk[selectedIndex];
    } else {
        selectedProduct = currentPromoItem.produk[0];
    }
    
    const url = window.confirmPromoRoute + `?produk=${encodeURIComponent(selectedProduct.nama)}&harga=${selectedProduct.harga}`;
    window.location.href = url;
}

function formatPromoPrice(price) {
    return new Intl.NumberFormat('id-ID').format(price);
}

document.getElementById('promoProductModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closePromoModal();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && document.getElementById('promoProductModal')?.style.display === 'flex') {
        closePromoModal();
    }
});
