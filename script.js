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

// ===== FUNGSI ISI DATA KONTAK =====
function populateContactData() {
    // Cek apakah WA_CONFIG tersedia
    if (typeof WA_CONFIG === 'undefined') {
        console.error('❌ WA_CONFIG tidak ditemukan!');
        return;
    }

    console.log('✅ WA_CONFIG ditemukan:', WA_CONFIG);
	const yearnow1 = new Date(Date.now()).getFullYear();
    // Data mapping: id => value
    const dataMap = {
        'waDisplay': WA_CONFIG.notlp,
        'emailDisplay': WA_CONFIG.email,
        'phoneDisplay': WA_CONFIG.notlp,
        'jamDisplay': WA_CONFIG.jam_oprasional,
        'workshopDisplay': WA_CONFIG.workshop,
        'companyDisplay': WA_CONFIG.companyname,
	    'sapaDisplay': WA_CONFIG.sapa,
	    'yearDisplay': WA_CONFIG.yearold,
		'yearnow': yearnow1,
    };

	

    // Isi semua element dengan ID yang sesuai
    Object.keys(dataMap).forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.textContent = dataMap[id];
            console.log(`✅ #${id} diisi: ${dataMap[id]}`);
        } else {
            console.warn(`⚠️ Element #${id} tidak ditemukan di halaman ini`);
        }
    });

    // Update link WhatsApp
    const waLink = document.getElementById('waLink');
    if (waLink) {
        const msg = waLink.dataset.message || WA_CONFIG.defaultMessage;
        const fullMessage = `${WA_CONFIG.sapa}, ${msg}`;
        waLink.href = `https://wa.me/${WA_CONFIG.number}?text=${encodeURIComponent(fullMessage)}`;
        waLink.target = '_blank';
        console.log('✅ waLink diupdate');
    }

    // Update link Email
    const emailLink = document.getElementById('emailLink');
    if (emailLink) {
        emailLink.href = `mailto:${WA_CONFIG.email}`;
        console.log('✅ emailLink diupdate');
    }

    // Update link Telepon
    const phoneLink = document.getElementById('phoneLink');
    if (phoneLink) {
        phoneLink.href = `tel:${WA_CONFIG.number}`;
        console.log('✅ phoneLink diupdate');
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
