// config.js
const WA_CONFIG = {
    number: '6285887639199',
    defaultMessage: 'Saya ingin konsultasi tentang canopy, Terimakasih.',
    notlp: '0858-8763-9199',
    email: 'rizkiabadicanopy@gmail.com',
    workshop: 'Sukabumi - Bogor - Jakarta - Bandung - Depok - Tangerang - Serang - dan sekitarnya',
    jam_oprasional: '08:00 - 17:00 (Senin - Minggu)',
    sapa: 'Rizki Abadi Canopy',
    companyname: 'Rizki Abadi Canopy',
    yearold: '1999'
};

// ===== FUNGSI LOAD FILE =====
async function loadFile(file, elementId) {
    const element = document.getElementById(elementId);
    if (!element) {
        console.warn(`Element #${elementId} tidak ditemukan`);
        return;
    }

    try {
        const response = await fetch(file);
        if (!response.ok) {
            throw new Error(`Gagal memuat ${file} (${response.status})`);
        }
        element.innerHTML = await response.text();
    } catch (err) {
        console.error('Error loading file:', err);
    }
}

// ===== FUNGSI WHATSAPP =====
function openWhatsApp(message) {
    const msg = message || WA_CONFIG.defaultMessage;
    const fullMessage = `${WA_CONFIG.sapa}, ${msg}`;
    const encodedMessage = encodeURIComponent(fullMessage);
    window.open(`https://wa.me/${WA_CONFIG.number}?text=${encodedMessage}`, '_blank');
}

// ===== FUNGSI ISI DATA KONTAK (MENGGUNAKAN CLASS) =====
function populateContactData() {
    // Cek apakah WA_CONFIG tersedia
    if (typeof WA_CONFIG === 'undefined') {
        console.error('❌ WA_CONFIG tidak ditemukan!');
        return;
    }

    console.log('✅ WA_CONFIG ditemukan:', WA_CONFIG);

    const yearnow = new Date().getFullYear();

    // Data mapping: class => value
    const dataMap = [
        { class: 'wa-display', value: WA_CONFIG.notlp },
        { class: 'email-display', value: WA_CONFIG.email },
        { class: 'phone-display', value: WA_CONFIG.notlp },
        { class: 'jam-display', value: WA_CONFIG.jam_oprasional },
        { class: 'workshop-display', value: WA_CONFIG.workshop },
        { class: 'company-display', value: WA_CONFIG.companyname },
        { class: 'sapa-display', value: WA_CONFIG.sapa },
        { class: 'year-display', value: WA_CONFIG.yearold },
        { class: 'yearnow-display', value: yearnow }
    ];

    // Isi semua element dengan class yang sesuai
    dataMap.forEach(item => {
        const elements = document.querySelectorAll(`.${item.class}`);
        if (elements.length > 0) {
            elements.forEach(el => {
                el.textContent = item.value;
            });
            console.log(`✅ .${item.class} diisi: ${item.value} (${elements.length} element)`);
        } else {
            console.warn(`⚠️ Element .${item.class} tidak ditemukan di halaman ini`);
        }
    });

    // ===== UPDATE LINK WHATSAPP =====
    const waLinks = document.querySelectorAll('.wa-link');
    waLinks.forEach(link => {
        const msg = link.dataset.message || WA_CONFIG.defaultMessage;
        const fullMessage = `${WA_CONFIG.sapa}, ${msg}`;
        link.href = `https://wa.me/${WA_CONFIG.number}?text=${encodeURIComponent(fullMessage)}`;
        link.target = '_blank';
    });
    if (waLinks.length > 0) {
        console.log(`✅ ${waLinks.length} link WhatsApp diupdate`);
    }

    // ===== UPDATE LINK EMAIL =====
    const emailLinks = document.querySelectorAll('.email-link');
    emailLinks.forEach(link => {
        link.href = `mailto:${WA_CONFIG.email}`;
    });
    if (emailLinks.length > 0) {
        console.log(`✅ ${emailLinks.length} link Email diupdate`);
    }

    // ===== UPDATE LINK TELEPON =====
    const phoneLinks = document.querySelectorAll('.phone-link');
    phoneLinks.forEach(link => {
        link.href = `tel:${WA_CONFIG.number}`;
    });
    if (phoneLinks.length > 0) {
        console.log(`✅ ${phoneLinks.length} link Telepon diupdate`);
    }

    // ===== UPDATE TAHUN DI FOOTER =====
    const yearElements = document.querySelectorAll('.current-year');
    if (yearElements.length > 0) {
        yearElements.forEach(el => {
            el.textContent = yearnow;
        });
        console.log(`✅ Tahun diperbarui: ${yearnow} (${yearElements.length} element)`);
    }

    console.log('✅ Semua data kontak berhasil dimuat!');
}

// ===== SATU EVENT DOMContentLoaded =====
document.addEventListener("DOMContentLoaded", async function() {
    console.log('🔄 DOM siap, mulai load...');

    // 1. Load header dan footer
    await Promise.all([
        loadFile("/shared/header.html", "header"),
        loadFile("/shared/footer.html", "footer")
    ]);

    // 2. Isi data kontak (dijalankan setelah header/footer loaded)
    populateContactData();

    console.log('✅ Semua selesai!');
});
